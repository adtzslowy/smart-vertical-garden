<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProses(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email'=> request('email'), 'password' => request('password')])) {
            return redirect('admin')->with('succes', 'Berhasil masuk sebagai admin');
        }

        return redirect('/login')->with('error', 'Credensial tidak valid');
    }

    public function logout()
    {
        $guards = [
            'admin'
        ];

        foreach ($guards as $guard) {
            auth()->guard($guard)->logout();
        }

        return redirect('/')->with('success', 'Berhasil logout');
    }

    public function addAdmin(Request $request)
    {
        $user = new Admin;
        $user->id = 1;
        $user->nama = "Hidayatul Hasanah";
        $user->email = "hidahasanah@gmail.com";
        $user->password = bcrypt("hida1234");
        $user->foto_profil = "hida";
        $user->save();

        return "ADMIN BERHASIL DI TAMBAHKAN, JANGAN SAMPAI LUPA PASSWORD LAGI YA";
    }
}
