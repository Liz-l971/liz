<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Baskets;

use App\Models\Orders;


class BasketController extends Controller
{
    public function addBasket(Product $product){
        $baskets = Baskets::where('id_user', auth()->user()->id)->where('status',null)->first();
        if($baskets==null){
            Baskets::query()->create([
                'id_user' => auth()->user()->id,
            ]);
            $baskets = Baskets::where('id_user', auth()->user()->id)->first();
        }
        $order = Orders::where('id_product', $product->id)->where('id_basket',$baskets->id)->where('status',0)->first();
        if($order!=null){
            $order->update([
                'count' => $order->count+1,
                'price' => $order->price+$product->price,
            ]);
        }else{
            Orders::query()->create([
                'id_basket' => $baskets->id,
                'id_product' => $product->id,
                'count' => 1,
                'price' => $product->price,
                'status'=>0
            ]);
        }
        return redirect()->back();
    }

    public function removeBasket(Product $product){

        $baskets = Baskets::where('id_user', auth()->user()->id)->where('status',null)->first();
        $order = Orders::where('id_product', $product->id)->where('id_basket',$baskets->id)->where('status',0)->first();

        if($order->count==1){
            $order->delete();
        }
        else{
            if($order!=null){
                $order->update([
                    'count' => $order->count-1,
                    'price' => $order->price-$product->price,

                ]);
            }
        }
    
        return redirect()->back();
    }
    
    public function basket(){
        
        $baskets = Baskets::where('id_user', auth()->user()->id)->where('status',null)->first();
        if($baskets!=null){
            $order = Orders::where('id_basket',$baskets->id)->where('status',0)->get();
            $sum = $order->sum('price'); 
            $count = $order->sum('count'); 
    
    
            return view('basket',compact('order','sum','count'));
        }else{
            $order =[];
            $sum = 0; 
            $count = 0; 
            return view('basket',compact('order','sum','count'));
        }
   
    }

    public function makeOrder(){
        $baskets = Baskets::where('id_user', auth()->user()->id)->where('status',null)->first();

        $baskets->update(['status'=>1]);

        return redirect('/profile');
    }
}
