<?php

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
    return view('Landing-page');
});

Route::get('/register', function () {
    return view('Register-page');
});

Route::get('/dashboard', function () {
    return view('Dashboard-page', [
        "title" => "Dashboard"
    ]);
});

Route::get('/produk', function () {
    return view('Produk-page', [
        "title" => "Produk"
    ]);
});

Route::get('/transaksi', function () {
    return view('Transaksi-page', [
        "title" => "Transaksi"
    ]);
});

Route::get('/detail-transaksi', function () {
    return view('DetailTransaksi-page', [
        "title" => "Detail Transaksi"
    ]);
});

Route::get('/profile', function () {
    return view('Profile-page', [
        "title" => "Profile"
    ]);
});

Route::get('/detail-produk', function () {
    return view('DetailProduk-page', [
        "title" => "Detail Produk"
    ]);
});

Route::get('/edit-toko', function () {
    return view('EditToko-page', [
        "title" => "Edit Toko"
    ]);
});

Route::get('/checkout', function () {
    return view('Checkout-page', [
        "title" => "Checkout"
    ]);
});
