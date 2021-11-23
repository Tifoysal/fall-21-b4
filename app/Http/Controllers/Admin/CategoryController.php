<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){

        $categories = Category::all();

        return view('admin.pages.category-list',compact('categories'));
    }

    public function categoryForm(){
        return view('admin.pages.product-category-create');
    }

    public function categoryadd(Request $request){
//         dd($request->all());
//        database column name||input field er name
        Category::create([
            'name'=>$request->name,
            'details'=>$request->details,
        ]);
        return redirect()->back()->with('msg','Category created successfully.');


    }
}
