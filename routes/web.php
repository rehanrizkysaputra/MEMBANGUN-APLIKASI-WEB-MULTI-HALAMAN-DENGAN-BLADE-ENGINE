<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Me',
        'nama' => 'rechan rizky saputra', // Silakan diisi
        'nim' => '24104410083',   // Silakan diisi
        'prodi' => 'Informatika',
        'matakuliah' => 'Pemrograman Web Lanjut',
        'framework' => 'Laravel 13'
    ]);
});