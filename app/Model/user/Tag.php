<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     public function post()
    {
       return $this->belongsToMany('App\Model\user\Post','post_tags');
    }
}
