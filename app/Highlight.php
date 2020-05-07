<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    public function products(){
        return $this->belongsToMany('App\Product');
    }

    public static function getTableName(){
        return (new self())->getTable();
    }
}
