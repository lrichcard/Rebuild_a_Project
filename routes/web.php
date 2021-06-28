<?php
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\HorairesController;
use App\Http\Controllers\ProfsController;
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

// Route::get('/','App\Http\Controllers\PersonnesController@index');
Route::resource('/', PersonnesController::class);
Route::resource('/personne', PersonnesController::class);

// Route::resource('/personne', [PersonnesController::class]);

Route::resource('/', HorairesController::class);
Route::resource('/horaire', HorairesController::class);


Route::resource('/', ProfsController::class);
Route::resource('/prof', ProfsController::class);