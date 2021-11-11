<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        return view('admin.pages.product-list');
    }

    public function create()
    {
        return view('admin.pages.create-product');
    }

    public function store(Request $request){

        // dd($request->all());
        Product::create([
            // field name for DB || field name for form
            'name'=>$request->name,
            'price'=>$request->price
        ]);
         return redirect()->back();
    }
}
