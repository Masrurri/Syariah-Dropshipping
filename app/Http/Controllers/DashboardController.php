<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == "supplier") {
            if (auth()->user()->supplier->toko->status_akun == "Belum aktif") {
                return redirect('/edit-toko/' . auth()->user()->supplier->toko->id);
            }
            $transactions = Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->orderByDesc('created_at')->get();

            // $getPrice = count(Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->where('status_pembayaran', 'Diterima')->total_harga);
            // $getOngkir = (int) count(Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->where('status_pembayaran', 'Diterima')->ongkir->get());
            $allSell = Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->where('status_pembayaran', 'Diterima')->sum('total_harga') - Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->where('status_pembayaran', 'Diterima')->sum('ongkir');
            $allSend = count(Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->where('no_resi', '!=', '')->where('status_pembayaran', 'Diterima')->get());
            $allTrans = count(Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->get());
            $allProduk = count(Produk::where('toko_id', auth()->user()->supplier->toko->id)->get());
            $ditolak = count(Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->where('status_pembayaran', 'Ditolak')->orderByDesc('created_at')->get());
            $on_process = count(Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->where('status_pembayaran', 'Diterima')->orderByDesc('created_at')->get());
            $not_process = count(Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->where('status_pembayaran', 'Menunggu Konfirmasi')->orWhere('no_resi', 'Ditolak')->orderByDesc('created_at')->get());
        } else {
            $allSell = "Tidak ada";
            $allSend = count(Transaksi::where('dropshipper_id', auth()->user()->dropshipper->id)->where('no_resi', '!=', '')->get());
            $allTrans = count(Transaksi::where('dropshipper_id', auth()->user()->dropshipper->id)->get());
            $transactions = Transaksi::where('dropshipper_id', auth()->user()->dropshipper->id)->orderByDesc('created_at')->get();
            $ditolak = count(Transaksi::where('dropshipper_id', auth()->user()->dropshipper->id)->where('status_pembayaran', 'Ditolak')->orderByDesc('created_at')->get());
            $on_process = count(Transaksi::where('dropshipper_id', auth()->user()->dropshipper->id)->where('status_pembayaran', 'Diterima')->orderByDesc('created_at')->get());
            $not_process = count(Transaksi::where('dropshipper_id', auth()->user()->dropshipper->id)->where('status_pembayaran', '!=', 'Diterima')->where('status_pembayaran', '!=', 'Ditolak')->orderByDesc('created_at')->get());
            $allProduk = "Tidak ada";
        }

        return view('Dashboard-page', [
            "title" => "Dashboard",
            "transactions" => $transactions,
            "on_process" => $on_process,
            "not_process" => $not_process,
            "ditolak" => $ditolak,
            "allTrans" => $allTrans,
            "allProduk" => $allProduk,
            "allSend" => $allSend,
            "allSell" => $allSell
            // "getPrice" => $getPrice
        ]);
    }
}
