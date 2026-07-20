<?php

use App\Models\Catagory;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

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






/**
 * Admin Pages
 */

// Product create routes
Route::get('/producte-create', ProductController::class . '@create')->name('productCreate');

Route::post('/product-store', ProductController::class . '@store')->name('productStore');


// categories routes
Route::get('/categories-create', CategoriesController::class . '@create')->name('categoriesCreate');
Route::post('/categories-store', CategoriesController::class . '@store')->name('categoriesStore');
