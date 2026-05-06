@extends('layout')

@section('title', 'Skills')

@section('content')
<style>
    #skills {
        min-height: 100vh;
        padding: 100px 9vw 60px;
    }

    .skills-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .skills-label {
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

    .skills-title {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(36px, 5vw, 60px);
        color: #fff;
        margin: 0;
        letter-spacing: 1px;
        font-weight: 800;
        text-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .skills-list {
        max-width: 800px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .skill-item {
        padding: 24px 30px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-left: 4px solid rgba(255,255,255,0.4);
        border-radius: 12px;
        transition: all 0.3s;
    }

    .skill-item:hover {
        background: rgba(255,255,255,0.1);
        border-left-color: #fff;
        transform: translateX(10px);
    }

    .skill-item h3 {
        font-size: 20px;
        color: #fff;
        margin: 0 0 8px 0;
        font-weight: 700;
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .skill-item p {
        font-size: 14px;
        color: rgba(255,255,255,0.85);
        margin: 0;
        line-height: 1.6;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }
</style>

<section id="skills">
    <div class="skills-header">
        <span class="skills-label">Skills</span>
        <h2 class="skills-title">What I Can Do</h2>
    </div>

    <div class="skills-list">
        <div class="skill-item">
            <h3>💻 Computer Literate</h3>
            <p>Proficient in using various computer applications and software for academic and personal projects.</p>
        </div>

        <div class="skill-item">
            <h3>👥 Good Leadership Skills</h3>
            <p>Experienced in leading teams and managing group projects effectively.</p>
        </div>

        <div class="skill-item">
            <h3>💬 Good Communication Skills</h3>
            <p>Able to communicate ideas clearly and work collaboratively with others.</p>
        </div>

        <div class="skill-item">
            <h3>📚 Book Writing</h3>
            <p>Creative writing skills with experience in crafting stories and narratives.</p>
        </div>
    </div>
</section>
@endsection
