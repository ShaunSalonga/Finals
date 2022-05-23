<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    public function view()
    {
        $products = Product::all();
        return view('welcome',compact('products'));

    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('edit',compact('product','categories'));
        
    }
    public function delete($id)
    {
        
        $product = Product::find($id);
        $product->delete($id);
        return redirect('/product');
        
    }
    public function add()
    {
        $categories = Category::all();
        return view('addproduct',compact('categories'));
        
    }
    public function addnew(Request $req)
    {
       $input = $req->all();
       Product::create($input);
        return redirect('/product');
        
    }
}
