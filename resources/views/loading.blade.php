<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Lawrence R. Alcantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        html {
            overflow-x: hidden;
            overflow-y: scroll;
            width: 100%;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7e8ba3 100%);
            overflow-x: hidden;
            width: 100%;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background:
                radial-gradient(ellipse 70% 80% at 65% 50%, #2a5298 0%, transparent 65%),
                radial-gradient(ellipse 50% 60% at 20% 60%, #1e3c72 0%, transparent 60%);
            pointer-events: none;
            z-index: 0;
        }

        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7e8ba3 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        @keyframes fadeUp {
            to {
                transform: translateY(-100%);
            }
        }

        .loading-text {
            font-size: 5rem;
            font-weight: 800;
            font-family: 'Poppins', sans-serif;
            color: white;
            letter-spacing: 0.5rem;
            margin-bottom: 3rem;
            animation: textGlow 2s ease-in-out infinite;
        }

        @keyframes textGlow {
            0%, 100% {
                text-shadow: 0 0 20px rgba(255, 255, 255, 0.5),
                             0 0 40px rgba(255, 255, 255, 0.3);
            }
            50% {
                text-shadow: 0 0 30px rgba(255, 255, 255, 0.8),
                             0 0 60px rgba(255, 255, 255, 0.5);
            }
        }

        .loader {
            width: 300px;
            height: 6px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }

        .loader-bar {
            height: 100%;
            background: linear-gradient(90deg, #1e3c72, #2a5298, #4a7bb7);
            border-radius: 10px;
            animation: loading 3s ease-out forwards;
        }

        @keyframes loading {
            0% { width: 0%; }
            100% { width: 100%; }
        }

        .loading-dots {
            color: white;
            font-size: 1rem;
        }

        .loading-dots::after {
            content: '';
            animation: dots 1.5s steps(4, end) infinite;
        }

        @keyframes dots {
            0%, 20% { content: ''; }
            40% { content: '.'; }
            60% { content: '..'; }
            80%, 100% { content: '...'; }
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 48px;
            background: transparent;
            z-index: 100;
            max-width: 100vw;
        }

        .nav-logo {
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
            font-weight: 800;
            letter-spacing: 3px;
            color: #fff;
            text-decoration: none;
            cursor: pointer;
            flex-shrink: 0;
        }

        nav ul {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 36px;
            margin: 0;
            padding: 0;
            flex-shrink: 0;
        }

        nav li {
            margin: 0;
            padding: 0;
            flex-shrink: 0;
        }

        nav a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            transition: color .25s;
            display: block;
            white-space: nowrap;
        }
        nav a:hover { color: #fff; }

        .hero-landing {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-left: 48px;
            padding-right: 48px;
            overflow: hidden;
            max-width: 100vw;
            justify-content: space-between;
        }

        .hero-content-landing {
            max-width: 600px;
            animation: fadeUpContent .9s ease both;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            flex-shrink: 0;
            margin-left: 100px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 999px;
            padding: 6px 16px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.7);
            margin-bottom: 28px;
            align-self: flex-start;
        }
        .badge::before {
            content: '';
            width: 6px; height: 6px;
            border-radius: 50%;
            background: #4a7bb7;
            box-shadow: 0 0 6px #4a7bb7;
        }

        .hero-name-landing {
            font-family: 'Poppins', sans-serif;
            font-size: clamp(56px, 7vw, 84px);
            line-height: .95;
            letter-spacing: 1px;
            font-weight: 800;
            text-align: left;
            width: 100%;
        }
        .hero-name-landing .first { color: #fff; display: block; text-align: left; }
        .hero-name-landing .last  { color: #4a7bb7; display: block; text-align: left; }

        .hero-sub-landing {
            margin-top: 18px;
            font-size: 15px;
            font-weight: 400;
            color: rgba(255,255,255,0.7);
            letter-spacing: .5px;
            text-align: left;
            width: 100%;
        }

        .hero-actions-landing {
            margin-top: 36px;
            display: flex;
            align-items: center;
            gap: 28px;
            width: 100%;
        }

        .btn-explore {
            padding: 14px 32px;
            border-radius: 999px;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            transition: all .25s;
            text-decoration: none;
            display: inline-block;
        }
        .btn-explore:hover { 
            background: linear-gradient(135deg, #2a5298 0%, #4a7bb7 100%);
            transform: scale(1.04); 
        }

        .social-icons {
            display: flex;
            gap: 14px;
        }
        .social-icons a {
            width: 34px; height: 34px;
            border-radius: 50%;
            border: 1.5px solid rgba(255,255,255,0.25);
            display: flex; align-items: center; justify-content: center;
            color: #fff;
            font-size: 13px;
            text-decoration: none;
            transition: border-color .2s, background .2s;
        }
        .social-icons a:hover { 
            border-color: #4a7bb7; 
            background: rgba(74, 123, 183, .2); 
        }

        .hero-photo-landing {
            position: absolute;
            right: 0;
            bottom: 0;
            height: 95vh;
            width: auto;
            object-fit: cover;
            object-position: bottom right;
            pointer-events: none;
            user-select: none;
            animation: fadeInPhoto 1.1s ease both;
        }

        .scroll-hint {
            display: none;
        }

        .hero-landing::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 150px;
            background: linear-gradient(to top, rgba(0,0,0,0.6) 0%, transparent 100%);
            pointer-events: none;
            z-index: 2;
        }

        @keyframes fadeUpContent {
            from { opacity: 0; transform: translateY(40px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInPhoto {
            from { opacity: 0; } to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="loading-screen">
        <div class="loading-text">PORTFOLIO</div>
        <div class="loader">
            <div class="loader-bar"></div>
        </div>
        <div class="loading-dots">Loading</div>
    </div>

    <nav>
        <a class="nav-logo" href="/">RENCE</a>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/education">Education</a></li>
            <li><a href="/skills">Skills</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/family">Tech Stack</a></li>
            <li><a href="/journal">Journal</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    
    <section class="hero-landing">
        <div class="hero-content-landing">
            <span class="badge">Available for new projects</span>

            <h1 class="hero-name-landing">
                <span class="first">Lawrence</span>
                <span class="last">Alcantara.</span>
            </h1>

            <p class="hero-sub-landing">Student | Future Technical Vocational Teacher</p>

            <div class="hero-actions-landing">
                <a href="/about" class="btn-explore">Explore More</a>

                <div class="social-icons">
                    <a href="#" title="Facebook">f</a>
                    <a href="#" title="Twitter">𝕏</a>
                    <a href="#" title="LinkedIn">in</a>
                    <a href="#" title="GitHub">gh</a>
                </div>
            </div>
        </div>

        <img
            class="hero-photo-landing"
            src="{{ asset('profile.png') }}"
            alt="Lawrence Alcantara"
        />

        <span class="scroll-hint">Scroll Down</span>
    </section>

    <script>
        // Check if loading has been shown before
        if (sessionStorage.getItem('loadingShown')) {
            // Hide loading screen immediately
            document.querySelector('.loading-screen').style.display = 'none';
        } else {
            // Show loading animation
            setTimeout(() => {
                document.querySelector('.loading-screen').style.animation = 'fadeUp 0.8s ease-out forwards';
                // Mark loading as shown
                sessionStorage.setItem('loadingShown', 'true');
            }, 3200);
        }
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
