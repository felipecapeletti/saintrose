<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExposicaoController;

Route::get('/', [EventController::class,'home']);

Route::get('/contato', [EventController::class,'contato']);



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {Route::get('/dashboard', function ()
    {return view('dashboard');})->name('dashboard');
});
