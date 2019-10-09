<?php

namespace App\Http\Controllers;

use App\User;
use App\Influencer;
use App\Category;
use App\PostRelated;
use App\AudienceRelated;
use App\InfluencerCategory;
use App\Module;
use App\SystemLog;
use App\Brand;
use Illuminate\Http\Request;
use Validator;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $influencer = Influencer::where('user_id', auth()->user()->id)->first();
        // $endpoint = "https://api.minter.io/v1.0/reports/" . $influencer->remember_token . "/top_posts_list?date_from=2019-01-01&to_date=2019-07-01&unit=month&skip=0&order_by=engagemen_rate&";
        // $access_token = "access_token=yHmbpD3WKdYiXTiVHETepkJQGfFrmeNy";
        // $url = $endpoint . "" . $access_token;
        
        // if(auth()->user()->status == '1'){
        //     $ch = curl_init();
        //     curl_setopt($ch, CURLOPT_URL, $url);
        //     // SSL important
        //     curl_setopt($ch, CURLOPT_POST, 0);
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
        //     // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            
        //     $response = curl_exec($ch);
        //     curl_close($ch);
            
        //     $json = json_decode($response);
        //     $influencer['post_feed'] = $json;
        // }
        $influencer_images = PostRelated::where('influencer_id', $influencer->id)->orderBy('comment', 'asc')->orderBy('like','asc')->limit(9)->get();
        $influencer_category = InfluencerCategory::select('category_id')->where('influencer_id', $influencer->id)->get();
        $category = Category::whereIn('id', $influencer_category->toArray())->get();
        
        return view('layouts.tools.influencer.profile.index')
            ->with('influencer_categories', $influencer_category)
            ->with('categories', $category)
            ->with('influencer_images', $influencer_images)
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
        $image = $request->file('avg_impression_image');
        $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
        $image->move('assets/images/avg_impression', $image_name);
        $data = array(
            'instagram_username' => $request->post('instagram'),
            'avg_impression' => $request->post('avg_impression'),
            'avg_impression_image' => $image_name,
        );
        $insert = array();
        
        InfluencerCategory::where('influencer_id', $influencer->id)->delete();
        foreach($request->post('interest') as $interest){
            $insert[] = array('influencer_id'=> $influencer->id, 'category_id' => $interest);
        }
        InfluencerCategory::insert($insert);
        
        Influencer::where('id', $influencer->id)->update($data);
        return redirect()->route('profile.influencer');
    }

    public function socmed(){
        $influencer = Influencer::where('user_id', auth()->user()->id)->first();
        $audience_related = DB::table('audience_related')
                     ->select(DB::raw('SUM(fans_growth) as fans_growth'))
                     ->where('influencer_id', $influencer->id)
                     ->first();
        $audience_relateds = DB::table('audience_related')
                     ->select(DB::raw('*'))
                     ->where('influencer_id', $influencer->id)
                     ->get();
        return view('layouts.tools.influencer.socmed.index')
            ->with('influencer', $influencer)
            ->with('audience_related', $audience_related)
            ->with('audience_relateds', $audience_relateds);
    }

    public function brand_read(){
        $data = array('read_at' => now());
        $modules = Module::select('id')->where('side', '=', '1')->get()->toArray();
        $brand = Brand::where('user_id', auth()->user()->id)->first();

        SystemLog::where('read_at', '=', null)->whereIn('module_id', $modules)->where('brand_id', $brand->id)->update($data);
    }

    public function influencer_read(){
        $data = array('read_at' => now());
        $modules = Module::select('id')->where('side', '=', '0')->get()->toArray();
        $influencer = Influencer::where('user_id', auth()->user()->id)->first();

        SystemLog::where('read_at', '=', null)->whereIn('module_id', $modules)->where('influencer_id', $influencer->id)->update($data);
    }
}