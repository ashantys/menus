<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');

Route::get('/about', function () {
    return view('pages.about');
})->name('pages.about');
