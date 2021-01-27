<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function articles(){
        $products = Product::inRandomOrder()->take(2)->get();
       
        return view('articles')->with('products', $products);
       
    }

    public function homearticles(){
        $products = Product::inRandomOrder()->take(2)->get();
        return view('home')->with('products', $products);
    }

    public function voirArticle($id_article){
        $product = Product::where('id_article', $id_article)->first();

        return view('article')->with('product', $product);
    }
    
}
