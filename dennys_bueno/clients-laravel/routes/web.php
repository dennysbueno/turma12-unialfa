<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProdutosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/clients', [ClientsController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientsController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}', [ClientsController::class, 'show'])->name('clients.show');
Route::get('/clients/{id}/edit', [ClientsController::class, 'edit'])->name('clients.edit');

Route::post('/clients', [ClientsController::class, 'store'])->name('clients.store');
Route::put('/clients/{id}', [ClientsController::class, 'update'])->name('clients.update');
Route::delete('/clients/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy'); */

Route::get('/', [ClientsController::class, 'index'])->name('clients.index');

Route::resource('clients', ClientsController::class);


/* Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');
Route::get('/produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.show');
Route::get('/produtos/{id}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');

Route::post('/produtos', [ProdutosController::class, 'store'])->name('produtos.store');
Route::put('/produtos/{id}', [ProdutosController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/{id}', [ProdutosController::class, 'destroy'])->name('produtos.destroy'); */

Route::resource('produtos', ProdutosController::class);
