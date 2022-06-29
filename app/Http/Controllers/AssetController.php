<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\Support\MediaStream;

class AssetController extends Controller
{
    public function store(Request $request, Produk $produk)
    {
        $validate = $request->validate([
            "asset" => "required"
        ]);

        // $gambar = $request->file('asset')->store('public/' . auth()->user()->id . '/produk/' . $produk->id . '/assets');
        // $gambar = str_replace("public/", "/storage/", $gambar);
        $filename = $request->file('asset')->getClientOriginalName();
        $gambar = $request->file('asset')->move('user/supplier/' . auth()->user()->id . '/produk/' . $produk->id . '/asset', $filename);

        $asset = Asset::create(["produk_id" => $produk->id, "url" => $gambar]);
        if ($asset) {
            return redirect('edit-produk/' . $produk->id)->with('success', 'Assets Updated!');
        }
        return redirect('edit-produk/' . $produk->id)->with('loginError', 'Update Assets failed!');
    }

    public function delete(Produk $produk)
    {
        File::deleteDirectory('user/supplier/' . auth()->user()->id . '/produk/' . $produk->id . '/asset');
        $delete = Asset::where('produk_id', $produk->id)->where('url', '!=', $produk->gambar_utama)->delete();

        if ($delete) {
            return redirect('edit-produk/' . $produk->id)->with('success', 'Assets deleted!');
        }
        return redirect('edit-produk/' . $produk->id)->with('loginError', 'Delete Assets failed!');
    }
}
