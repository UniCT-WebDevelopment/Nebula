<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="orders";

    protected $fillable = [
        'user_id','billing_email','billing_name','billing_address','billing_city',
        'billing_name_on_card','billing_total',
    ];
    public function user(){
        return $this->belongsToMany('App\User');
    }

    public function products(){
        return $this->belongsToMany('App\Product','order_product');
    }

   /* public function orderedproducts(){
        return $this->belongsToMany('App\OrderProduct','id');
    }  */
}
