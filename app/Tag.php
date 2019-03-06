<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     protected $fillable = ['name'];
     
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'tagable');
    }
    public function tutoriels()
    {
        return $this->morphedByMany('App\Tutoriel', 'tagable');
    }
}
