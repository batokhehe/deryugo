<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandService extends Model
{
      protected $fillable =[
        'name', 'description',
      ];
}
