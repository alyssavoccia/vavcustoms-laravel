<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Store\StoreHome;
use App\Livewire\Store\ProductDetail;

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

Route::get('/store/{variantId}/{productHandle}', ProductDetail::class)
    ->name('product-detail');

Route::get('/test-livewire', ProductDetail::class);


require __DIR__.'/auth.php';
