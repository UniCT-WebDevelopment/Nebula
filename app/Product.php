<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images(){
        return $this->belongsToMany('App\Images','products_images');
    }

    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    public function platforms(){
        return $this->belongsToMany('App\Platform');
    }

    public function sections(){
        return $this->belongsToMany('App\Section');
    }

    public function highlights(){
        return $this->belongsToMany('App\Highlight');
    }

    public function news(){
        return $this->belongsToMany('App\Anew');
    }
    
    public function featured1(){
        return $this->belongsToMany('App\FeaturedSales1');
    }

    public function featured2(){
        return $this->belongsToMany('App\FeaturedSales2');
    }

    public function midweek(){
        return $this->belongsToMany('App\Midweek');
    }

    public function discover(){
        return $this->belongsToMany('App\Discover');
    }


    public function show(){
        return $this->belongsTo('App\Types');
    }

    public function orders(){
        return $this->belongsToMany('App\Order','order_product','product_id');
    }

    /*public function orderedproducts(){
        return $this->belongsToMany('App\OrderProduct','id');
    }*/

    
    public function download(){
        return $this->belongsToMany('App\Download');
    }
}
