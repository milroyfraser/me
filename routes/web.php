<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowRecommendationController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)
    ->name('home');

Route::get('/recommended-by/{slug}', ShowRecommendationController::class)
    ->name('recommendation.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
