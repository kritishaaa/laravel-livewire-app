<?php

use App\Livewire\ShowBlog;
use App\Livewire\ShowBlogPage;
use App\Livewire\ShowContactPage;
use App\Livewire\ShowFaqPage;
use App\Livewire\ShowHome;
use App\Livewire\ShowPage;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;
use Illuminate\Support\Facades\Route;

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('service');
Route::get('/service/{id}', ShowService::class)->name('showService');

Route::get('/teams', ShowTeamPage::class)->name('team');

Route::get('/blogs', ShowBlogPage::class)->name('blog');
Route::get('/blog/{id}', ShowBlog::class)->name('showBlog');

Route::get('/faqs', ShowFaqPage::class)->name('faq');
Route::get('/page/{id}', ShowPage::class)->name('page');

Route::get('/contact', ShowContactPage::class)->name('contact');