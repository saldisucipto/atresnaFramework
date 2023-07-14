<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    // index
    public function login(Request $request)
    {
        if ($request->isMethod('GET')) {
            return Inertia::render('Auth/Login');
        } elseif ($request->isMethod('POST')) {

            $autentikasi = $request->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required|min:6',
            ]);

            if (Auth::attempt($autentikasi)) {
                $request->session()->regenerate();

                return redirect()->intended('dashboard')->with('message', 'Hallo Selamat Datang Kembali !');
            } else {
                return back()->withErrors([
                    'email' => 'Ada kesalahan pada email, atau email tidak terdaftar pada data kami.',
                ]);
            }
        }
    }

    // loguut
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Kamu sekarang sudah logout !');
    }
}
