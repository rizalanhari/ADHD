<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == '1') {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/');
            }
        }
        return view('login.main');
    }
    public function proses(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'Username tidak boleh kosong'
            ]
        );

        $credetial = $request->only('username', 'password');
        if (Auth::attempt($credetial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == '1') {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/');
            }

            return redirect()->intended('/');
        }

        return back()->withError([
            'username' => 'Username/Password wrong'
        ])->onlyInput('username');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
