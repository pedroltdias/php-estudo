<?php

use App\Http\Controllers\SeriesController;
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

Route::get('/', function () {
    return redirect('/series');
});

Route::controller(SeriesController::class)-> group(function() {
    Route::get('/series', 'index');
    Route::get('/series/criar', 'create');
    Route::post('/series/salvar',  'store');
});
