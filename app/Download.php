<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    public function products(){
        return $this->belongsToMany('App\Product');
    }
    protected $fillable = ['product_id','download_id','active'];
}
