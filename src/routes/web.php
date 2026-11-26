<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');
Route::view('/contact', 'landing.contact')->name('contact');
Route::view('/services', 'landing.services')->name('services');
