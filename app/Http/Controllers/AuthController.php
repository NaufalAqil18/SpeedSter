<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Impor model User dari namespace yang benar

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'verify_email' => 'required|same:email',
            'password' => 'required|string|min:8|confirmed',
            'verify_password' => 'required|same:password',
        ]);

        // Buat pengguna baru
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Otomatis login setelah register
        Auth::login($user);

        return redirect('/home'); // Arahkan ke halaman setelah login
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/home'); // Arahkan ke halaman setelah login
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function redirectToProvider($provider)
    {
        // Logika untuk redirect ke penyedia layanan sosial login
    }

    public function handleProviderCallback($provider)
    {
        // Logika untuk menangani callback dari penyedia layanan sosial login
    }
}
