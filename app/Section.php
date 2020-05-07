<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function sections(){
        return $this->belongsToMany('App\Product');
    }
}
