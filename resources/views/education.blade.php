@extends('layout')

@section('title', 'Education')

@section('content')
<style>
    #education {
        min-height: 100vh;
        padding: 100px 9vw 60px;
    }

    .edu-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .edu-label {
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

    .edu-title {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(36px, 5vw, 60px);
        color: #fff;
        margin: 0 0 60px 0;
        letter-spacing: 1px;
        font-weight: 800;
        text-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .timeline {
        max-width: 900px;
        margin: 0 auto 60px;
        position: relative;
        padding-left: 3rem;
    }

    .timeline-line {
        position: absolute;
        left: 1rem;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(180deg, rgba(255,255,255,0.6) 0%, rgba(255,255,255,0.3) 100%);
    }

    .timeline-item {
        position: relative;
        margin-bottom: 3rem;
    }

    .timeline-dot {
        position: absolute;
        left: -2.5rem;
        top: 0;
        width: 20px;
        height: 20px;
        background: #fff;
        border-radius: 50%;
        border: 3px solid rgba(255,255,255,0.5);
        box-shadow: 0 0 0 3px rgba(255,255,255,0.2);
    }

    .timeline-content {
        padding: 2rem;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 15px;
    }

    .timeline-badge {
        background: rgba(255,255,255,0.2);
        color: white;
        padding: 0.3rem 1rem;
        border-radius: 20px;
        font-size: 0.9rem;
        display: inline-block;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }

    .timeline-content h2 {
        color: #fff;
        margin: 1rem 0 0.5rem 0;
        font-size: 1.5rem;
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .timeline-content h3 {
        color: rgba(255,255,255,0.9);
        font-size: 1.2rem;
        margin-bottom: 1rem;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }

    .timeline-content p {
        color: rgba(255,255,255,0.85);
        margin: 0.5rem 0;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }

    .grades-section {
        max-width: 700px;
        margin: 0 auto;
    }

    .grades-title {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        color: #fff;
        text-align: center;
        margin-bottom: 30px;
        font-weight: 700;
        text-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .grades-table {
        width: 100%;
        border-collapse: collapse;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 12px;
        overflow: hidden;
    }

    .grades-table thead {
        background: rgba(255,255,255,0.1);
    }

    .grades-table th {
        padding: 1rem;
        color: #fff;
        font-weight: 700;
        text-align: left;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }

    .grades-table td {
        padding: 1rem;
        color: rgba(255,255,255,0.9);
        border-top: 1px solid rgba(255,255,255,0.1);
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }

    .grades-table .gwa-row {
        background: rgba(255,255,255,0.15);
        font-weight: 700;
    }

    .grades-table .gwa-row td {
        font-size: 1.1rem;
    }
</style>

<section id="education">
    <div class="edu-header">
        <span class="edu-label">Education</span>
        <h2 class="edu-title">Educational Background</h2>
    </div>

    <div class="timeline">
        <div class="timeline-line"></div>
        
        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <span class="timeline-badge">2024 - Present</span>
                <h2>Tertiary Education</h2>
                <h3>Technological University of the Philippines - Taguig</h3>
                <p><strong>Program:</strong> Bachelor of Technical Vocational Teacher Education Major in Computer Programming</p>
                <p>📍 KM14 East Service Road, South Super Highway, Taguig, Metro Manila</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <span class="timeline-badge">2022 - 2024</span>
                <h2>Senior High School</h2>
                <h3>Signal Village National High School</h3>
                <p><strong>Strand:</strong> HUMSS (Humanities and Social Sciences)</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <span class="timeline-badge">2018 - 2022</span>
                <h2>Junior High School</h2>
                <h3>Signal Village National High School</h3>
            </div>
        </div>
    </div>

    <div class="grades-section">
        <h3 class="grades-title">Academic Performance</h3>
        <table class="grades-table">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th style="text-align: center;">Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>The Contemporary World</td>
                    <td style="text-align: center; font-weight: bold;">1.75</td>
                </tr>
                <tr>
                    <td>Environmental Science</td>
                    <td style="text-align: center; font-weight: bold;">1.75</td>
                </tr>
                <tr>
                    <td>Ethics</td>
                    <td style="text-align: center; font-weight: bold;">1.75</td>
                </tr>
                <tr>
                    <td>General Physics (Lab)</td>
                    <td style="text-align: center; font-weight: bold;">1.50</td>
                </tr>
                <tr>
                    <td>Pathfit</td>
                    <td style="text-align: center; font-weight: bold;">1.25</td>
                </tr>
                <tr class="gwa-row">
                    <td>General Weighted Average (GWA)</td>
                    <td style="text-align: center;">1.50</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection
