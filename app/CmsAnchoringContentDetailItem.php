<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsAnchoringContentDetailItem extends Model
{
    //
    protected $fillable = [
    	'title', 'desc', 'image', 'cms_anchoring_content_detail_id',
    ];
}
