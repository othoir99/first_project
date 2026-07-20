<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('categories-create');
    }

    public function store()
    {
        // dd($request->toArray());
        $categoriesName = $request['categories_name'];
        $categoriesImage = $request['categories_image_url'];

        Catagory::create(
            ['name' => $categoriesName,
                'image_url' => $categoriesImage,
            ]

        );
        dd('$categories_name');
    }
}