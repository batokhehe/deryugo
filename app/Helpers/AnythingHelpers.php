<?php

function getBrandData($user_id){
	$result = \App\Brand::where('user_id', '=', $user_id)
    ->first();

    return $result;
}

function getCampaignNotificationListBrand($brand_id){
	$result = \App\SystemLog::where('brand_id', '=', $brand_id)
    ->orderBy('id', 'desc')
    ->get();

    return $result;
}

function getCampaignNotificationCountBrand($brand_id){
	$result = \App\SystemLog::where('brand_id', '=', $brand_id)
    ->where('read_at', '=', null)
    ->count();

    return $result;
}

function getCampaignNotificationListInfluencer($influencer_id){
	$result = \App\SystemLog::where('influencer_id', '=', $influencer_id)
    ->orderBy('id', 'desc')
    ->get();

    return $result;
}

function getCampaignNotificationCountInfluencer($influencer_id){
	$result = \App\SystemLog::where('influencer_id', '=', $influencer_id)
    ->where('read_at', '=', null)
    ->count();

    return $result;
}


?>