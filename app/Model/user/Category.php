<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function post()
    {
        return $this->belongsToMany('App\Model\user\Post','category_posts');
    }
}
