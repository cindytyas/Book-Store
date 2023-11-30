<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin');
            } elseif (Auth::user()->role == 'user') {
                return redirect()->route('user.index');
            }
        } else {
            return redirect('')->withErrors('Username atau password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerCreate(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email',
            'name'  => 'required',
            'password' => 'required'

        ], [
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah terdaftar',
            'name.required' => 'Nama harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => $request->password,
            'role' => 'user',
        ]);

        return redirect()->route('user.index')->with('success', 'Anda Berhasil Register');
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
