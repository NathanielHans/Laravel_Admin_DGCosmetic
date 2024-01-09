<?php

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

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/kategori', function () {
    return view('admin.kategori');
});
Route::get('/admin/produk', function () {
    return view('admin.produk');
});
Route::get('/admin/addProduk', function () {
    return view('admin.addProduk');
});
Route::get('/admin/supplier', function () {
    return view('admin.supplier');
});
Route::get('/admin/kasir', function () {
    return view('admin.addKasir');
});