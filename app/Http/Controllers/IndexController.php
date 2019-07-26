<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;

class IndexController extends Controller
{
    public function index() {

        // first
        $categories = Category::where('status', Category::STATUS_ACTIVE)
                                ->orderBy('order', 'DESC')
                                ->get();

        $products = Product::where('status', Product::STATUS_ACTIVE)
                            ->get();

    	return view('index')
                ->with('categories', $categories)
                ->with('products', $products);
    }

    /*
    */
    public function categoryBySlug($slug) {
        // first
        $categories = Category::where('status', Category::STATUS_ACTIVE)
                                ->orderBy('order', 'DESC')
                                ->get();

        $products = Product::join('categories', 'categories.id', 'products.catogry_id')  
                            ->where('products.status', Product::STATUS_ACTIVE)
                            ->where('categories.slug', $slug) 
                            ->get();
        dd($products);   
    }
}
