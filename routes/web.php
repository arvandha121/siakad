<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\HTTP\Request;


Route::resource('mahasiswa', MahasiswaController::class);

// Route::get('mahasiswa/nilai/{mahasiswa}', [MahasiswaController::class, 'Mahasiswa_MataKuliah'])->name('mahasiswa.nilai');
Route::get('nilai/{nim}',[MahasiswaController::class,'nilai'])->name('nilai'); 
Route::get('nilai/{nim}/cetak', [MahasiswaController::class, 'cetak'])->name('cetak');


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
