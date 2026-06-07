<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.landing');
})->name('home');

Route::get('/hello', function () {
    return 'Hello Laravel';
});

Route::get('/about', function () {
    $i = "This is about page";
    $j = 1;
    return view('about', compact('i', 'j'));
})->name('about');

Route::get('/student/{id}', function ($id) {
    return "Student ID: " . $id;
});

Route::get('/profile/{name?}', function ($name = 'Guest') {
    return "Profile Name: " . $name;
});

Route::get('/contact', function () {
    return "Contact Page";
})->name('contact');

Route::get('/test', function () {
    return route('contact');
});
