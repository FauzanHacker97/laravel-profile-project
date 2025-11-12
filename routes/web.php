<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about/member1', function () {
    return view('about.member1');
})->name('about.member1');

Route::get('/about/member2', function () {
    return view('about.member2');
})->name('about.member2');

Route::get('/about/member3', function () {
    return view('about.member3');
})->name('about.member3');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');