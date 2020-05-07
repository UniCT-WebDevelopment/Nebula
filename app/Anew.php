<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anew extends Model
{
    protected $table = "anews";
    public function products(){
        return $this->belongsToMany('App\Product');
    }

    public static function getTableName(){
        return (new self())->getTable();
    }
}
