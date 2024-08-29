<?php

use App\Livewire\ShowHome;
use App\Livewire\ShowServicePage;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('service');