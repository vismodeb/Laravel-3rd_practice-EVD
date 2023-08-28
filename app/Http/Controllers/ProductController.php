<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }
    public function creat(){
        return view('products.creat');
    }
    public function store(Request $request){
        // Validate Data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000000'
        ]);

        // upload image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description =$request->description;

        $product->save();

        return back()->withSuccess('Product Created !!!');
    }
}
