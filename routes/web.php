<?php

use App\Livewire\User;
use Illuminate\Support\Facades\Route;
require base_path('app/Modules/Company/Routes/web.php');

Route::get('/', function () {
    return view('welcome');
});
