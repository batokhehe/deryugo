<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsAnchoringContentDetail extends Model
{
    //
    protected $fillable = [
    	'title', 'desc', 'image', 'content', 'cms_anchoring_content_id',
    ];
}
