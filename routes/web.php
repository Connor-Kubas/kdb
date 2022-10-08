<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AddMovieController;
use App\Http\Controllers\RatingController;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/view', [SearchController::class, 'index']);
    
Route::get('/add', [AddMovieController::class, 'index']);

Route::post('/add/create', [AddMovieController::class, 'create']);

Route::post('/rating', [RatingController::class, 'store']);