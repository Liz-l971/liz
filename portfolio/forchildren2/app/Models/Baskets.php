<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baskets extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'id_user',
        'status',
    ];
    public function getOrders($idBasket){
        $order = Orders::where('id_basket',$idBasket)->get();
        return $order;
    }

    public function getUser($idUser){
        $user = User::where('id',$idUser)->first();
        return $user;
    }

    public function getSum($idBasket){
        $order = Orders::where('id_basket',$idBasket)->get();
        $sum = $order->sum('price');
        return $sum;
    }


}
