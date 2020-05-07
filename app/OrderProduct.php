<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';
    protected $fillable =['order_id','user_id','product_id',
    'quantity'];
   /* public function products(){
        return $this->belongsTo('App\Product','id');
    }

    public function orders(){
        return $this->belongsTo('App\Order','id');
    }*/
}
