<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getImageUrl() {
        return asset(\Illuminate\Support\Facades\Storage::url($this->image));
    }
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
