<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function Posts()
    {
        return $this->hasMany('App\Post');
    }

}
