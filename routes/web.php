<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;




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

Route::post('/registratrion-data', function(Request $request){
    // dd($request->toArray());
    
    User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => $request['password'],
    ]);

});