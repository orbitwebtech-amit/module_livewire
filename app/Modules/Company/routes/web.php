<?php
use Illuminate\Support\Facades\Route;
use App\modules\Company\Livewire\Company\Crud;
// Route::get('/company')->name('users.')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('index');
// });

Route::get('/company',function () {
    return view('modules::Company.views.components.app');
});

// Route::get('/company',Crud::class);