<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function products(){

        return $this->belongTo('App\Model\Product');
    }
}
