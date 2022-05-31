<?php

use App\Http\Controllers\BierController;
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
Route::get("/", [BierController::class, 'index']);

Route::get('/create', [BierController::class, 'create']); // route to view
Route::post('/create', [BierController::class, 'store']); // store to db
