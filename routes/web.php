<?php

use App\Http\Controllers\FirmaController;
use App\Http\Controllers\PracownikController;
use Illuminate\Support\Facades\Route;

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

Route::get('/firma', [FirmaController::class, 'create']);
Route::post('/firma/store', [FirmaController::class, 'store']);

Route::get('/pracownik', [PracownikController::class, 'create']);
Route::post('/pracownik/store', [PracownikController::class, 'store']);
