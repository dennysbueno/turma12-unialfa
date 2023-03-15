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

Route::get('/', [ClientsController::class, 'index'])->name('clients.index');

Route::get('/clients', [ClientsController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientsController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}', [ClientsController::class, 'show'])->name('clients.show');
Route::post('/clients', [ClientsController::class, 'store'])->name('clients.store');


Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.show');
