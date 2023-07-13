<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HibajegyController;
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

Route::controller(HibajegyController::class)->group(function () {
    Route::post('/uj_hibajegy', 'letrehoz');
});