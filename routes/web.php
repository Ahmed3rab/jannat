<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomepageController::class)->name('homepage');
Route::get('/contact-us', ContactController::class)->name('contact');
