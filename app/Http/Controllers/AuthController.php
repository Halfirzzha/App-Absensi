<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function processlogin(Request $request)
    {
        if (Auth::guard('karyawan')->attempt(['nik' => $request->nik, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return redirect('/')->with('error', 'NIK Atau Password Anda Salah !!');
        }
    }
    
    public function processlogout()
    {
        if (Auth::guard('karyawan')->check()){
            Auth::guard('karyawan')->logout();
            return redirect('/');
        }
    }
}
