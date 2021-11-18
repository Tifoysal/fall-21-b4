<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::with('category')->get();
        return view('admin.pages.product-list',compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        // dd($category);
        return view('admin.pages.create-product',compact('categories'));
    }

    public function store(Request $request){

        // dd($request->all());
        Product::create([
            // field name for DB || field name for form
            'name'=>$request->name,
            'price'=>$request->price,
            'category_id'=>$request->category
        ]);
         return redirect()->back();
    }
}
