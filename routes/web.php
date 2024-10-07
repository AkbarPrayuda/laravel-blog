<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home Page',
    ]);
})->name('homePage');

Route::resource('blog', App\Http\Controllers\PostController::class);

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Page',
    ]);
})->name('aboutPage');

Route::get('/contact', function () {
    return view('contact' , [
        'title' => 'Contact Page',
    ]);
})->name('contactPage');



