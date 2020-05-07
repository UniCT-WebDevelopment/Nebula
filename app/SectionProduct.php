<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionProduct extends Model
{
    protected $table='product_section';
    protected $fillable = ['product_id','section_id'];
}
