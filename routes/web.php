<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukTokoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;
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

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
    Route::get('/register', [RegisterController::class, 'index']);
    Route::get('/login', [LoginController::class, 'index']);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-supplier', [AdminController::class, "index"]);
    Route::get('/admin-dropshipper', [AdminController::class, "dropshipper_page"]);
    Route::get('/admin-detail-dropshipper/{dropshipper}', [AdminController::class, "detail_dropshipper"]);

    Route::get('/admin-detail-toko/{toko}', [AdminController::class, "detail_toko"]);
    Route::put('/update_status/{toko}', [AdminController::class, "update"]);
    Route::get('/detail-transaksi/{transaksi}', [TransaksiController::class, "detail_transaksi"]);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"]);

    // Route::get('/produk', [ProdukController::class, "index"]);
    Route::get('/produk/{filter?}', [ProdukController::class, "index"])->name('produk');

    Route::get('/transaksi/{sortBY}', [TransaksiController::class, "index"]);

    Route::get('/detail-transaksi/{transaksi}', [TransaksiController::class, "detail_transaksi"]);
    Route::put('/update-transaksi/{transaksi}', [TransaksiController::class, "update"]);
    Route::put('/update-transaksi-supplier/{transaksi}', [TransaksiController::class, "update_transaksi_supplier"]);

    Route::get('/profile', [ProfileController::class, "index"]);
    Route::put('/user/update', [ProfileController::class, 'update']);

    Route::get('/detail-produk/{produk}', [ProdukController::class, "detail_produk"]);
    Route::delete('/delete-produk/{produk}', [ProdukController::class, "delete_produk"]);

    Route::post('/assets/{produk}', [AssetController::class, "store"]);
    Route::delete('/assets/{produk}', [AssetController::class, "delete"]);

    Route::get('/edit-toko/{toko}', [TokoController::class, "edit_toko"]);
    Route::put('/edit-toko/{toko}', [TokoController::class, "update"]);

    Route::get('/checkout/{produk}', [ProdukController::class, "checkout_product"]);
    Route::post('/checkout/{produk}', [ProdukController::class, "transaksi"]);

    Route::get('/pembayaran/{produk}', [ProdukController::class, "pembayaran"]);

    Route::get('/myproduk', [ProdukController::class, "my_produk"]);

    Route::get('/tambah-produk', [ProdukController::class, "add_produk"]);
    Route::post('/tambah-produk', [ProdukController::class, "store"]);

    Route::get('/edit-produk/{produk}', [ProdukController::class, "edit_produk"]);
    Route::put('/edit-produk/{produk}', [ProdukController::class, "update"]);

    Route::get('/supplier', [SupplierController::class, "index"]);
    Route::get('/produk-toko/{toko}', [ProdukTokoController::class, "index"]);

    Route::put('/user/update_password', [ProfileController::class, 'update_password']);
});
