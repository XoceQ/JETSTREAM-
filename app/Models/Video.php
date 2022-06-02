<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //relacion uno a muchos 
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relacion uno a muchos poliformica 
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }


    //relacion uno a muchos poliformica 
    public function posts(){
        return $this->morphMany('App\Models\Tag', 'taggable');
    }
}
