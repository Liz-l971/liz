<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Baskets;
use App\Models\Orders;
use Illuminate\Cache\RateLimiting\Limit;
use App\Http\Requests\auth\RegisterRequest;
use App\Models\User;

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

    public function about() {
        $products = Product::take(5)->get();
        return view('about',compact('products'));

    }

    public function journal() {

        $categories = Category::all();
        $products = Product::all();

        
        return view('journal', compact('categories', 'products'));

    }

    public function list(){
        return Product::all();
    }
    public function profile() {
        $baskets = Baskets::where('id_user', auth()->user()->id)->whereNotNull('status')->get(); 
        return view('profile', compact('baskets'));

    }

    public function category(Category $category) {

        $categories = Category::all();

        $products = Product::where('category_id', $category->id)->get();

        return view('journal', compact('categories', 'products'));

    }

    public function statusOrder($status){
        $categories = Category::all();

        $products = Product::all();

        $baskets = Baskets::where('status',$status)->get();

        return view('admin', compact('categories', 'products','baskets'));

    }

    public function accept(Baskets $baskets){
  

        $baskets->update(['status'=>2]);
        return redirect('/admin');
    }

    public function reject(Baskets $baskets){
  

        $baskets->update(['status'=>3]);
        return redirect('/admin');
    }

    public function admin() {
        $categories = Category::all();

        $products = Product::all();

        $baskets = Baskets::where('status',!null)->get();    

        if(auth()->user()){
            if(auth()->user()->status == 2){
                return view('admin', compact('categories', 'products','baskets'));
            }else{
                return view("welcome", compact('categories', 'products'));
            }
        }else{

        return view("welcome", compact('categories', 'products'));
        }

    }


}
