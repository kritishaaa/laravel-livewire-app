<?php

use App\Livewire\ShowHome;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowHome::class)->name('home');