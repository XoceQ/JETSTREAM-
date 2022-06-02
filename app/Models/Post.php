<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relacion uno a muchos (inversa)

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    //relacion uno a uno poliformica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //relacion uno a uno poliformica
    public function comments(){
        return $this->morphToMany('App\Models\Comment', 'commentable');
    }

    
    //relacion uno a uno poliformica
    public function posts(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
