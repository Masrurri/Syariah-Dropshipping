<?php

namespace App\Http\Controllers;

use App\Models\Dropshipper;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Profile",
            "nama_lengkap" => auth()->user()->nama_lengkap,
            "email" => auth()->user()->email,
            "no_handphone" => auth()->user()->no_handphone
        ];

        return view('Profile-page', $data);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required',
            'no_handphone' => 'required',
            'email' => ['required', 'email:dns'],
        ]);

        $user = User::find(auth()->user()->id);
        $update_user = User::where('id', $user->id)
            ->update($validated);

        if ($user->role == "supplier") {
            Supplier::where('user_id', $user->id)
                ->update(["nama_lengkap" => $validated['nama_lengkap']]);
        } elseif ($user->role == "dropshipper") {
            Dropshipper::where('user_id', $user->id)
                ->update(["nama_lengkap" => $validated['nama_lengkap']]);
        }

        if ($update_user) {
            return redirect('profile')->with('success', 'User Updated!');
        }

        return redirect('profile')->with('loginError', 'Update failed!');
    }
    public function update_password(Request $request)
    {
        $validated = $request->validate([
            'pw_lama' => 'required',
            'pw_baru' => 'required',

        ]);

        $user = User::find(auth()->user()->id);
        $update_user = User::where('id', $user->id)
            ->update(['password' => bcrypt($validated['pw_baru'])]);
        if ($update_user) {
            return redirect('profile')->with('success', 'User Updated!');
        }

        return redirect('profile')->with('loginError', 'Update failed!');
    }
}
