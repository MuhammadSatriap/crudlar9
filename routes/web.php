<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\MahasiswaController;

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


Route::get('/pemain',[PemainController::class, 'index'])->name('pemain');



Route::get('/tambahdata',[PemainController::class, 'tambahdata'])->name('tambahdata');
Route::post('/tambahact',[PemainController::class, 'tambahact'])->name('tambahact');

Route::get('/tampildata/{id}',[PemainController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}',[PemainController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}',[PemainController::class, 'deletedata'])->name('deletedata');


Route::get('/',[MahasiswaController::class, 'mahasiswa'])->name('mahasiswa');

Route::get('/tambahmhs',[MahasiswaController::class, 'tambahmhs'])->name('tambahmhs');
Route::post('/tambahact',[MahasiswaController::class, 'tambahact'])->name('tambahact');
Route::get('/tampilmhs/{id}',[MahasiswaController::class, 'tampilmhs'])->name('tampilmhs');
Route::post('/updatedata/{id}',[MahasiswaController::class, 'updatedata'])->name('updatedata');
Route::get('/deletemhs/{id}',[MahasiswaController::class, 'deletemhs'])->name('deletemhs');
