<?php

namespace App\Http\Controllers;

use App\Models\Dropshipper;
use App\Models\Supplier;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('Register-page');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sebagai' => 'required',
            'nama_toko' => '',
            'nama_lengkap' => 'required',
            'username' => ['required', 'unique:users,username'],
            'no_handphone' => ['required', 'unique:users,no_handphone'],
            'email' => ['required', 'unique:users,email', 'email:dns'],
            'password' => ['required', 'min:8'],
            'ketentuan_acc' => 'required',
        ]);

        $role = "";
        if ($validated['sebagai'] == "supplier") {
            $role = "supplier";
        } elseif ($validated['sebagai'] == "dropshipper") {
            $role = "dropshipper";
        }

        $user_data = [
            'nama_lengkap' => $validated['nama_lengkap'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'no_handphone' => $validated['no_handphone'],
            'password' => bcrypt($validated['password']),
            'role' => $role,
        ];

        $user = User::create($user_data);
        Auth::login($user);

        if ($validated['sebagai'] == 'supplier') {
            $toko = Toko::create([
                'nama_toko' => $validated['nama_toko'],
                'kota' => '',
                'alamat' => '',
                'deskripsi' => '',
                'no_rekening' => '',
                'pemilik_rekening' => '',
                'bank' => '',
                'kartu_identitas' => '',
                'foto_identitas' => '',
                'status_akun' => 'Belum aktif',
            ]);
            Supplier::create([
                'nama_lengkap' => $user->nama_lengkap,
                'user_id' => $user->id,
                'toko_id' => $toko->id,
                'email' => $user->email,
            ]);

            return redirect('/edit-toko/' . $toko->id);
        } elseif ($validated['sebagai'] == 'dropshipper') {
            Dropshipper::create([
                'nama_lengkap' => $user->nama_lengkap,
                'user_id' => $user->id,
                'email' => $user->email,
            ]);
        }

        return redirect('/dashboard');
    }
}
