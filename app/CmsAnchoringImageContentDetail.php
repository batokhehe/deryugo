<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsAnchoringImageContentDetail extends Model
{
    protected $fillable = [
    	'name', 'title', 'desc', 'image', 'cms_anchoring_image_content_id',
    ];
}
