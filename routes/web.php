<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenerimaanBarangController;
use App\Http\Controllers\PengeluaranBarangController;
use App\Http\Controllers\OrderBarangController;
use App\Http\Controllers\SupplierController;


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
Route::resource('barang', BarangController::class);
Route::resource('penerimaan_barang', PenerimaanBarangController::class);
Route::resource('pengeluaran_barang', PengeluaranBarangController::class);
Route::resource('order_barang', OrderBarangController::class);
Route::resource('suppliers', SupplierController::class);

