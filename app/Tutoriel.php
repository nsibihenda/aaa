<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutoriel extends Model
{
    public function comments(){

       return $this->morphMany('App\Comment', 'comentable');
   }
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'tagable');
    }
}
