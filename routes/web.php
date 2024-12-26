<?php

use App\Livewire\ShowBlog;
use App\Livewire\ShowHome;
use App\Livewire\ShowServiceDetails;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeam;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('servicePage');
Route::get('/service/{id}', ShowServiceDetails::class)->name('serviceDetail');
Route::get('/teams', ShowTeam::class)->name('teams');
Route::get('/blog', ShowBlog::class)->name('blog');