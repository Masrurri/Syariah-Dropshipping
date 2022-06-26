<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Toko;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == "supplier") {
            $transactions = Transaksi::where('toko_id', auth()->user()->supplier->toko->id)->orderByDesc('created_at')->get();
        } else {
            $transactions = Transaksi::where('dropshipper_id', auth()->user()->dropshipper->id)->orderByDesc('created_at')->get();
        }
        // return $transactions;
        return view('Transaksi-page', [
            "title" => "Transaksi",
            "transactions" => $transactions,
        ]);
    }

    public function detail_transaksi(Request $request, Transaksi $transaksi)
    {
        $toko = Toko::find($transaksi->toko_id);
        $norek = $toko->no_rekening;
        $pemilik = $toko->pemilik_rekening;
        $bank = $toko->bank;
        return view('DetailTransaksi-page', [
            "title" => "Detail Transaksi",
            "transaksi" => $transaksi,
            "norek" => $norek,
            "pemilik" => $pemilik,
            "bank" => $bank,
        ]);
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $validate = $request->validate([
            "bukti_pembayaran" => "required",
        ]);

        $bukti_pembayaran = $request->file('bukti_pembayaran')->store('public/' . auth()->user()->id . '/transaksi/' . $transaksi->id . '/bukti_pembayaran');
        $bukti_pembayaran = str_replace("public/", "/storage/", $bukti_pembayaran);

        $update = Transaksi::where('id', $transaksi->id)
            ->update(["bukti_pembayaran" => $bukti_pembayaran, "status_pembayaran" => "Menunggu Konfirmasi"]);
        if ($update) {
            return redirect('detail-transaksi/' . $transaksi->id)->with('success', 'Bukti pembayaran updated!');
        }
        return redirect('detail-transaksi/' . $transaksi->id)->with('loginError', 'Update bukti pembayaran failed!');
    }

    public function update_transaksi_supplier(Request $request, Transaksi $transaksi)
    {
        $validate = $request->validate([
            "no_resi" => "",
            "status_pembayaran" => "required",
        ]);

        $update = Transaksi::where('id', $transaksi->id)->update([
            "no_resi" => $validate['no_resi'],
            "status_pembayaran" => $validate['status_pembayaran'],
        ]);

        if ($update) {
            if ($validate['status_pembayaran'] == "Ditolak") {
                $getStok = Produk::find($transaksi->produk_id)->stok;
                Produk::where('id', $transaksi->produk_id)->update([
                    "stok" =>  $getStok - 1,
                ]);
            }
            return redirect('detail-transaksi/' . $transaksi->id)->with('success', 'Transaksi updated!');
        }
        return redirect('detail-transaksi/' . $transaksi->id)->with('loginError', 'Update transaksi failed!');
    }
}
