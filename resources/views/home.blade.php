@extends('layout')

@section('title', 'Home')

@section('content')
<style>
  .hero-landing {
    position: relative;
    min-height: calc(100vh - 72px);
    display: flex;
    align-items: center;
    padding-left: 9vw;
    overflow: hidden;
  }

  .hero-content-landing {
    max-width: 480px;
    animation: fadeUp .9s ease both;
  }

  .badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(30, 60, 114, 0.15);
    border: 1px solid rgba(42, 82, 152, 0.3);
    border-radius: 999px;
    padding: 6px 16px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.7);
    margin-bottom: 28px;
  }
  .badge::before {
    content: '';
    width: 6px; height: 6px;
    border-radius: 50%;
    background: #2a5298;
    box-shadow: 0 0 6px #2a5298;
  }

  .hero-name-landing {
    font-family: 'Poppins', sans-serif;
    font-size: clamp(62px, 7vw, 96px);
    line-height: .95;
    letter-spacing: 1px;
    font-weight: 800;
  }
  .hero-name-landing .first { color: #fff; display: block; }
  .hero-name-landing .last  { color: #2a5298; display: block; }

  .hero-sub-landing {
    margin-top: 18px;
    font-size: 14px;
    font-weight: 400;
    color: rgba(255,255,255,0.7);
    letter-spacing: .5px;
  }

  .hero-actions-landing {
    margin-top: 36px;
    display: flex;
    align-items: center;
    gap: 28px;
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
    border-color: #2a5298; 
    background: rgba(42, 82, 152, .2); 
  }

  .hero-photo-landing {
    position: absolute;
    right: 0;
    bottom: 0;
    height: 85vh;
    width: auto;
    object-fit: contain;
    object-position: bottom right;
    pointer-events: none;
    user-select: none;
    animation: fadeIn 1.1s ease both;
  }

  .float-ball {
    position: absolute;
    top: 38%;
    left: 42%;
    width: 110px;
    height: 110px;
    border-radius: 50%;
    background: radial-gradient(circle at 35% 35%, #4a7bb7, #2a5298 60%, #1e3c72);
    box-shadow: 0 20px 60px rgba(0,0,0,.5), inset 0 -8px 20px rgba(0,0,0,.4);
    animation: float 4s ease-in-out infinite;
    pointer-events: none;
  }
  .float-ball::after {
    content: '';
    position: absolute;
    top: 14%; left: 20%;
    width: 35%; height: 28%;
    border-radius: 50%;
    background: rgba(255,255,255,.25);
    filter: blur(4px);
  }

  .scroll-hint {
    position: absolute;
    bottom: 32px;
    right: 48px;
    writing-mode: vertical-rl;
    font-size: 10px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.6);
    opacity: .6;
  }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(40px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  @keyframes fadeIn {
    from { opacity: 0; } to { opacity: 1; }
  }
  @keyframes float {
    0%,100% { transform: translateY(0) rotate(-4deg); }
    50%      { transform: translateY(-18px) rotate(4deg); }
  }
</style>

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

  <div class="float-ball"></div>

  <img
    class="hero-photo-landing"
    src="https://via.placeholder.com/400x600/c1e3c72/ffffff?text=Your+Photo"
    alt="Lawrence Alcantara"
  />

  <span class="scroll-hint">Scroll Down</span>
</section>
@endsection
