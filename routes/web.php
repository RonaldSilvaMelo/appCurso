<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/',[CategoriaController::class,'index'])->name('index');

Route::get('/cadastrocategoria',[CategoriaController::class,'mostrarFormCat'])->name("cadcategoria");