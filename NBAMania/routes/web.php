<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamSeasonStatController;
use App\Http\Controllers\PlayerSeasonStatController;
use App\Models\TeamSeasonStat;

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
    return view('welcome');
});
Route::get('index',[Controller::class, 'index']);
Route::resource('teams',TeamController::class);
Route::resource('players',PlayerController::class);
Route::resource('teamstats',TeamSeasonStatController::class);
Route::resource('playerstats',PlayerSeasonStatController::class);