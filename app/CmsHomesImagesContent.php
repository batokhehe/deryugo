<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsHomesImagesContent extends Model
{
    protected $fillable = [
    	'title', 'desc', 'content', 'cms_homes_id',
    ];
}
