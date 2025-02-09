<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Store\StoreHome;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/shop', StoreHome::class)
    ->name('shop');

require __DIR__.'/auth.php';