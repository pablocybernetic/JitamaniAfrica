<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\BlogController;

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
});

// Route::get('/blog', function () {
//     return view('blog'); // This will render resources/views/blog.blade.php
// });

Route::middleware('auth')->group(function () {
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{slug}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{slug}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{slug}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');
