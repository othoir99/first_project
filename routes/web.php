<?php

use App\Models\Catagory;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all();

    return view('welcome', compact('products'));
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registratrion', function () {
    return view('registratrion');
})->name('reg');

Route::post('/registratrion-user', function (Request $request) {
    // dd($request->toArray());

    $name = $request['name'];
    $email = $request['email'];
    $password = $request['password'];

    User::create(
        [
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]
    );

    dd('User store successfuly');

})->name('userStore');

// Product create routes
Route::get('/producte-create', function () {
    return view('product-create');
});

Route::post('/product-store', function (Request $request) {
    // dd($request->toArray());
    $productName = $request['product_name'];
    $productImage = $request['product_image_url'];
    $productPrice = $request['product_price'];

    Product::create(
        [
            'name' => $productName,
            'image_url' => $productImage,
            'price' => $productPrice,
        ]
    );
})->name('productStore');

// categories route
Route::get('/categories-create', function () {
    return view('categories-create');
});
Route::post('/categories-store', function (Request $request) {
    // dd($request->toArray());
    $categoriesName = $request['categories_name'];
    $categoriesImage = $request['categories_image_url'];

    Catagory::create(
        ['name' => $categoriesName,
            'image_url' => $categoriesImage,
        ]

    );
    dd('$categories_name');

})->name('categoriesStore');
