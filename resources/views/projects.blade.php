@extends('layout')

@section('title', 'Projects')

@section('content')
<style>
    #projects {
        min-height: 100vh;
        padding: 100px 48px 60px;
        max-width: 100vw;
        overflow-x: hidden;
    }

    .projects-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .projects-label {
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

    .projects-title {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(36px, 5vw, 60px);
        color: #fff;
        margin: 0;
        letter-spacing: 1px;
        font-weight: 800;
        text-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .project-card {
        padding: 30px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 15px;
        transition: all 0.3s;
    }

    .project-card:hover {
        background: rgba(255,255,255,0.1);
        border-color: rgba(255,255,255,0.3);
        transform: translateY(-5px);
    }

    .project-icon {
        font-size: 48px;
        margin-bottom: 20px;
    }

    .project-card h3 {
        font-size: 24px;
        color: #fff;
        margin: 0 0 12px 0;
        font-weight: 700;
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .project-card p {
        font-size: 14px;
        color: rgba(255,255,255,0.85);
        line-height: 1.8;
        margin: 0 0 20px 0;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }

    .project-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .tech-tag {
        font-size: 11px;
        padding: 4px 12px;
        background: rgba(255,255,255,0.15);
        border-radius: 12px;
        color: rgba(255,255,255,0.9);
        font-weight: 600;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }
</style>

<section id="projects">
    <div class="projects-header">
        <span class="projects-label">Projects</span>
        <h2 class="projects-title">My Work</h2>
    </div>

    <div class="projects-grid">
        <div class="project-card">
            <div class="project-icon">💼</div>
            <h3>Portfolio Website</h3>
            <p>A personal portfolio website showcasing my skills, education, and projects. Built with modern web technologies and responsive design.</p>
            <div class="project-tech">
                <span class="tech-tag">Laravel</span>
                <span class="tech-tag">PHP</span>
                <span class="tech-tag">HTML/CSS</span>
                <span class="tech-tag">JavaScript</span>
            </div>
        </div>

        <div class="project-card">
            <div class="project-icon">📚</div>
            <h3>Learning Management System</h3>
            <p>A web-based platform for managing educational content, assignments, and student progress tracking.</p>
            <div class="project-tech">
                <span class="tech-tag">PHP</span>
                <span class="tech-tag">MySQL</span>
                <span class="tech-tag">Bootstrap</span>
            </div>
        </div>

        <div class="project-card">
            <div class="project-icon">🛍️</div>
            <h3>E-Commerce Website</h3>
            <p>An online shopping platform with product catalog, shopping cart, and checkout functionality.</p>
            <div class="project-tech">
                <span class="tech-tag">Laravel</span>
                <span class="tech-tag">MySQL</span>
                <span class="tech-tag">JavaScript</span>
            </div>
        </div>
    </div>
</section>
@endsection
