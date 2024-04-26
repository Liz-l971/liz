<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getImageUrl() {
        return asset('/storage/app/' .($this->img));
    }
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function basket($idProduct){
        if(auth()->user()){
            $id = auth()->user()->id;
            echo 'asf';
        }
        else{
            $id = 0;
        }
        $baskets = Baskets::where('id_user', $id)->where('status',null)->first();

        if($baskets!=null){
            $order = Orders::where('id_product',$idProduct)->where('id_basket',$baskets->id)->where('status',0)->first();
        }else{
            $order = null;
        }
        if($order==null){
            return 0;
        }else{
            return $order;

        }

    }
}
