<?php

use App\Livewire\ShowBlog;
use App\Livewire\ShowContactPage;
use App\Livewire\ShowFaq;
use App\Livewire\ShowHome;
use App\Livewire\ShowPage;
use App\Livewire\ShowServiceDetails;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowSinglePost;
use App\Livewire\ShowTeam;
use App\Models\Faq;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('servicePage');
Route::get('/service/{id}', ShowServiceDetails::class)->name('serviceDetail');
Route::get('/teams', ShowTeam::class)->name('teams');
Route::get('/blog', ShowBlog::class)->name('blog');
Route::get('/post/{id}', ShowSinglePost::class)->name('post');
Route::get('/faqs', ShowFaq::class)->name('faqs');
Route::get('/page/{id}', ShowPage::class)->name('page');
Route::get('/contact', ShowContactPage::class)->name('contact');