<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Campaign;
use App\Influencer;
use App\Categories;
use App\InfluencerCategory;
use App\CampaignInfluencer;
use App\CampaignDraft;
use App\CampaignPost;
use App\SystemLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $campaigns = Campaign::all();
        return view('layouts.tools.brand.campaign.index')
            ->with('campaigns', $campaigns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $influencers = Influencer::join('influencer_categories', 'influencers.id', '=', 'influencer_categories.influencer_id')
        //                 ->join('categories', 'categories.id', '=', 'influencer_categories.category_id')
        //                 ->select('influencers.*', 'categories.name as category_name')
        //                 ->get();
        $influencers = Influencer::all();
        $i = 0;
        foreach ($influencers as $influencer) {
            $category = InfluencerCategory::join('categories', 'categories.id', '=', 'influencer_categories.category_id')
                ->where('influencer_id', $influencer->id)->get();
                $categories[$i] = $category;
                $i++;
        }
        return view('layouts.tools.brand.campaign.create')
            ->with('influencers', $influencers)
            ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $influencer = $request->post('influencer');
        // var_dump($influencer);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'period_from' => 'required',
            'period_to' => 'required',
            'engagement_plan' => 'required',
            'budget_plan' => 'required',
            'cost_plan' => 'required',
            'influencer' => 'required',
            'content_type' => 'required',
            'post_rules' => 'required',
            'post_reference' => 'required',
            'post_reference_image' => 'required|max:1024',
            'caption' => 'required',
            'deadline_draft' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('brand.campaign.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $name = $request->post('name');
        // $period = $request->post('period');
        $start_date = $request->post('period_from');
        $end_date = $request->post('period_to');
        $engagement_plan = $request->post('engagement_plan');
        $budget_plan = $request->post('budget_plan');
        $cost_plan = $request->post('cost_plan');
        $influencer = $request->post('influencer');

        $content_type = $request->post('content_type');
        $post_frequency = '0';
        $post_rules = $request->post('post_rules');
        $post_reference = $request->post('post_reference');
        $post_reference_image = $request->file('post_reference_image');
        $caption = $request->post('caption');
        $deadline_draft = $request->post('deadline_draft');

        $image = $post_reference_image;
        $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
        $image->move('assets/images/post_reference', $image_name);

        // $temp = explode(" - ", $period);
        // $start_date = $temp[0];
        // $end_date = $temp[1];

        $user_id = Auth::user()->id;
        $brand_id = Brand::where('user_id', $user_id)->first()->id;

        $data = array(
            'name' => $name, 
            'brand_id' => $brand_id,
            'start_date' => date('y-m-d', strtotime($start_date)), 
            'end_date' => date('y-m-d', strtotime($end_date)),
            'plan_engagement' => str_replace('.', '', str_replace(' ', '', str_replace('Rp', '', $engagement_plan))), 
            'plan_budget' => str_replace('.', '', str_replace(' ', '', str_replace('Rp', '', $budget_plan))), 
            'plan_cost' => str_replace('.', '', str_replace(' ', '', str_replace('Rp', '', $cost_plan))), 
            'real_engagement' => null, 
            'real_budget' => null, 
            'real_cost' => null, 
            'content_type' => $content_type, 
            'post_frequency' => $post_frequency, 
            'post_rules' => $post_rules, 
            'post_reference' => $post_reference, 
            'post_image' => $image_name, 
            'caption' => $caption, 
            'deadline_date' => date('y-m-d', strtotime($deadline_draft)), 
            'status' => '0',
        );

        $result = Campaign::create($data);

        foreach ($influencer as $key => $value) {           
            $tmp = Influencer::where('id', $value)->first();
            $details[] = array(
                'influencer_id' => $value, 
                'campaign_id' => $result->id,
                'engagement_rate' => $tmp->engagement_rate,
                'type' => $tmp->type,
                'followers' => $tmp->followers,
                'status' => '0',
            );
        }

        CampaignInfluencer::insert($details);

        $systemLog = array(
            'module_id' => '101',
            'brand_id' => $brand_id,
            'campaign_id' => $result->id,
        );
        SystemLog::insert($systemLog);

        return redirect()->route('brand.campaign.index')->with('success', 'Data Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Campaign::where('id', $id)->first();
        // $temp = CampaignInfluencer::select('influencer_id')->where('campaign_id', $id)->get()->toArray();
        $details = Influencer::join('campaign_influencers', 'campaign_influencers.influencer_id', '=', 'influencers.id')
                        ->join('campaigns', 'campaign_influencers.campaign_id', '=', 'campaigns.id')
                        ->select('influencers.*', 'campaign_influencers.status as campaign_influencer_status')
                        ->where('campaigns.id', $id)
                        ->get();
        $i = 0;
        foreach ($details as $detail) {
            $category = InfluencerCategory::join('categories', 'categories.id', '=', 'influencer_categories.category_id')
                ->where('influencer_id', $detail->id)->get();
            $categories[$i] = $category;
            $i++;
        }

        return view('layouts.tools.brand.campaign.show')
                ->with('data', $data)
                ->with('details', $details)
                ->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function start(Request $request, $id)
    {
        $update = array('status' => '2');

        $user_id = Auth::user()->id;
        $brand_id = Brand::where('user_id', $user_id)->first()->id;

        Campaign::where('id', $id)->where('brand_id', $brand_id)->update($update);
        $systemLog = array(
            'module_id' => '102',
            'brand_id' => $brand_id,
            'campaign_id' => $id,
        );
        SystemLog::insert($systemLog);
        return redirect()->route('brand.campaign.index');
    }

    public function edit(Campaign $campaign)
    {
        //
    }

    public function draft(Request $request, $id)
    {
        //
        $campaigns = Campaign::where('id', $id)->first();
        $details = CampaignDraft::where('campaign_id', $id)->where('influencer_id', $request->get('influencer'))->get();
        return view('layouts.tools.brand.campaign.draft')
            ->with('data', $campaigns)
            ->with('details', $details)
            ->with('influencer', $request->get('influencer'));
    }

    public function post(Request $request, $id)
    {
        //
        $campaigns = Campaign::where('id', $id)->first();
        $details = CampaignPost::where('campaign_id', $id)->where('campaign_posts.influencer_id', $request->get('influencer'))
                    ->leftJoin('post_related', 'post_related.post_id', 'campaign_posts.post_id')      
                    ->orderBy('campaign_posts.id')->get();
    
        return view('layouts.tools.brand.campaign.post')
            ->with('data', $campaigns)
            ->with('details', $details)
            ->with('influencer', $request->get('influencer'));
    }

    public function process_draft(Request $request, $id)
    {
        if ($request->post('accept_draft') !== null) {
            $update = array('status' => '1');
            $module_id = '103';
        } else if ($request->post('decline_draft')  !== null) {
            $update = array('status' => '2');
            $module_id = '104';
        } else {
            //no button pressed
        }

        // print_r($update);
        // echo $id;
        // echo $request->post('influencer');
        $influencer_id = $request->post('influencer');
        $user_id = Auth::user()->id;
        $brand_id = Brand::where('user_id', $user_id)->first()->id;

        $systemLog = array(
            'module_id' => $module_id,
            'brand_id' => $brand_id,
            'influencer_id' => $influencer_id,
            'campaign_id' => $id,
        );
        SystemLog::insert($systemLog);

        if($request->post('post_image') !== null){
            foreach ($request->post('post_image') as $key => $value) {
                $data = CampaignDraft::where('campaign_id', $id)->where('influencer_id', $influencer_id)->where('id', $value)->update($update);
            }
        }

        $tmpCampaign = CampaignDraft::where('campaign_id', $id)->where('status', '!=', '1')->get()->count();
        if($tmpCampaign < 1){
            $status = array('status' => '1');
            Campaign::where('id', $id)->update($status);
        }
        
        return redirect()->route('brand.campaign.detail', ['id' => $id])->with('success', 'Data Added');
    }

    public function accept_draft($id)
    {
        //
        $update = array('status' => '2');

        $user_id = Auth::user()->id;
        $influencer_id = Influencer::where('user_id', $user_id)->first()->id;
        $data = CampaignInfluencer::where('campaign_id', $id)->where('influencer_id', $influencer_id)->update($update);
        return redirect()->route('brand.campaign.detail', ['id' => $id])->with('success', 'Data Added');
    }

    public function decline_draft($id)
    {
        //
        $update = array('status' => '3');

        $user_id = Auth::user()->id;
        $influencer_id = Influencer::where('user_id', $user_id)->first()->id;
        $data = CampaignInfluencer::where('campaign_id', $id)->where('influencer_id', $influencer_id)->update($update);
        return redirect()->route('brand.campaign.detail', ['id' => $id])->with('success', 'Data Added');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }

    public function index_influencer()
    {
        //mycampaign
        $user_id = Auth::user()->id;
        $influencer_id = Influencer::where('user_id', $user_id)->first()->id;
        $data = CampaignInfluencer::select('campaign_id')->where('status', '=', '1')->where('influencer_id', $influencer_id)->get()->toArray();
        $campaigns = Campaign::select('*', 'campaigns.name as campaign_name', 'campaigns.id as campaign_id', 'campaigns.status as campaign_status')
                                ->join('brands', 'brands.id', 'campaigns.brand_id')
                                ->whereIn('campaigns.id', $data)->get();
        return view('layouts.tools.influencer.mycampaign.index')
            ->with('campaigns', $campaigns);
    }

    public function new_campaign_influencer()
    {
        $user_id = Auth::user()->id;
        $influencer_id = Influencer::where('user_id', $user_id)->first()->id;
        $data = CampaignInfluencer::select('campaign_id')->where('status', '=', '0')->where('influencer_id', $influencer_id)->get()->toArray();
        // $campaigns = Campaign::select('*', 'campaigns.name as campaign_name', 'campaigns.id as campaign_id')
        //                         ->join('brands', 'brands.id', 'campaigns.brand_id')
        //                         ->whereIn('campaigns.id', $data)->get();
        $campaigns = Campaign::select('*', 'campaigns.name as campaign_name', 'campaigns.id as campaign_id')
                                ->join('brands', 'brands.id', 'campaigns.brand_id')
                                ->join('campaign_influencers', 'campaign_influencers.campaign_id', 'campaigns.id')
                                ->where('influencer_id', $influencer_id)->where('campaign_influencers.status', '0')->get();
        return view('layouts.tools.influencer.newcampaign.index')
            ->with('campaigns', $campaigns);
    }

    public function brief_influencer($id)
    {
        $data = Campaign::where('id', $id)->first();
        return view('layouts.tools.influencer.newcampaign.show')
            ->with('data', $data);
    }

    public function join_influencer($id)
    {
        $update = array('status' => '1');
        $user_id = Auth::user()->id;
        $influencer_id = Influencer::where('user_id', $user_id)->first()->id;
        // echo $influencer_id;
        // echo $id;
        $data = CampaignInfluencer::where('campaign_id', $id)->where('influencer_id', $influencer_id)->update($update);
        $systemLog = array(
            'module_id' => '002',
            'influencer_id' => $influencer_id,
            'campaign_id' => $id,
        );
        SystemLog::insert($systemLog);
        return redirect()->route('influencer.campaign.index')->with('success', 'Data Added');
    }

    public function snubs_influencer($id)
    {
        $update = array('status' => '9');

        $user_id = Auth::user()->id;
        $influencer_id = Influencer::where('user_id', $user_id)->first()->id;
        $data = CampaignInfluencer::where('campaign_id', $id)->where('influencer_id', $influencer_id)->update($update);
        $systemLog = array(
            'module_id' => '003',
            'influencer_id' => $influencer_id,
            'campaign_id' => $id,
        );
        SystemLog::insert($systemLog);
        return redirect()->route('influencer.newcampaign.index')->with('success', 'Data Added');
    }

    public function post_influencer($id)
    {
        $user_id = Auth::user()->id;
        $influencer_id = Influencer::where('user_id', $user_id)->first()->id;
        $campaigns = Campaign::where('id', $id)->first();
        $details = CampaignPost::where('campaign_id', $id)->where('campaign_posts.influencer_id', $influencer_id)
                            ->leftJoin('post_related', 'post_related.post_id', 'campaign_posts.post_id')      
                    ->orderBy('campaign_posts.id')->get();
        return view('layouts.tools.influencer.mycampaign.post')
            ->with('data', $campaigns)
            ->with('details', $details);
    }

    public function update_post_influencer(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $influencer_id = Influencer::where('user_id', $user_id)->first()->id;
        $posts = $request->post('post');
        foreach ($posts as $key => $value) {
            $campaign_posts[] = array(
                'post_id' => $value,
                'campaign_id' => $id,
                'influencer_id' => $influencer_id,
                'comment' => '0',
                'like' => '0',
                'engagement_rate' => '0',
                'status' => '0'
            );
        }

        // CampaignPost::where('campaign_id', $id)->delete();
        $result = CampaignPost::insert($campaign_posts);
        $systemLog = array(
            'module_id' => '005',
            'influencer_id' => $influencer_id,
            'campaign_id' => $id,
        );
        SystemLog::insert($systemLog);
        return redirect()->route('influencer.campaign.index')->with('success', 'Data Added');
    }

    public function draft_influencer($id)
    {
        $user_id = Auth::user()->id;
        $influencer_id = Influencer::where('user_id', $user_id)->first()->id;
        $campaigns = Campaign::where('id', $id)->first();
        $drafts = CampaignDraft::where('campaign_id', $id)->where('influencer_id', $influencer_id)->get();
        return view('layouts.tools.influencer.mycampaign.edit')
            ->with('data', $campaigns)
            ->with('details', $drafts);
    }

    public function update_draft_influencer(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $influencer_id = Influencer::where('user_id', $user_id)->first()->id;
        $images = $request->file('image');
        foreach ($images as $key => $value) {
            $image_name = md5($value->getClientOriginalName() . time()) . '.' . $value->getClientOriginalExtension();
            $value->move('assets/images/campaign_draft', $image_name);
            $campaign_drafts[] = array(
                'image' => $image_name,
                'campaign_id' => $id,
                'influencer_id' => $influencer_id,
                'status' => '0'
            );
        }

        CampaignDraft::where('campaign_id', $id)->delete();
        $result = CampaignDraft::insert($campaign_drafts);
        $systemLog = array(
            'module_id' => '004',
            'influencer_id' => $influencer_id,
            'campaign_id' => $id,
        );
        SystemLog::insert($systemLog);
        return redirect()->route('influencer.campaign.index')->with('success', 'Data Added');
    }

}
