<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_basket',
        'id_product',
        'count',
        'price',
        'status',

    ];

    public function getProduct($idProduct){

         $product = Product::where('id',$idProduct)->first();

         return $product; 

    }

  


    
}
