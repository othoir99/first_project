<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $products = Product::all();
    return view('welcome', compact('products'));
});

Route::get('/login', function(){
    return view('login');
});


Route::get('/registratrion', function(){
    return view('registratrion');
});
