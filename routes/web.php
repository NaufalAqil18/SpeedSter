<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/main', function () {
    return view('main');
});




//halaman register dan login
Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/login/{provider}', [AuthController::class, 'redirectToProvider'])->name('social.login');
Route::get('/login/{provider}/callback', [AuthController::class, 'handleProviderCallback']);






Route::get('/about', function () {
    return view('about', ['nama' => 'Naufal Aqil']); // array berfungsi untuk memasukkan data
    // nama sebagai variable dan Naufal Aqil sebagai nilai
    // dia akan terpanggil jika membuka halaman about
});
