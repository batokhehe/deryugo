<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsAnchoringPodcast extends Model
{
    //
    protected $fillable = [
    	'title', 'desc', 'image', 'cms_anchoring_id',
    ];
}
