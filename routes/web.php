<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

//Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//Route::post('/users', [UserController::class, 'store'])->name('users.store');

//documentation
Route::get('/', function() {
    return view('documetation');
});