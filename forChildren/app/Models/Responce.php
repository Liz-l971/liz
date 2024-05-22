<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responce extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function task() {

        return $this->belongsTo(Task::class, 'id_task');

    }

    public function user() {

        return $this->belongsTo(User::class, 'id_user');
        
    }

}
