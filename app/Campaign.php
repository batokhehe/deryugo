<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'brand_id', 'start_date', 'end_date', 'plan_engagement', 'plan_budget', 'plan_cost', 'status', 'content_type', 'content_type', 'post_frequency', 'post_rules', 'post_reference','post_image', 'caption', 'deadline_date', 
    ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'remember_token',
    // ];

    // *
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
     
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
