@extends('layout')

@section('title', 'About Me')

@section('content')
<style>
    #about {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 100px 48px 60px;
        max-width: 100vw;
        overflow-x: hidden;
    }

    .about-label {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: rgba(255,255,255,0.9);
        border: 1px solid rgba(255,255,255,0.5);
        border-radius: 999px;
        padding: 5px 18px;
        margin-bottom: 24px;
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .about-title {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(36px, 5vw, 60px);
        color: #fff;
        text-align: center;
        margin-bottom: 60px;
        letter-spacing: 1px;
        font-weight: 800;
        text-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .about-body {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        width: 100%;
        max-width: 960px;
    }

    .about-left {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .about-avatar {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid rgba(255,255,255,0.5);
        box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    }

    .about-avatar-placeholder {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        border: 3px solid rgba(255,255,255,0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 44px;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-weight: 800;
        box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    }

    .about-hello {
        font-size: 20px;
        font-weight: 700;
        color: #fff;
        text-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .about-bio {
        font-size: 13.5px;
        line-height: 1.9;
        color: rgba(255,255,255,0.95);
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }
    .about-bio strong { color: #fff; }

    .about-thanks {
        font-size: 13px;
        color: rgba(255,255,255,0.85);
        font-style: italic;
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .about-right {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .profile-heading {
        font-size: 16px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 4px;
        text-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .profile-row {
        display: flex;
        flex-direction: column;
        gap: 3px;
        padding-bottom: 16px;
        border-bottom: 1px solid rgba(255,255,255,0.15);
    }
    .profile-row:last-child { border-bottom: none; }

    .profile-label {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: rgba(255,255,255,0.85);
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .profile-value {
        font-size: 14px;
        color: #fff;
        font-weight: 500;
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .about-actions {
        display: flex;
        gap: 16px;
        margin-top: 48px;
    }

    .btn-contact {
        padding: 13px 28px;
        border: 2px solid rgba(255,255,255,0.5);
        border-radius: 8px;
        background: transparent;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        cursor: pointer;
        transition: all .25s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }
    .btn-contact:hover { border-color: #fff; background: rgba(255,255,255,0.1); }

    .btn-fulldetails {
        padding: 13px 28px;
        border-radius: 8px;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        border: none;
        cursor: pointer;
        transition: all .25s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }
    .btn-fulldetails:hover { background: linear-gradient(135deg, #2a5298 0%, #4a7bb7 100%); transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,0.4); }

    .modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.88);
        backdrop-filter: blur(8px);
        z-index: 999;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        pointer-events: none;
        transition: opacity .3s;
    }
    .modal-overlay.open {
        opacity: 1;
        pointer-events: all;
    }

    .modal {
        background: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 18px;
        padding: 48px 52px;
        width: 92%;
        max-width: 640px;
        max-height: 88vh;
        overflow-y: auto;
        position: relative;
        transform: translateY(32px) scale(0.98);
        transition: transform .35s ease;
        scrollbar-width: thin;
        scrollbar-color: #2a5298 #f0f0f0;
    }
    .modal-overlay.open .modal {
        transform: translateY(0) scale(1);
    }

    .modal-close {
        position: absolute;
        top: 18px; right: 22px;
        background: none;
        border: none;
        color: #999;
        font-size: 20px;
        cursor: pointer;
        line-height: 1;
        transition: color .2s;
    }
    .modal-close:hover { color: #333; }

    .modal-header {
        margin-bottom: 32px;
    }
    .modal-title {
        font-family: 'Poppins', sans-serif;
        font-size: 42px;
        color: #1e3c72;
        letter-spacing: 1px;
        line-height: 1;
        font-weight: 800;
    }
    .modal-subtitle {
        font-size: 11px;
        color: #2a5298;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        margin-top: 6px;
    }

    .modal-section-title {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #999;
        margin-bottom: 16px;
        margin-top: 28px;
    }

    .modal-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px 36px;
    }

    .modal-field { display: flex; flex-direction: column; gap: 4px; }
    .modal-field-label {
        font-size: 9.5px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #2a5298;
    }
    .modal-field-value {
        font-size: 13.5px;
        color: #333;
        font-weight: 500;
    }

    .modal-divider {
        height: 1px;
        background: #e0e0e0;
        margin: 24px 0 0;
    }

    .modal-full { grid-column: 1 / -1; }

    @media (max-width: 700px) {
        .about-body { grid-template-columns: 1fr; gap: 40px; }
        .modal { padding: 36px 28px; }
        .modal-grid { grid-template-columns: 1fr; }
    }
</style>

<section id="about">
    <span class="about-label">About Me</span>
    <h2 class="about-title">Let me introduce myself.</h2>

    <div class="about-body">
        <div class="about-left">
            <img src="{{ asset('picture.png') }}" alt="Lawrence Alcantara" class="about-avatar">

            <p class="about-hello">Hello,</p>
            <p class="about-bio">
                I'm <strong>Lawrence Alcantara</strong>, a passionate student based in Taguig City,
                Philippines. I'm currently exploring web development and technology, with a keen
                interest in building clean, functional, and user-friendly applications.<br><br>
                I enjoy taking on new challenges, learning modern tools and frameworks, and turning
                ideas into real digital experiences. I'm driven by curiosity and a constant desire to
                grow and improve with every project I take on.
            </p>
            <p class="about-thanks">Thank you!</p>

            <div class="about-actions">
                <a class="btn-contact" href="mailto:lorsrodriguez2005@gmail.com">✉ Contact Me</a>
                <button class="btn-fulldetails" onclick="openModal()">📄 Full Details</button>
            </div>
        </div>

        <div class="about-right">
            <p class="profile-heading">Profile</p>

            <div class="profile-row">
                <span class="profile-label">Full Name</span>
                <span class="profile-value">Lawrence R. Alcantara</span>
            </div>
            <div class="profile-row">
                <span class="profile-label">Birth Date</span>
                <span class="profile-value">November 30, 2005</span>
            </div>
            <div class="profile-row">
                <span class="profile-label">Occupation</span>
                <span class="profile-value">Student</span>
            </div>
            <div class="profile-row">
                <span class="profile-label">Location</span>
                <span class="profile-value">Taguig City, Philippines</span>
            </div>
            <div class="profile-row">
                <span class="profile-label">Email</span>
                <span class="profile-value">lorsrodriguez2005@gmail.com</span>
            </div>
            <div class="profile-row">
                <span class="profile-label">Contact</span>
                <span class="profile-value">09678241854</span>
            </div>
        </div>
    </div>
</section>

<div class="modal-overlay" id="modalOverlay" onclick="handleOverlayClick(event)">
    <div class="modal" id="modal">
        <button class="modal-close" onclick="closeModal()">✕</button>

        <div class="modal-header">
            <p class="modal-title">Lawrence R. Alcantara</p>
            <p class="modal-subtitle">Complete Personal Information</p>
        </div>

        <p class="modal-section-title">Personal</p>
        <div class="modal-grid">
            <div class="modal-field">
                <span class="modal-field-label">Full Name</span>
                <span class="modal-field-value">Lawrence R. Alcantara</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Age</span>
                <span class="modal-field-value">21 years old</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Birthdate</span>
                <span class="modal-field-value">November 30, 2005</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Gender</span>
                <span class="modal-field-value">Male</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Civil Status</span>
                <span class="modal-field-value">Single</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Nationality</span>
                <span class="modal-field-value">Filipino</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Religion</span>
                <span class="modal-field-value">Roman Catholic</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Occupation</span>
                <span class="modal-field-value">Student</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Height</span>
                <span class="modal-field-value">5'8"</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Weight</span>
                <span class="modal-field-value">65 kg</span>
            </div>
        </div>

        <div class="modal-divider"></div>

        <p class="modal-section-title">Contact & Location</p>
        <div class="modal-grid">
            <div class="modal-field modal-full">
                <span class="modal-field-label">Full Address</span>
                <span class="modal-field-value">BLK. 120 Lot 13 Sitio Imelda, Upper Bicutan, Taguig City</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Contact Number</span>
                <span class="modal-field-value">09678241854</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Email Address</span>
                <span class="modal-field-value">lorsrodriguez2005@gmail.com</span>
            </div>
        </div>

        <div class="modal-divider"></div>

        <p class="modal-section-title">Family</p>
        <div class="modal-grid">
            <div class="modal-field">
                <span class="modal-field-label">Mother's Name</span>
                <span class="modal-field-value">Rochelle R. Alcantara</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Mother's Occupation</span>
                <span class="modal-field-value">House Wife</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Father's Name</span>
                <span class="modal-field-value">Leandro B. Alcantara</span>
            </div>
            <div class="modal-field">
                <span class="modal-field-label">Father's Occupation</span>
                <span class="modal-field-value">Retired Military</span>
            </div>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('modalOverlay').classList.add('open');
        document.body.style.overflow = 'hidden';
    }
    function closeModal() {
        document.getElementById('modalOverlay').classList.remove('open');
        document.body.style.overflow = '';
    }
    function handleOverlayClick(e) {
        if (e.target === document.getElementById('modalOverlay')) closeModal();
    }
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
</script>
@endsection
