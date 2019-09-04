<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsHomesContentsDetails extends Model
{
    protected $fillable = [
    	'title', 'desc', 'image', 'cms_homes_contents_id',
    ];
}
