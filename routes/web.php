<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ceritabunga', function () {
    return view('CeritaBunga');
});
Route::get('/donation', function () {
    return view('donation');
});

