<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfluencerCategory extends Model
{
    protected $fillable = [
    	'influencer_id', 'category_id'
    ];
}
