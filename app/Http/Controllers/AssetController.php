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

        $gambar = $request->file('asset')->store('public/' . auth()->user()->id . '/produk/' . $produk->id . '/assets');
        $gambar = str_replace("public/", "/storage/", $gambar);

        $asset = Asset::create(["produk_id" => $produk->id, "url" => $gambar]);
        if ($asset) {
            return redirect('edit-produk/' . $produk->id)->with('success', 'Assets Updated!');
        }
        return redirect('edit-produk/' . $produk->id)->with('loginError', 'Update Assets failed!');
    }

    public function delete(Produk $produk)
    {
        // $asset = Asset::where('produk_id', $produk->id)->where('url', '!=', $produk->gambar_utama)->get();
        $delete = Asset::where('produk_id', $produk->id)->where('url', '!=', $produk->gambar_utama)->delete();

        if ($delete) {
            // foreach ($asset as $asset_name) {
            //     $path_gambar = str_replace("storage/", "storage/app/public", $asset_name->url);
            //     File::delete(url($path_gambar));
            // }
            // Storage::disk('local')->delete('');
            return redirect('edit-produk/' . $produk->id)->with('success', 'Assets deleted!');
        }
        return redirect('edit-produk/' . $produk->id)->with('loginError', 'Delete Assets failed!');
    }
}
