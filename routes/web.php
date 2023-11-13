<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\LoginController;

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

//Rotas do Login e Cadastro
Route::get('/logar', [LoginController::class, 'index'])->name('adm.logar');

Route::get('/cadastrar', [LoginController::class, 'create'])->name('adm.cadastrar');
Route::post('/cadastrar', [LoginController::class, 'store'])->name('adm.salvar');