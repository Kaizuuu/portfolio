@extends('layout')

@section('title', 'Journal')

@section('content')
<style>
    #journal {
        min-height: 100vh;
        padding: 100px 9vw 60px;
    }

    .journal-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .journal-label {
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

    .journal-title {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(36px, 5vw, 60px);
        color: #fff;
        margin: 0;
        letter-spacing: 1px;
        font-weight: 800;
        text-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .journal-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 40px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 15px;
    }

    .journal-content h2 {
        font-size: 28px;
        color: #fff;
        margin: 0 0 24px 0;
        font-weight: 700;
        text-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }

    .journal-content p {
        font-size: 15px;
        color: rgba(255,255,255,0.9);
        line-height: 1.8;
        margin-bottom: 20px;
        text-shadow: 0 2px 6px rgba(0,0,0,0.5);
        text-align: justify;
    }
</style>

<section id="journal">
    <div class="journal-header">
        <span class="journal-label">Journal</span>
        <h2 class="journal-title">My Thoughts</h2>
    </div>

    <div class="journal-content">
        <h2>Missing My SHS Friends</h2>
        <p>
            I miss my SHS friends so much. Kahit two years lang yung pinagsamahan namin, it felt so real—solid talaga. 
            I miss the kulitan, the tawanan, and those silly kwentuhan after class or even habang ongoing yung lesson.
        </p>
        <p>
            'Pag recess, sabay-sabay pa tayong kakain, maghihintayan pa talaga. Sometimes, I just wish I could go back 
            in time and relive those moments. Nakakatawa kasi, back in Grade 12, halos lahat tayo gusto na lang 
            maka-graduate at makaalis. Pero ngayon, all we want is to go back—to feel that bond again, to experience 
            the simplicity and joy of those days.
        </p>
        <p>
            Pero alam mo kung sino talaga 'yung pinaka nami-miss ko? Yung favorite seatmate ko—na girlfriend ko na ngayon. 
            I miss those days na magkatabi kami, helping each other lalo na 'pag sabog na sa acads. Ramdam ko talaga na 
            andiyan siya para sa'kin.
        </p>
        <p>
            I'm not saying she's not here for me now—she is. Pero iba pa rin talaga 'yung presence. Yung physical na 
            nandiyan siya, na after a long day, uuwi ka na mayakap mo siya. 'Yung simpleng yakap na parang lahat ng 
            pagod nawawala.
        </p>
        <p>
            Ugh, I really wish I could go back in time, just for a day—to feel that again.
        </p>
    </div>
</section>
@endsection
