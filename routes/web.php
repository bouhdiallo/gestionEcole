<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/notes', [NoteController::class,'index']);
Route::get('/ajouter_note', [NoteController::class, 'ajout_note']);
Route::post('/ajout/traitement', [NoteController::class, 'ajout_note_traitement']);




