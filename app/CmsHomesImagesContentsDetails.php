<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsHomesImagesContentsDetails extends Model
{
    protected $fillable = [
    	'name', 'title', 'desc', 'image', 'cms_homes_images_contents_id',
    ];
}
