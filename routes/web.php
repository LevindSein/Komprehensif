<?php

use App\Http\Controllers\No1Controller;
use App\Http\Controllers\No2Controller;
use App\Http\Controllers\No3Controller;
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
    return view('welcome');
});

Route::prefix('jawaban')->group(function (){
    Route::get('no-1', [No1Controller::class, 'index']);
    Route::post('no-1', [No1Controller::class, 'store']);
    Route::get('no-1/search', [No1Controller::class, 'search']);

    Route::get('no-2', [No2Controller::class, 'index']);
    Route::get('no-3', [No3Controller::class, 'index']);
});
