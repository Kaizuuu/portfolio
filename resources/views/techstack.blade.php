@extends('layout')

@section('title', 'Tech Stack')

@section('content')
<style>
    #techstack {
        min-height: 100vh;
        padding: 100px 9vw 60px;
    }

    .tech-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .tech-label {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: rgba(255,255,255,0.9);
        border: 1px solid rgba(255,255,255,0.5);
        border-radius: 999px;
        padding: 5px 18px;
        display: inline-block;
        margin-bottom: 24px;
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .tech-title {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(36px, 5vw, 60px);
        color: #fff;
        margin: 0;
        letter-spacing: 1px;
        font-weight: 800;
        text-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .tech-section {
        max-width: 1200px;
        margin: 0 auto 60px;
    }

    .tech-section-title {
        font-size: 24px;
        color: #fff;
        text-align: center;
        margin-bottom: 30px;
        font-weight: 700;
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .carousel-container {
        overflow: hidden;
        position: relative;
        padding: 20px 0;
    }

    .carousel-track {
        display: flex;
        gap: 40px;
        animation: scroll 20s linear infinite;
    }

    .carousel-track-reverse {
        display: flex;
        gap: 40px;
        animation: scrollReverse 20s linear infinite;
    }

    .carousel-item {
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        min-width: 120px;
    }

    .tech-icon-box {
        width: 100px;
        height: 100px;
        background: rgba(255,255,255,0.1);
        border: 2px solid rgba(255,255,255,0.2);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
        padding: 15px;
    }

    .tech-icon-box img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .carousel-item:hover .tech-icon-box {
        background: rgba(255,255,255,0.2);
        border-color: rgba(255,255,255,0.4);
        transform: translateY(-5px);
    }

    .tech-name {
        font-size: 14px;
        color: #fff;
        font-weight: 600;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    @keyframes scrollReverse {
        0% {
            transform: translateX(-50%);
        }
        100% {
            transform: translateX(0);
        }
    }

    .carousel-track:hover,
    .carousel-track-reverse:hover {
        animation-play-state: paused;
    }
</style>

<section id="techstack">
    <div class="tech-header">
        <span class="tech-label">Tech Stack</span>
        <h2 class="tech-title">Technologies I Use</h2>
    </div>

    <div class="tech-section">
        <h3 class="tech-section-title">Languages I Learned</h3>
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/html.png') }}" alt="HTML">
                    </div>
                    <span class="tech-name">HTML</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/css.png') }}" alt="CSS">
                    </div>
                    <span class="tech-name">CSS</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/javascript.png') }}" alt="JavaScript">
                    </div>
                    <span class="tech-name">JavaScript</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/php.png') }}" alt="PHP">
                    </div>
                    <span class="tech-name">PHP</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/python.png') }}" alt="Python">
                    </div>
                    <span class="tech-name">Python</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/java.png') }}" alt="Java">
                    </div>
                    <span class="tech-name">Java</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/sql.png') }}" alt="SQL">
                    </div>
                    <span class="tech-name">SQL</span>
                </div>
                <!-- Duplicate for seamless loop -->
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/html.png') }}" alt="HTML">
                    </div>
                    <span class="tech-name">HTML</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/css.png') }}" alt="CSS">
                    </div>
                    <span class="tech-name">CSS</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/javascript.png') }}" alt="JavaScript">
                    </div>
                    <span class="tech-name">JavaScript</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/php.png') }}" alt="PHP">
                    </div>
                    <span class="tech-name">PHP</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/python.png') }}" alt="Python">
                    </div>
                    <span class="tech-name">Python</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/java.png') }}" alt="Java">
                    </div>
                    <span class="tech-name">Java</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('languages/sql.png') }}" alt="SQL">
                    </div>
                    <span class="tech-name">SQL</span>
                </div>
            </div>
        </div>
    </div>

    <div class="tech-section">
        <h3 class="tech-section-title">IDEs I Used</h3>
        <div class="carousel-container">
            <div class="carousel-track-reverse">
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('ides/vscode.png') }}" alt="VS Code">
                    </div>
                    <span class="tech-name">VS Code</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('ides/jetbrains.png') }}" alt="JetBrains">
                    </div>
                    <span class="tech-name">JetBrains</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('ides/pycharm.png') }}" alt="PyCharm">
                    </div>
                    <span class="tech-name">PyCharm</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('ides/androidstudio.png') }}" alt="Android Studio">
                    </div>
                    <span class="tech-name">Android Studio</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('ides/antigravity.png') }}" alt="Antigravity">
                    </div>
                    <span class="tech-name">Antigravity</span>
                </div>
                <!-- Duplicate for seamless loop -->
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('ides/vscode.png') }}" alt="VS Code">
                    </div>
                    <span class="tech-name">VS Code</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('ides/jetbrains.png') }}" alt="JetBrains">
                    </div>
                    <span class="tech-name">JetBrains</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('ides/pycharm.png') }}" alt="PyCharm">
                    </div>
                    <span class="tech-name">PyCharm</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('ides/androidstudio.png') }}" alt="Android Studio">
                    </div>
                    <span class="tech-name">Android Studio</span>
                </div>
                <div class="carousel-item">
                    <div class="tech-icon-box">
                        <img src="{{ asset('ides/antigravity.png') }}" alt="Antigravity">
                    </div>
                    <span class="tech-name">Antigravity</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
