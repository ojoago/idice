<?php

use App\Http\Controllers\Applicant\ApplicationController;
use App\Http\Controllers\DropDownController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });



// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('guest')->group(function () {
    Route::inertia('/', 'Welcome');
    Route::inertia('/about', 'About')->name('about');
    Route::inertia('/program', 'Program')->name('program');
    Route::inertia('/agencies', 'Agency')->name('agency');
    Route::inertia('/partners', 'Partners')->name('partners');
    Route::inertia('/faqs', 'FAQ')->name('faq');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',  [ApplicationController::class, 'index'])->name('dashboard');
    Route::get('/preview',  [ApplicationController::class, 'preview'])->name('preview');
    Route::get('/update/{sts}',  [ApplicationController::class, 'updateApplication'])->name('update.app');
    Route::get('/applicant',  [ApplicationController::class, 'applicant'])->name('applicant');
    Route::get('/application', [ApplicationController::class,'apply'])->name('apply');
    Route::post('/bio-data', [ApplicationController::class,'bioData'])->name('bio.data');
    Route::post('/add-education', [ApplicationController::class,'addEducation'])->name('add.eduaction');
    Route::post('/add-program', [ApplicationController::class,'addProgram'])->name('add.program');
    
});

Route::get('/load-states', [DropDownController::class, 'loadStates'])->name('load.states');
Route::get('/load-state-lga/{id}', [DropDownController::class, 'loadStateLga'])->name('load.state.lga');


require __DIR__.'/auth.php';
