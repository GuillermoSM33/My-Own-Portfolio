<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/more', function(){
    return view('more');
})->name('more');

Route::get('/video', function(){
    return view('video');
})->name('video');
