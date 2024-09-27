<?php

use App\Http\Controllers\Applicant\ApplicationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',  [ApplicationController::class, 'index'])->name('dashboard');
    Route::get('/preview',  [ApplicationController::class, 'preview'])->name('preview');
    Route::get('/applicant',  [ApplicationController::class, 'applicant'])->name('applicant');
    Route::get('/application', [ApplicationController::class,'apply'])->name('apply');
    Route::post('/bio-data', [ApplicationController::class,'bioData'])->name('bio.data');
    Route::post('/add-education', [ApplicationController::class,'addEducation'])->name('add.eduaction');
    Route::post('/add-program', [ApplicationController::class,'addProgram'])->name('add.program');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
