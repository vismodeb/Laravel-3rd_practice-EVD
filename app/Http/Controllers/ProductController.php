<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products.index',['products'=> Product::get()]);
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
    public function edit($id){
        $product = Product::where('id',$id)->First();

        return view('products.edit', ['product' => $product]);
    }
    public function update(Request $request, $id){
        // Validate Data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:10000000'
        ]);

        $product = Product::where('id',$id)->First();

        if(isset($request->image)){
            // upload image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }
        

        $product->name = $request->name;
        $product->description =$request->description;

        $product->save();

        return back()->withSuccess('Product Updated !!!');
    }
    public function destroy($id){
        $product = Product::where('id',$id)->First();
        $product->delete();
        return back()->withSuccess('Product Delete !!!');
    }
}
