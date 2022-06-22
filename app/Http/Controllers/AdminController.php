<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $tokos = Toko::all();
        return view("AdminDashboard-page", [
            "title" => "Admin Dashboard",
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

    public function update(Request $request, Toko $toko)
    {
        $validate = $request->validate([
            "status_akun" => "required",
        ]);

        $update = Toko::where('id', $toko->id)->update(["status_akun" => $validate['status_akun']]);

        if ($update) {
            return redirect('admin-dashboard')->with('success', 'Status updated!');
        }
        return redirect('admin-dashboard')->with('loginError', 'Update status failed!');
    }
}
