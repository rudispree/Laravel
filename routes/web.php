<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PelangganController::class,'index']);
Route::get('/create', [PelangganController::class,'create']);
Route::post('/store', [PelangganController::class,'store']);
Route::get('/show/{id}', [PelangganController::class,'show']);
Route::post('/update/{id}', [PelangganController::class,'update']);
Route::get('/destroy/{id}', [PelangganController::class,'destroy']);