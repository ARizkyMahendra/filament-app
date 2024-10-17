<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Homepage;
use Illuminate\Support\Facades\Route;

Route::get('/', [Homepage::class, 'index'])->name('home');
Route::get('/order', [Homepage::class, 'order'])->name('order');
Route::get('/about', [Homepage::class, 'about'])->name('about');

