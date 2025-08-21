<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\BlogController;
use Modules\Blog\Livewire\Posts\Crud;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('blogs', BlogController::class)->names('blog');
});

Route::get('/post', function () {
    return view('blog::components.layouts.master');
});