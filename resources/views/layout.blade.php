<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Lawrence R. Alcantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            overflow-x: hidden;
            overflow-y: scroll;
            width: 100%;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7e8ba3 100%);
            background-attachment: fixed;
            min-height: 100vh;
            width: 100%;
            overflow-x: hidden;
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

        /* Floating particles */
        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-20px) translateX(10px); }
            50% { transform: translateY(-10px) translateX(-10px); }
            75% { transform: translateY(-30px) translateX(5px); }
        }
    </style>
    <script>
        // Cursor trail effect
        document.addEventListener('DOMContentLoaded', () => {
            let cursorTrail = [];
            const trailLength = 10;

            document.addEventListener('mousemove', (e) => {
                const trail = document.createElement('div');
                trail.style.cssText = `
                    position: fixed;
                    width: 10px;
                    height: 10px;
                    background: rgba(74, 123, 183, 0.5);
                    border-radius: 50%;
                    pointer-events: none;
                    z-index: 9999;
                    left: ${e.clientX - 5}px;
                    top: ${e.clientY - 5}px;
                    animation: fadeOutTrail 0.5s forwards;
                `;
                
                document.body.appendChild(trail);
                cursorTrail.push(trail);
                
                if (cursorTrail.length > trailLength) {
                    const oldTrail = cursorTrail.shift();
                    oldTrail.remove();
                }
                
                setTimeout(() => trail.remove(), 500);
            });

            // Create floating particles
            const particleCount = 30;
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.style.cssText = `
                    position: fixed;
                    width: ${Math.random() * 4 + 2}px;
                    height: ${Math.random() * 4 + 2}px;
                    background: rgba(255, 255, 255, 0.3);
                    border-radius: 50%;
                    pointer-events: none;
                    z-index: 1;
                    left: ${Math.random() * 100}vw;
                    top: ${Math.random() * 100}vh;
                    animation: float ${Math.random() * 10 + 5}s infinite ease-in-out;
                `;
                document.body.appendChild(particle);
            }
        });

        // Add fadeOut animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeOutTrail {
                to {
                    opacity: 0;
                    transform: scale(0);
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</head>
<body>
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
    
    @yield('content')
</body>
</html>
