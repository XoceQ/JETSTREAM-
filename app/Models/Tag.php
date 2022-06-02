<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;


    //relacion uno a uno poliformica
    public function posts(){
        return $this->morphToMany('App\Models\Post', 'taggable');
    }

    public function videos(){
        return $this->morphToMany('App\Models\Video', 'taggable');
    }
}
