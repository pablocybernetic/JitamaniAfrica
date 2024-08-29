<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/contacts', [EmailController::class, 'showForm'])->name('contact.form');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
Route::get('/', function () {
    return view('index'); // This will render resources/views/index.blade.php
});

Route::get('/about', function () {
    return view('about'); // This will render resources/views/about.blade.php
});
Route::get('/services', function () {
    return view('services'); // This will render resources/views/services.blade.php
});Route::get('/contact', function () {
    return view('contact'); // This will render resources/views/contact.blade.php
});Route::get('/blog', function () {
    return view('blog'); // This will render resources/views/blog.blade.php
});