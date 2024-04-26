<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Cache\RateLimiting\Limit;

class WellcomeController extends Controller
{

    public function welcome() {
        $categories = Category::all();

        $products = Product::all();
        return view('welcome', compact('categories', 'products'));

    }

    public function catalog() {

        $categories = Category::all();

        return view('catalog', compact('categories'));

    }

    public function admin() {
        $categories = Category::all();

        $products = Product::all();
        if(auth()->user()){
            if(auth()->user()->status == 2){
                return view('admin', compact('categories', 'products'));
            }else{
                return view("welcome", compact('categories', 'products'));
            }
        }else{
        return view("welcome", compact('categories', 'products'));
        }

    }
}
