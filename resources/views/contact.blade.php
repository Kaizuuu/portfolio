@extends('layout')

@section('title', 'Contact')

@section('content')
<style>
    #contact {
        min-height: 100vh;
        padding: 100px 48px 60px;
        max-width: 100vw;
        overflow-x: hidden;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .contact-label {
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

    .contact-title {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(36px, 5vw, 60px);
        color: #fff;
        margin: 0;
        letter-spacing: 1px;
        font-weight: 800;
        text-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .contact-wrapper {
        max-width: 1000px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    .contact-info-section h3 {
        font-size: 24px;
        color: #fff;
        margin: 0 0 30px 0;
        font-weight: 700;
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .contact-info-item {
        margin-bottom: 24px;
        padding: 20px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 12px;
        transition: all 0.3s;
    }

    .contact-info-item:hover {
        background: rgba(255,255,255,0.1);
        transform: translateX(5px);
    }

    .contact-info-item strong {
        display: block;
        font-size: 14px;
        color: rgba(255,255,255,0.8);
        margin-bottom: 8px;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }

    .contact-info-item a,
    .contact-info-item span {
        font-size: 15px;
        color: #fff;
        text-decoration: none;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }

    .contact-info-item a:hover {
        text-decoration: underline;
    }

    .contact-form-section h3 {
        font-size: 24px;
        color: #fff;
        margin: 0 0 30px 0;
        font-weight: 700;
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .contact-form-section label {
        display: block;
        font-size: 13px;
        font-weight: 600;
        color: rgba(255,255,255,0.9);
        margin-bottom: 8px;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    }

    .contact-form-section input,
    .contact-form-section textarea {
        width: 100%;
        padding: 12px 16px;
        margin-bottom: 20px;
        background: rgba(255,255,255,0.1);
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 8px;
        color: #fff;
        font-size: 14px;
        font-family: 'Montserrat', sans-serif;
        transition: all 0.3s;
    }

    .contact-form-section input::placeholder,
    .contact-form-section textarea::placeholder {
        color: rgba(255,255,255,0.5);
    }

    .contact-form-section input:focus,
    .contact-form-section textarea:focus {
        outline: none;
        background: rgba(255,255,255,0.15);
        border-color: rgba(255,255,255,0.4);
    }

    .contact-form-section button {
        padding: 14px 32px;
        border-radius: 8px;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        border: none;
        cursor: pointer;
        transition: all 0.3s;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    .contact-form-section button:hover {
        background: linear-gradient(135deg, #2a5298 0%, #4a7bb7 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.4);
    }

    @media (max-width: 768px) {
        .contact-wrapper {
            grid-template-columns: 1fr;
        }
    }
</style>

<section id="contact">
    <div class="contact-header">
        <span class="contact-label">Contact</span>
        <h2 class="contact-title">Get In Touch</h2>
    </div>

    <div class="contact-wrapper">
        <div class="contact-info-section">
            <h3>Contact Information</h3>
            <div class="contact-info-item">
                <strong>📧 Email</strong>
                <a href="mailto:lorsrodriguez2005@gmail.com">lorsrodriguez2005@gmail.com</a>
            </div>
            <div class="contact-info-item">
                <strong>📱 Contact Number</strong>
                <a href="tel:09678241854">09678241854</a>
            </div>
            <div class="contact-info-item">
                <strong>📍 Address</strong>
                <span>BLK. 120 Lot 13 Sitio Imelda, Upper Bicutan, Taguig City</span>
            </div>
        </div>

        <div class="contact-form-section">
            <h3>Send a Message</h3>
            <form method="POST" action="/contact">
                @csrf
                <label>Name</label>
                <input type="text" name="name" placeholder="Your name" required>
                
                <label>Email</label>
                <input type="email" name="email" placeholder="Your email" required>
                
                <label>Message</label>
                <textarea name="message" rows="5" placeholder="Your message" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</section>
@endsection
