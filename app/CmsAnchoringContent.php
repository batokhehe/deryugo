<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsAnchoringContent extends Model
{
    protected $fillable = [
    	'title', 'desc', 'content', 'cms_anchoring_id',
    ];
}
