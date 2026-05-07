<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');

Route::get('/menu', [MenuController::class, 'menu'])->name('menu');

Route::get('/shop', [ShopController::class, 'shop'])->name('shop');

Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

