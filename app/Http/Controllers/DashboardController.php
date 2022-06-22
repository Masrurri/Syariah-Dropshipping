<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
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
            $on_process = count(Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->where('status_pembayaran', 'Diterima')->orderByDesc('created_at')->get());
            $not_process = count(Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->where('status_pembayaran', '!=', 'Diterima')->where('status_pembayaran', '!=', 'Ditolak')->orderByDesc('created_at')->get());
        } else {
            $transactions = Transaksi::where('dropshipper_id', auth()->user()->dropshipper->id)->orderByDesc('created_at')->get();
            $on_process = count(Transaksi::where('dropshipper_id', auth()->user()->dropshipper->id)->where('status_pembayaran', 'Diterima')->orderByDesc('created_at')->get());
            $not_process = count(Transaksi::where('dropshipper_id', auth()->user()->dropshipper->id)->where('status_pembayaran', '!=', 'Diterima')->where('status_pembayaran', '!=', 'Ditolak')->orderByDesc('created_at')->get());
        }

        return view('Dashboard-page', [
            "title" => "Dashboard",
            "transactions" => $transactions,
            "on_process" => $on_process,
            "not_process" => $not_process,
        ]);
    }
}
