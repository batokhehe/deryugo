<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandInterest extends Model
{
    protected $fillable = [
    	'brand_id', 'category_id'
    ];
}
