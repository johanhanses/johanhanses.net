<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\About;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Home;
use App\Http\Livewire\Uses;

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/blog', Blog::class);
Route::get('/uses', Uses::class);
