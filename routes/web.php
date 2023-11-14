<?php

use App\Http\Controllers\EleveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Models\Note;



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

Route::get('/', function () {
    return view('master');
});



//route de adama
Route::get('/showNote{id}', [NoteController::class, 'show'])->name('show.note');
Route::patch('/updateNote{id}', [NoteController::class, 'update'])->name('update.note');
Route::delete('/deleteNote{id}', [NoteController::class, 'destroy'])->name('delete.note');
Route::get('/', function () {
    return view('master');
});

//route de moustapha et ciré
Route::get('/eleves/list', [EleveController::class, 'index'])->name('listEleve');
Route::get('/eleves/add', [EleveController::class, 'create'])->name('addEleve');

Route::post('/eleves/store', [EleveController::class, 'store']);
Route::get('/eleves/show', [EleveController::class, 'store'])->name('show');
Route::get('/eleves/edit/{id}', [EleveController::class, 'edit']);

Route::post('/eleves/update', [EleveController::class, 'update']);
Route::delete('/eleves/delete', [EleveController::class, 'destroy']);


//bouh
Route::get('/ajouter_note', [NoteController::class, 'ajout_note']);
Route::post('/ajout/traitement', [NoteController::class, 'ajout_note_traitement']);
Route::get('/notes', [NoteController::class,'index'])->name('index');

