<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadProduct extends Model
{
    protected $table = 'download_product';
    protected $fillable = ['download_id','product_id','active'];
    
}
