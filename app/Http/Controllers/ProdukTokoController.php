<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use App\Models\Category;
use Illuminate\Http\Request;

class ProdukTokoController extends Controller
{
    public function index(Toko $toko)
    {
        $categories = Category::all();
        return view('ProdukToko-page', [
            "title" => "Produk Toko",
            "toko" => $toko,
            "categories" => $categories,
        ]);
    }
}
