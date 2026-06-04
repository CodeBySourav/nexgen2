<?php

use App\Http\Controllers\ProfileController;  
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Contact_RequestsController;
use App\Http\Controllers\ContactRequest2Controller;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/service', function () {
    return view('service');
})->name('service');



Route::post('/contact-submit', [Contact_RequestsController::class, 'store'])->name('contact.submit');
use App\Http\Controllers\ContactRequestController;

Route::post('/contact-submit2', [ContactRequest2Controller::class, 'store'])
    ->name('contact.submit2');

Route::get('/blog', [PostController::class, 'blog'])->name('blog.index');
Route::get('/blog/{slug}', [PostController::class, 'showBlog'])->name('blog.show');
 


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('pages', PageController::class);
    Route::resource('posts', PostController::class);
    
});

require __DIR__.'/auth.php';

Route::get('{slug}', [PageController::class, 'show'])->name('pages.show');
 
