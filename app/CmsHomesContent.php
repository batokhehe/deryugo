<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsHomesContent extends Model
{
    protected $fillable = [
    	'title', 'desc', 'cms_homes_id',
    ];
}
