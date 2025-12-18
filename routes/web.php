<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\LandingPage;
use App\Livewire\Hubungi;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', LandingPage::class);
Route::get('/home', LandingPage::class)->name('home.index');
Route::get('/hubungi', Hubungi::class)->name('hubungi');
