<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarbonCalculatorController;
use App\Http\Controllers\DonationController;

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


Route::get('/kapan', function () {
    return view('Kapan');
});

Route::get('/ceritafauna', function () {
    return view('ceritafauna');
});
Route::get('/katalog',function (){
    return view('katalog');
});

Route::post('/donate', [DonationController::class, 'store'])->name('donate.store');
Route::get('/donasi',[DonationController::class,'donationView']);

Route::get('/', [CarbonCalculatorController::class, 'index']);
Route::post('/calculate', [CarbonCalculatorController::class, 'calculate']);

