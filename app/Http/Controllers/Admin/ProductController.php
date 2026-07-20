<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('product-create');
    }

    public function store()
    {
        $productName = request('product_name');
        $productPrice = request('product_price');
        $productDescription = request('product_description');

        Product::create(
            [
                'name' => $productName,
                'price' => $productPrice,
                'description' => $productDescription,
            ]
        );

        dd('Product store successfuly');
    }
}