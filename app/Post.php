<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = ['title', 'description'];
    
    
    
    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'tagable');
    }
   public function comments(){

       return $this->morphMany('App\Comment', 'comentable');
   }
}
