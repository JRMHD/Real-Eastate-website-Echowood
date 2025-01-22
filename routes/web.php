<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route for the about page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route for the Buy page
Route::get('/buy', function () {
    return view('Buy');
})->name('buy');

// Route for the Rent page
Route::get('/rent', function () {
    return view('Rent');
})->name('rent');

// Route for the Services page
Route::get('/services', function () {
    return view('Services');
})->name('services');

// Route for the Contacts page
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

// Route for the 404 error page
Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
