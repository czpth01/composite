<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HibajegyController;
use App\Http\Controllers\BejelentkezesController;

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
    return view('hibajegyek');
});

Route::get('/bejelentkezes', function () {
    return view('bejelentkezes');
});

/*Route::get('/hibajegy_lista', function () {
    return view('hibajegy_lista');
});*/

Route::controller(HibajegyController::class)->group(function () {
    Route::get('hibajegy_lista', 'hibajegy_lista');
});

Route::controller(HibajegyController::class)->group(function () {
    Route::get('ugyfel_lista', 'ugyfel_lista');
});

Route::controller(HibajegyController::class)->group(function () {
    Route::post('/uj_hibajegy', 'letrehoz');
});

Route::controller(BejelentkezesController::class)->group(function () {
    Route::post('/login', 'bejelentkezes');
    Route::get('/logout', 'kijelentkezes');
});