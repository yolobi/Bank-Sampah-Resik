<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/');
    }

    public function login_index(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // dd($credentials);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register_index(){
        return view('register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required_with:password-confirm|same:password-confirm|min:8',
            'password-confirm' => 'min:8',
            'saldo' => 'nullable'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        $request->session()->flash('success', 'Registrasi Akun Berhasil');
        return redirect('/login');
    }
}
