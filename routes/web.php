<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\UserController;

//Rotas do CRUD

//Listar
Route::get('/filmes', [FilmeController::class, 'index'])->name('filmes.listar');
//Cadastrar
Route::get('/filmes/novo', [FilmeController::class, 'create'])->name('filmes.cadastrar')->middleware('auth');
Route::post('/filmes/novo', [FilmeController::class, 'store'])->name('filmes.salvar');
//Editar
Route::get('/filmes/edita/{id}', [FilmeController::class, 'edit'])->name('filmes.editar')->middleware('auth');
Route::put('/filmes/edita/{id}', [FilmeController::class, 'update'])->name('filmes.atualizar');
//Visualizar
Route::get('/filmes/ver/{id}', [FilmeController::class, 'show'])->name('filmes.visualizar');
//Remover
Route::get('/filmes/delete/{id}', [FilmeController::class, 'destroy'])->name('filmes.remover')->middleware('auth');

// Login e Cadastro
Route::get('/login', [UserController::class, 'index'])->name('user.index');
Route::post('/login', [UserController::class, 'login'])->name('user.auth');
Route::get('/logout', [UserController::class, 'destroy'])->name('user.logout');

Route::get('/cadastrar', [UserController::class, 'create'])->name('user.cadastrar')->middleware('auth');
Route::post('/cadastrar', [UserController::class, 'store']);