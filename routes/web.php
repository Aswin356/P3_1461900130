<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rakbukuController;

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

Route::get('/', [rakbukuController::class, 'index']);
Route::post('/', [rakbukuController::class, 'store']);
Route::get('/create', [rakbukuController::class, 'create']);
Route::get('/edit/{id}', [rakbukuController::class, 'edit']);
Route::post('/edit/{id}', [rakbukuController::class, 'update']);
Route::get('/delete/{id}', [rakbukuController::class, 'destroy']);

