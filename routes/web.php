<?php

use App\Http\Livewire\Blog;
use App\Http\Livewire\Home;
use App\Http\Livewire\Uses;
use App\Http\Livewire\About;
use App\Http\Livewire\SinglePost;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/blog', Blog::class);
Route::get('/blog/{slug}', SinglePost::class);
Route::get('/uses', Uses::class);
