<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        // $mytoko = Toko::where('id', auth()->user()->supplier->toko->id)->get();
        $tokos = Toko::all();
        return view('ListSupplier-page', [
            "title" => "Supplier",
            "tokos" => $tokos,
            // "mytoko" => $mytoko
        ]);
    }
}
