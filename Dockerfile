FROM php:8.4-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libsqlite3-dev \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    && docker-php-ext-install \
    pdo_sqlite \
    mbstring \
    bcmath \
    intl \
    zip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install Node.js 22
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs

WORKDIR /var/www/html

# Copy Laravel application
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install frontend dependencies and build assets
RUN npm install
RUN npm run build

# Configure Apache
RUN a2enmod rewrite

# Laravel must use the public directory
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' \
    /etc/apache2/sites-available/000-default.conf

RUN printf '<Directory /var/www/html/public>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n' > /etc/apache2/conf-available/laravel.conf

RUN a2enconf laravel

# Laravel permissions
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

    # Make Apache listen on Render's default port
RUN sed -i 's/Listen 80/Listen 10000/' /etc/apache2/ports.conf

RUN sed -i 's/:80>/:10000>/' \
    /etc/apache2/sites-available/000-default.conf

EXPOSE 10000

CMD ["/usr/local/bin/apache2-foreground"]