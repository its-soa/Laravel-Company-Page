<?php

use App\Livewire\ShowHome;
use App\Livewire\ShowServiceDetails;
use App\Livewire\ShowServicePage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('servicePage');
Route::get('/service/{id}', ShowServiceDetails::class)->name('serviceDetail');