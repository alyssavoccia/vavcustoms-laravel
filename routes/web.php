<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Store\StoreHome;

Route::view('/', 'welcome')
    ->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/store', StoreHome::class)
    ->name('store');

require __DIR__.'/auth.php';
