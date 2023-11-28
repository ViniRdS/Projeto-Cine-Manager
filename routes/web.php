<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {

//Cadastrar
Route::get('/filmes/novo', [FilmeController::class, 'create'])->name('filmes.cadastrar');
//Editar
Route::get('/filmes/edita/{id}', [FilmeController::class, 'edit'])->name('filmes.editar');
//Remover
Route::get('/filmes/delete/{id}', [FilmeController::class, 'destroy'])->name('filmes.remover');
//Cadastro
Route::get('/cadastrar', [UserController::class, 'create'])->name('user.cadastrar');

});
//Listar
Route::get('/filmes', [FilmeController::class, 'index'])->name('filmes.listar');
//Cadastrar
Route::post('/filmes/novo', [FilmeController::class, 'store'])->name('filmes.salvar');
//Editar
Route::put('/filmes/edita/{id}', [FilmeController::class, 'update'])->name('filmes.atualizar');
//Visualizar
Route::get('/filmes/ver/{id}', [FilmeController::class, 'show'])->name('filmes.visualizar');

// Login e Cadastro
Route::get('/login', [UserController::class, 'index'])->name('user.index')->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->name('user.auth');
Route::get('/logout', [UserController::class, 'destroy'])->name('user.logout');
Route::post('/cadastrar', [UserController::class, 'store']);