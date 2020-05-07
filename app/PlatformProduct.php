<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlatformProduct extends Model
{
    protected $table='platform_product';
    protected $fillable = ['product_id','platform_id'];
}
