<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Landing-page');
    }

    public function authenticate(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            if (auth()->user()->role == "admin") {
                return redirect()->intended('/admin-dashboard');
            } elseif (auth()->user()->role == "supplier") {

                if (auth()->user()->supplier->toko->status_akun == "Belum aktif") {
                    return redirect('/edit-toko/' . auth()->user()->supplier->toko->id);
                }
            }

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
