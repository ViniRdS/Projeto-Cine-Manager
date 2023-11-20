<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\UserController;

//Rotas do CRUD

//Listar
Route::get('/filmes', [FilmeController::class, 'index'])->name('filmes.listar');
//Cadastrar
Route::get('/filmes/novo', [FilmeController::class, 'create'])->name('filmes.cadastrar');
Route::post('/filmes/novo', [FilmeController::class, 'store'])->name('filmes.salvar');
//Editar
Route::get('/filmes/edita/{id}', [FilmeController::class, 'edit'])->name('filmes.editar');
Route::put('/filmes/edita/{id}', [FilmeController::class, 'update'])->name('filmes.atualizar');
//Visualizar
Route::get('/filmes/ver/{id}', [FilmeController::class, 'show'])->name('filmes.visualizar');
//Remover
Route::get('/filmes/delete/{id}', [FilmeController::class, 'destroy'])->name('filmes.remover');
// login
Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [UserController::class, 'login']);

Route::get('/cadastrar', [UserController::class, 'create'])->name('user.cadastrar');
Route::post('/cadastrar', [UserController::class, 'store']);