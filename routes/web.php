<?php

use App\Http\Controllers\EleveController;
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

// Route::get('/', function () {
//     return view('master');
// });




Route::get('/eleves/list', [EleveController::class, 'index'])->name('listEleve');
Route::get('/eleves/add', [EleveController::class, 'create'])->name('addEleve');
Route::post('/eleves/store', [EleveController::class, 'store']);
Route::get('/eleves/show', [EleveController::class, 'store'])->name('show');
Route::get('/eleves/edit/{id}', [EleveController::class, 'edit']);
Route::post('/eleves/update', [EleveController::class, 'update']);
Route::delete('/eleves/delete', [EleveController::class, 'destroy']);

// Route::prefix('/note')->name('note.')->controller(EleveController::class)->group(function ()  {
//     Route::get('/list','indexs')->name('lis');
//     Route::get('add',  'create')->name('add');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/edit/{id}', 'edit');
//     Route::post('/update',  'update');
//     Route::delete('/delete','destroy');

// }) ->where([
//     'id' => [0-9],
// ]);











