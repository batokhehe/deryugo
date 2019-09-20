<?php

namespace App\Http\Controllers;

use App\User;
use App\Influencer;
use App\PostRelated;
use Illuminate\Http\Request;
use Validator;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ManageUserController extends Controller
{
    public function instagram()
    {
        //
        $data = User::select('*', 'users.status as user_status')->join('influencers', 'influencers.user_id', '=', 'users.id')->where('influencers.status', '!=', '1')->get();
        return view('layouts.admin.pages.user.instagram.index')
                ->with('datas', $data);
    }
    
    public function instagram_verify($id)
    {
        $update = array('status' => '1' );
        User::where('id', $id)->update($update);
        Influencer::where('user_id', $id)->update($update);

        // $endpoint = "https://api.minter.io/v1.0/reports/?";
        // $access_token = "access_token=yHmbpD3WKdYiXTiVHETepkJQGfFrmeNy";
        // $url = $endpoint . "" . $access_token;
        
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $url);
        // // SSL important
        // curl_setopt($ch, CURLOPT_POST, 0);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
        // // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        // $response = curl_exec($ch);
        // curl_close($ch);
        
        // $json = json_decode($response);
        
        // foreach($json->reports as $data){
        //     if($data->name == $user->instagram_username){
                
        //         $datas = array(
        //             'followers' => $data->data_points->total,
        //             'remember_token' => $data->report_id,
        //             'image' => $data->profile_picture,
        //             'type' => 'Nano',
        //             'engagement_rate' => $this->getPostEngagementRate($data->report_id)
        //         );
        //         Influencer::where('user_id', $id)->update($datas);
                
        //         $data = array('status' => '1');
        //         User::where('id', $id)->update($data);
        //     }
        // }
        
        return redirect()->route('admin.user.instagram');
    }
    
    public function getPostEngagementRate($report_id){
        $date_to = date("Y-m-d");
        $date_from = date("Y-m-d", strtotime("-5 months"));
        $endpoint = "https://api.minter.io/v1.0/reports/" . $report_id . "/post_engagement_rate?date_from=" . $date_from . "&to_date=" . $date_to . "&unit=month&";
        $access_token = "access_token=yHmbpD3WKdYiXTiVHETepkJQGfFrmeNy";
        $url = $endpoint . "" . $access_token;
        
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
        $postER = 0;
        
        foreach($json->data->values->Rate as $key => $value){
            if($value != null){
                if($postER > 0){
                    if($postER < $value){
                        $postER = $value;
                        // var_dump($value);
                    }
                } else {
                    $postER = $value;
                    // var_dump($value);
                }
            }
        }
        
        // return $json;
        // print_r($json->data->values->Rate);
        return $postER;
    }
}