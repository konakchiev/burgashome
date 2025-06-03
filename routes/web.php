<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/naemi', function() {
    return view('rents');
})->name('rents');

Route::get('/prodajbi', function() {
    return view('sales');
})->name('sales');

Route::get('/kontakti', function() {
    return view('contact');
})->name('contact');

Route::get('/za-nas', function() {
    return view('about');
})->name('about');

Route::get('/luksozni-imoti', function() {
    return view('luxury');
})->name('luxury');

Route::get('/single', function() {
    return view('single');
})->name('single');