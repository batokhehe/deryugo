<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsAnchoringImageTile extends Model
{
    protected $fillable = [
    	'title', 'content', 'cms_anchoring_id',
    ];
}
