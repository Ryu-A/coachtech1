<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TodoController::class,'index']);
Route::get('/add', [TodoController::class, 'add']);
Route::post('/add', [TodoController::class, 'create']);
Route::get('/edit/{id}', [TodoController::class, 'edit']);
Route::post('/edit/{id}', [TodoController::class, 'update']);
Route::get('/delete/{id}', [TodoController::class, 'delete']);
Route::post('/delete/{id}', [TodoController::class, 'remove']);
