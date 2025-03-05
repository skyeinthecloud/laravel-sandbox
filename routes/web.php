<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HelloWorldController;


Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');


Route::get('/hello', [HelloWorldController::class, 'showHello']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
