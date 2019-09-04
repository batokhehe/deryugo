<?php

namespace App\Http\Controllers;

use App\User;
use App\Influencer;
use App\Category;
use App\InfluencerCategory;
use Illuminate\Http\Request;
use Validator;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ProfileController extends Controller
{
    public function index()
    {
        $influencer = Influencer::where('user_id', auth()->user()->id)->first();
        $endpoint = "https://api.minter.io/v1.0/reports/" . $influencer->remember_token . "/top_posts_list?date_from=2019-01-01&to_date=2019-07-01&unit=month&skip=0&order_by=engagemen_rate&";
        $access_token = "access_token=yHmbpD3WKdYiXTiVHETepkJQGfFrmeNy";
        $url = $endpoint . "" . $access_token;
        
        if(auth()->user()->status == '1'){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            // SSL important
            curl_setopt($ch, CURLOPT_POST, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
            // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            
            $response = curl_exec($ch);
            curl_close($ch);
            
            $json = json_decode($response);
            $influencer['post_feed'] = $json;
        }
        $influencer_category = InfluencerCategory::select('category_id')->where('influencer_id', $influencer->id)->get();
        $category = Category::whereIn('id', $influencer_category->toArray())->get();
        
        return view('layouts.tools.influencer.profile.index')
            ->with('influencer_categories', $influencer_category)
            ->with('categories', $category)
            ->with('influencer', $influencer);
    }
    
    public function edit(){
        $influencer = Influencer::where('user_id', auth()->user()->id)->first();
        $influencer_category = InfluencerCategory::where('influencer_id', $influencer->id)->get();
        $category = Category::all();
        return view('layouts.tools.influencer.profile.edit')
            ->with('influencer_categories', $influencer_category)
            ->with('categories', $category)
            ->with('influencer', $influencer);
    }
    
    public function update(Request $request){
        $influencer = Influencer::where('user_id', auth()->user()->id)->first();
        $data = array('instagram_username' => $request->post('instagram'));
        $insert = array();
        
        InfluencerCategory::where('influencer_id', $influencer->id)->delete();
        foreach($request->post('interest') as $interest){
            $insert[] = array('influencer_id'=> $influencer->id, 'category_id' => $interest);
        }
        InfluencerCategory::insert($insert);
        
        Influencer::where('id', $influencer->id)->update($data);
        return redirect()->route('profile.influencer');
    }
}