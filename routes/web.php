<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Naufal Aqil']); // array berfungsi untuk memasukkan data
    // nama sebagai variable dan Naufal Aqil sebagai nilai
    // dia akan terpanggil jika membuka halaman about
});
