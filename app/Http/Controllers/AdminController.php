<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\Dropshipper;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $tokos = Toko::all();
        return view("AdminSupplier-page", [
            "title" => "Admin Supplier",
            "tokos" => $tokos
        ]);
    }

    public function detail_toko(Toko $toko)
    {
        $supplier = $toko->supplier;
        return view("AdminDetailToko-page", [
            "title" => "Admin Detail Toko",
            "toko" => $toko,
            "supplier" => $supplier,
        ]);
    }

    public function dropshipper_page(Dropshipper $dropshippers)
    {
        $dropshippers = Dropshipper::all();
        return view("AdminDropshipper-page", [
            "title" => "Admin Dropshipper",
            "dropshippers" => $dropshippers,
        ]);
    }

    public function detail_dropshipper(Dropshipper $dropshipper)
    {
        $transactions = Transaksi::all();
        return view("AdminDetailDropshipper-page", [
            "title" => "Admin Detail Dropshipper",
            "dropshipper" => $dropshipper,
            "transaksi" => $transactions,
        ]);
    }

    public function update(Request $request, Toko $toko)
    {
        $validate = $request->validate([
            "status_akun" => "required",
        ]);

        $update = Toko::where('id', $toko->id)->update(["status_akun" => $validate['status_akun']]);

        if ($update) {
            return redirect('admin-supplier')->with('success', 'Status updated!');
        }
        return redirect('admin-supplier')->with('loginError', 'Update status failed!');
    }
}
