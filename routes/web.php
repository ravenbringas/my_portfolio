<?php

use App\Http\Controllers\SendContactMessageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::post('/contact', SendContactMessageController::class)->middleware('throttle:10,1')->name('contact.send');
