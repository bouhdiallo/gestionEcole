<?php

use App\Http\Controllers\ClasseController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ClasseController::class,'index'])->name('classe');
Route::patch('/updateClasse{id}',[ClasseController::class,'update'])->name('classe.update');
Route::get('/showClasse{id}',[ClasseController::class,'show'])->name('classe.show');