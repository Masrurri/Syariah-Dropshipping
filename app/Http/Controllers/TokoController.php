<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class TokoController extends Controller
{

    public function edit_toko(Toko $toko)
    {
        return view('EditToko-page', [
            "title" => "Edit Toko",
            "toko" => $toko,
        ]);
    }

    public function update(Request $request, Toko $toko)
    {
        $validate = $request->validate([
            "nama_toko" => 'required',
            "no_rekening" => 'required',
            "pemilik_rekening" => 'required',
            "bank" => 'required',
            "kota" => 'required',
            "foto_identitas" => '',
            "kartu_identitas" => '',
            "alamat" => 'required',
            "deskripsi" => 'required',
        ]);

        if ($toko->kartu_identitas == null & $toko->foto_identitas == null) {
            // $foto_identitas = $request->file('foto_identitas')->store('public/' . auth()->user()->id . '/toko/' . $toko->id . '/foto_identitas');
            // $kartu_identitas = $request->file('kartu_identitas')->store('public/' . auth()->user()->id . '/toko/' . $toko->id . '/kartu_identitas');
            // $foto_identitas = str_replace("public/", "/storage/", $foto_identitas);
            // $kartu_identitas = str_replace("public/", "/storage/", $kartu_identitas);
            $filenameFOTO = $request->file('foto_identitas')->getClientOriginalName();
            $filenameKARTU = $request->file('kartu_identitas')->getClientOriginalName();
            $foto_identitas = $request->file('foto_identitas')->move('user/supplier/' . auth()->user()->id . '/identitas/foto_identitas', $filenameFOTO);
            $kartu_identitas = $request->file('kartu_identitas')->move('user/supplier/' . auth()->user()->id . '/identitas/kartu_identitas/', $filenameKARTU);
        } else {
            if ($request->file('kartu_identitas') != null & $request->file('foto_identitas') != null) {
                File::deleteDirectory('user/supplier/' . auth()->user()->id . '/identitas/foto_identitas');
                File::deleteDirectory('user/supplier/' . auth()->user()->id . '/identitas/kartu_identitas/');

                // $foto_identitas = $request->file('foto_identitas')->store('public/' . auth()->user()->id . '/toko/' . $toko->id . '/foto_identitas');
                // $kartu_identitas = $request->file('kartu_identitas')->store('public/' . auth()->user()->id . '/toko/' . $toko->id . '/kartu_identitas');
                // $foto_identitas = str_replace("public/", "/storage/", $foto_identitas);
                // $kartu_identitas = str_replace("public/", "/storage/", $kartu_identitas);
                $filenameFOTO = $request->file('foto_identitas')->getClientOriginalName();
                $filenameKARTU = $request->file('kartu_identitas')->getClientOriginalName();
                $foto_identitas = $request->file('foto_identitas')->move('user/supplier/' . auth()->user()->id . '/identitas/foto_identitas', $filenameFOTO);
                $kartu_identitas = $request->file('kartu_identitas')->move('user/supplier/' . auth()->user()->id . '/identitas/kartu_identitas/', $filenameKARTU);
            } else {
                $foto_identitas = $toko->foto_identitas;
                $kartu_identitas = $toko->kartu_identitas;
            }
        }

        $data = [
            "nama_toko" => $validate['nama_toko'],
            "no_rekening" => $validate['no_rekening'] ?? "",
            "pemilik_rekening" => $validate['pemilik_rekening'] ?? "",
            "bank" => $validate['bank'] ?? "",
            "kota" => $validate['kota'] ?? "",
            "foto_identitas" => $foto_identitas,
            "kartu_identitas" => $kartu_identitas,
            "alamat" => $validate['alamat'] ?? "",
            "deskripsi" => $validate['deskripsi'] ?? "",
        ];

        $update_toko = Toko::where('id', $toko->id)
            ->update($data);

        if ($update_toko) {
            if ($toko->status_akun == "Aktif") {
                return redirect('dashboard')->with('success', 'Toko Updated!');
            }
            return redirect('edit-toko/' . $toko->id)->with('success', 'Toko Updated!');
        }

        return redirect('edit-toko/' . $toko->id)->with('loginError', 'Update Toko failed!');
    }
}
