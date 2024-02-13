<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ActorController;

Route::get('/media', [MediaController::class, 'index']);
Route::get('/media/{medias}', [MediaController::class, 'show']);

Route::get('/actors', [ActorController::class, 'index']);
Route::get('/actors/{actor}', [ActorController::class, 'show']);


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
    return view('welcome');
});
