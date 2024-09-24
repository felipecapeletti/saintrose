<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExposicaoController;

Route::get('/', [RouteController::class,'home']);

Route::get('/contato', [RouteController::class,'contato']);

Route::get( '/edit-perfil', [RouteController::class,'editperfil']);

Route::put('/imagem-update', [AdminController::class, 'imagemupdate']);

Route::put('/perfil-update', [AdminController::class, 'perfilupdate']);

Route::put('/senha-update', [AdminController::class, 'senhaupdate']);




Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {Route::get('/dashboard', function ()
    {return view('dashboard');})->name('dashboard');
});
