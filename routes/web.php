<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarbonCalculatorController;
use App\Http\Controllers\DonationController;

use App\Http\Controllers\PageController;

Route::get('/bagaimana', [PageController::class, 'bagaimana']);
Route::get('/beranda', [PageController::class, 'beranda']);
Route::get('/ceritafauna', [PageController::class, 'ceritaFauna']);
Route::get('/ceritapohon', [PageController::class, 'ceritaPohon']);
Route::get('/kapan', [PageController::class, 'kapan']);
Route::get('/katalog', [PageController::class, 'katalog']);

Route::post('/donasi', [DonationController::class, 'store'])->name('donation.store');
Route::get('/donasi',[DonationController::class,'donationView']);

Route::get('/', [PageController::class, 'beranda']);
Route::get('/kalkulatorkarbon', [CarbonCalculatorController::class, 'index']);
Route::post('/kalkulatorkarbon', [CarbonCalculatorController::class, 'calculate']);

