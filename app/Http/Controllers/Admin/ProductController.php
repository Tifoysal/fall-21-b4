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
//        dd($products);
        return view('admin.pages.product-list',compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        // dd($category);
        return view('admin.pages.create-product',compact('categories'));
    }

    public function store(Request $request){
        // dd(date('Ymdhms'));
        // dd($request->all());
        $filename = '';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploades',$filename);

        }

        Product::create([
            // field name for DB || field name for form
            'name'=>$request->name,
            'price'=>$request->price,
            'category_id'=>$request->category,
            'image'=>$filename
        ]);
         return redirect()->back()->with('msg','Product Created Successfully.');
    }
}
