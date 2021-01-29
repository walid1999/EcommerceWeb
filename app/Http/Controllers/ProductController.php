<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function articles(){
        $products = Product::Orderby('id')->paginate(3);
       
        return view('articles')->with('products', $products);
       
    }

    public function homearticles(){
        $products = Product::inRandomOrder()->take(3)->get();
        return view('home')->with('products', $products);
    }

    public function voirArticle($id){
        $product = Product::where('id', $id)->first();

        return view('article')->with('product', $product);
    }
    

    public function search()
    {
        request()->validate([
            'search' => 'required|min:1'
        ]);

        $search = request()->input('search');

        $products = Product::where('title', 'like', "%$search%")->Orderby('id')->paginate(10);

        return view('recherche')->with('products', $products);
    }
}
