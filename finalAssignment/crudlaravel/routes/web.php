<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [MahasiswaController::class,'index']);
Route::get('/tambah', [MahasiswaController::class,'tambah']);
Route::post('/simpan', [MahasiswaController::class,'simpan']);
Route::get('/{id}/ubah', [MahasiswaController::class,'ubah']);
Route::put('/{id}', [MahasiswaController::class,'perbarui']);
Route::delete('/{id}', [MahasiswaController::class,'hapus']);