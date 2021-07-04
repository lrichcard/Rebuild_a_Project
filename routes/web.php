<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\JoursController;
use App\Http\Controllers\ProfsController;
use App\Http\Controllers\HeuresController;
use App\Http\Controllers\SallesController;
use App\Http\Controllers\HorairesController;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\InscriptionsController;

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


// Route::resource('/', PersonnesController::class);
// Route::resource('/personne', PersonnesController::class);

// // Route::resource('/personne', [PersonnesController::class]);

// Route::resource('/', HorairesController::class);
// Route::resource('/horaire', HorairesController::class);


// Route::resource('/', ProfsController::class);
// Route::resource('/prof', ProfsController::class);


Route::resource('jours', JoursController::class);
Route::resource('salles',SallesController::class);
Route::resource('heures',HeuresController::class);
Route::resource('cours',CoursController::class);
Route::resource('horaires',HorairesController::class);
Route::resource('inscriptions',InscriptionsController::class);
Route::resource('/jours', JoursController::class);

