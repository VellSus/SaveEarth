<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarbonCalculatorController;

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/ceritapohon', function () {
    return view('ceritapohon');
});

Route::get('/bagaimana', function () {
    return view('bagaimana');
});


Route::get('/kalkulatorkarbon', function () {
    return view('carboncalculator');
});

Route::get('/donasi', function () {
    return view('donation');
});

Route::get('/kapan', function () {
    return view('Kapan');
});

Route::get('/ceritafauna', function () {
    return view('ceritafauna');
});


Route::get('/', [CarbonCalculatorController::class, 'index']);
Route::post('/calculate', [CarbonCalculatorController::class, 'calculate']);

