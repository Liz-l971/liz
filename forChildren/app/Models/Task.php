<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date',
        'time',
        'cost',
        'file',
        'author_id',
        'category_id',
        'status'
    ];

    public function category() {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function author() {
        
        return $this->belongsTo(User::class, 'author_id');
    }
    



}
