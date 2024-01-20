<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminSupplierController;

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
    return view('home');
});

Route::get('/admin', function () {
    return view('admin.index');
});
Route::resource('/admin/kategori', AdminKategoriController::class);
Route::resource('/admin/supplier', AdminSupplierController::class);
Route::resource('/admin/kasir', AdminUserController::class);
// Route::post('/admin/kategori', [AdminKategoriController::class, 'store']);
Route::get('/admin/produk', [AdminProductController::class, 'index']);
Route::get('/admin/addProduk', [AdminProductController::class, 'create']);

Route::get('/kasir', function () {
    return view('kasir.index');
});