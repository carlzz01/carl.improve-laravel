<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\PortfolioController;


// Default Laravel route
Route::get('/', function () {
    return view('welcome');
});

// Portfolio routes 
Route::prefix('portfolio')->name('portfolio.')->group(function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('home');
    Route::get('/about', [PortfolioController::class, 'about'])->name('about');
    Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
    Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
});

// Resume download/view
Route::get('/resume', function () {
    $path = public_path('delacruz.pdf');
    return Response::file($path);
})->name('resume');

