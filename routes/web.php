<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Putu Rifki Dirkayuda"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "contacts" => [
            ["nama" => "Putu Rifki Dirkayuda", "pesan" => "Welcome to my blog"],
            ["nama" => "Nyoman Tri Darma Wahyudi", "pesan" => "Welcome to my blog"]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "notelepon" => "0881038644484"
    ]);
});
