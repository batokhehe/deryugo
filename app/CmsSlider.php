<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsSlider extends Model
{
    protected $fillable = [
    	'image', 'image_width', 'image_height', 'title', 'desc', 'button_text', 'button_action_url', 'cms_homes_id',
    ];
}
