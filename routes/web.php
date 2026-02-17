<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomepageController::class)->name('homepage');
Route::get('/contact-us', ContactController::class)->name('contact');
Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
