<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    public function index($filter = "Terbaru")
    {
        $categories = Category::all();
        if ($filter == "Semua Produk") {
            $produks = Produk::all();
        } else {
            $category = Category::where('name', $filter)->get();
            $produks = Produk::where('category_id', $category[0]->id)->get();
        }

        return view('Produk-page', [
            "title" => "Produk",
            "products" => $produks,
            "categories" => $categories,
            "filter" => $filter
        ]);
    }


    public function my_produk()
    {
        $produks = Produk::where('toko_id', auth()->user()->supplier->toko->id)->get();
        $categories = Category::all();

        return view('MyProduk-page', [
            "title" => "My Produk",
            "products" => $produks,
            "categories" => $categories,
        ]);
    }

    public function add_produk()
    {
        $categories = Category::all();
        return view('TambahProduk-page', [
            "title" => "Tambah Produk",
            "categories" => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "nama_produk" => "required",
            "category" => "required",
            "deskripsi" => "required",
            "gambar_utama" => "required",
            "harga" => "required",
            "stok" => "required",
            "saran_harga" => "required",
            "berat" => "required",
        ]);

        $data = [
            "nama_produk" => $validate['nama_produk'],
            "category_id" => $validate['category'],
            "deskripsi" => $validate['deskripsi'],
            "gambar_utama" => "",
            "harga" => $validate['harga'],
            "stok" => $validate['stok'],
            "saran_harga" => $validate['saran_harga'],
            "berat" => $validate['berat'],
            "toko_id" => auth()->user()->supplier->toko->id,
        ];

        $produk = Produk::create($data);

        if ($produk) {
            $gambar_utama = $request->file('gambar_utama')->store('public/' . auth()->user()->id . '/produk/' . $produk->id . '/gambar_utama');
            $gambar_utama = str_replace("public/", "/storage/", $gambar_utama);

            Produk::where('id', $produk->id)
                ->update(["gambar_utama" => $gambar_utama]);

            Asset::create(["produk_id" => $produk->id, "url" => $gambar_utama]);

            return redirect('myproduk')->with("success", "Produk created!");
        }
        return redirect('myproduk')->with('loginError', 'Create produk failed!');
    }

    public function delete_produk(Produk $produk)
    {
        $delete = Produk::destroy($produk->id);
        if ($delete) {
            return redirect('myproduk')->with('success', 'Produk deleted!');
        }
        return redirect('myproduk')->with('loginError', 'Delete produk failed!');
    }

    public function detail_produk(Produk $produk)
    {
        $produk_assets = Asset::where('produk_id', $produk->id)->get();
        return view('DetailProduk-page', [
            "title" => "Detail Produk",
            "produk" => $produk,
            "assets" => $produk_assets,
        ]);
    }

    public function edit_produk(Produk $produk)
    {
        $categories = Category::all();
        $produk_assets = Asset::where('produk_id', $produk->id)->get();
        return view('EditProduk-page', [
            "title" => "Edit Produk",
            "produk" => $produk,
            "categories" => $categories,
            "assets" => $produk_assets,
        ]);
    }

    public function update(Request $request, Produk $produk)
    {
        $validate = $request->validate([
            "nama_produk" => "required",
            "category" => "required",
            "deskripsi" => "required",
            "gambar_utama" => "",
            "harga" => "required",
            "stok" => "required",
            "saran_harga" => "required",
            "berat" => "required",
        ]);

        if ($produk->gambar_utama == null) {
            $gambar_utama = $request->file('gambar_utama')->store('public/' . auth()->user()->id . '/produk/' . $produk->id . '/gambar_utama');
            $gambar_utama = str_replace("public/", "/storage/", $gambar_utama);
        } else {
            if ($request->file('gambar_utama') != null) {
                Storage::delete($produk->gambar_utama);
                $gambar_utama = $request->file('gambar_utama')->store('public/' . auth()->user()->id . '/produk/' . $produk->id . '/gambar_utama');
                $gambar_utama = str_replace("public/", "/storage/", $gambar_utama);
            } else {
                $gambar_utama = $produk->gambar_utama;
            }
        }

        $data = [
            "nama_produk" => $validate['nama_produk'],
            "category_id" => $validate['category'],
            "deskripsi" => $validate['deskripsi'],
            "gambar_utama" => $gambar_utama,
            "harga" => $validate['harga'],
            "stok" => $validate['stok'],
            "saran_harga" => $validate['saran_harga'],
            "berat" => $validate['berat'],
            "toko_id" => auth()->user()->supplier->toko->id,
        ];

        $update_produk = Produk::where('id', $produk->id)
            ->update($data);

        if ($update_produk) {
            $asset = Asset::where('url', $produk->gambar_utama)->get();
            if (count($asset) > 0) {
                Asset::where('id', $asset[0]->id)
                    ->update(["url" => $gambar_utama]);
            }

            return redirect('detail-produk/' . $produk->id)->with('success', 'Produk Updated!');
        }
        return redirect('detail-produk/' . $produk->id)->with('loginError', 'Update Produk failed!');
    }

    public function checkout_product(Produk $produk)
    {
        return view('Checkout-page', [
            "title" => "Checkout",
            "produk" => $produk,
        ]);
    }

    public function transaksi(Request $request, Produk $produk)
    {
        $validate = $request->validate([
            "jumlah" => "required",
            "catatan" => "",
            "pengirim" => "required",
            "no_hp_pengirim" => "required",
            "label" => "required",
            "total_harga" => "required",
            "kota_tujuan" => "required",
            "jasa_pengiriman" => "required",
            "ongkir" => "required",
            "penerima" => "required",
            "no_hp_penerima" => "required",
            "alamat_tujuan" => "required",
        ]);

        $data = [
            'no_order' => Str::upper(Str::random(3)) . $produk->id . date('Y') . date('m') . date('d') . date('H') . date('i') . date('s'),
            'produk_id' => $produk->id,
            'nama_produk' => $produk->nama_produk,
            'jumlah' => $validate['jumlah'],
            'ongkir' => $validate['ongkir'],
            'keterangan' => $validate["catatan"] ?? " ",
            'jasa_kurir' => $validate['jasa_pengiriman'],
            'total_harga' => $validate["total_harga"],
            'pengirim' => $validate["pengirim"],
            'telp_pengirim' => $validate["no_hp_pengirim"],
            'penerima' => $validate["penerima"],
            'telp_penerima' => $validate["no_hp_penerima"],
            'kota_tujuan' => $validate["kota_tujuan"],
            'alamat_tujuan' => $validate["alamat_tujuan"],
            'label_pengiriman' => "",
            'bukti_pembayaran' => "",
            'status_pembayaran' => "Tidak Ada",
            'dropshipper_id' => auth()->user()->dropshipper->id,
            'toko_id' => $produk->toko->id,
            'no_resi' => null,
        ];

        $transaksi = Transaksi::create($data);
        if ($transaksi) {
            $getStok = Produk::find($transaksi->produk_id)->stok;
            Produk::where('id', $transaksi->produk_id)->update([
                "stok" =>  $getStok - 1,
            ]);
            $label = $request->file('label')->store('public/' . auth()->user()->id . '/transaksi/' . $transaksi->id . '/label');
            $label = str_replace("public/", "/storage/", $label);

            Transaksi::where('id', $transaksi->id)
                ->update(["label_pengiriman" => $label]);

            return redirect('pembayaran/' . $produk->id)->with('success', 'Order created!');
        }

        return redirect('detail-produk/' . $produk->id)->with('loginError', 'Order failed!');
    }

    public function pembayaran(Produk $produk)
    {
        $norek = $produk->toko->no_rekening;
        $pemilik_rekening = $produk->toko->pemilik_rekening;

        return view('Pembayaran-page', [
            "title" => "Pembayaran",
            "norek" => $norek,
            "pemilik" => $pemilik_rekening,
        ]);
    }
}
