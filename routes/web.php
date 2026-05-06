<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('loading');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/family', function () {
    return view('techstack');
});

Route::get('/journal', function () {
    return view('journal');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function () {
    return redirect('/')->with('success', 'Message sent!');
});

Route::get('/download-cv', function () {
    return response()->download(public_path('cv.pdf'));
});
