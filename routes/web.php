<?php

use App\Http\Controllers\BierController;
use App\Models\Bier;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/index');
Route::get("/index", [BierController::class, 'index']);

Route::get('/create', [BierController::class, 'create']); // route to view
Route::post('/create', [BierController::class, 'store']); // store to db
Route::get('/show/{bier}', [BierController::class, 'show']); // return specific item
Route::get('/edit/{bier}', [BierController::class, 'edit']);
Route::put('/edit/{bier}', [BierController::class, 'update']);
Route::delete('/show/{bier}', [BierController::class, 'destroy']);