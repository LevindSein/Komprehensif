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
    Route::get('no-2/ingkaran/{val}', [No2Controller::class, 'ingkaran']);
    Route::get('no-2/konjungsi/{a}/{b}', [No2Controller::class, 'konjungsi']);
    Route::get('no-2/disjungsi/{a}/{b}', [No2Controller::class, 'disjungsi']);
    Route::get('no-2/implikasi/{a}/{b}', [No2Controller::class, 'implikasi']);
    Route::get('no-2/biimplikasi/{a}/{b}', [No2Controller::class, 'biimplikasi']);
    Route::get('no-2/keanggotaan/{val}', [No2Controller::class, 'keanggotaan']);
    Route::get('no-2/prima/{val}', [No2Controller::class, 'prima']);
    Route::get('no-2/relasi/{val}', [No2Controller::class, 'relasi']);
    Route::get('no-2/fungsi/{val}', [No2Controller::class, 'fungsi']);
    Route::get('no-2/induksi/{val}', [No2Controller::class, 'induksi']);
    Route::get('no-2/pohon', [No2Controller::class, 'pohon']);

    Route::get('no-3', [No3Controller::class, 'index']);
});
