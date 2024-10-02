<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExposicaoController;
use App\Http\Controllers\ProjetosController;

Route::get('/', [RouteController::class,'home']);
Route::get('/contato', [RouteController::class,'contato']);

//PERFIL

    //MEU PERFIL
    Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
        Route::get('/dashboard', function (){return view('dashboard');})->name('dashboard');});

        //PERFIL EDIT
        Route::get( '/edit-perfil', [RouteController::class,'editperfil']);
        Route::put('/imagem-update', [AdminController::class, 'imagemupdate']);
        Route::put('/perfil-update', [AdminController::class, 'perfilupdate']);
        Route::put('/senha-update', [AdminController::class, 'senhaupdate']);
        Route::put('/social-update', [AdminController::class, 'socialupdate']);

        //MEUS PROJETOS
        Route::get( '/meus-projetos', [RouteController::class,'meusprojetos']);
        Route::get( '/novo-projeto', [RouteController::class,'novoprojeto']);
            //criar projeto
            Route::post( '/criar-projeto', [ProjetosController::class,'criarprojeto']);            

    // PERFIL DE 3°
    Route::get('/perfil/{id}', [RouteController::class,'perfilacess']);





