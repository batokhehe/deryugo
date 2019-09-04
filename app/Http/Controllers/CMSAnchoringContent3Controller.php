<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmsAnchoring;
use App\CmsAnchoringPodcast;

class CMSAnchoringContent3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = CmsAnchoring::all();
        return view('layouts.admin.pages.cms.anchoring_content3.index')
                ->with('datas', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cms_anchorings = CmsAnchoring::where('id', $id)->first();
        $cms_anchorings_podcasts = CmsAnchoringPodcast::where('cms_anchoring_id', $cms_anchorings->id)->get();

        if(!$cms_anchorings_podcasts){
            $cms_anchorings_podcasts = array();
        }

        return view('layouts.admin.pages.cms.anchoring_content3.detail')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchorings_podcasts', $cms_anchorings_podcasts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cms_anchorings = CmsAnchoring::where('id', $id)->first();
        $cms_anchorings_podcasts = CmsAnchoringPodcast::where('cms_anchoring_id', $cms_anchorings->id)->get();

        if(!$cms_anchorings_podcasts){
	        $cms_anchorings_podcasts = array();
        }

        return view('layouts.admin.pages.cms.anchoring_content3.edit')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchorings_podcasts', $cms_anchorings_podcasts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $i = 0;
        if($request->post('podcast_title_old')){
            $podcast_id_old = $request->post('podcast_id_old');
            $podcast_title_old = $request->post('podcast_title_old');
            $podcast_description_old = $request->post('podcast_description_old');
            $podcast_image_old = $request->file('podcast_image_old');
            foreach ($podcast_title_old as $key => $value) {
                $podcasts[$i] = array(
                    'title' => $podcast_title_old[$key],
                    'desc' => $podcast_description_old[$key],
                    'cms_anchoring_id' => $id,
                );

                if($podcast_image_old[$key]){
                    $image = $podcast_image_old[$key];
                    $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/images/podcast', $image_name);
                    $podcasts[$i]['image'] = $image_name;
                } else {
                    $podcast_data_old = CmsAnchoringPodcast::where('id', $podcast_id_old[$key])->first();
                    $podcasts[$i]['image'] = $podcast_data_old->image;
                }
                $i++;
            }
        }

        if($request->post('podcast_title')){
            $podcast_title = $request->post('podcast_title');
            $podcast_description = $request->post('podcast_description');
            $podcast_image = $request->file('podcast_image');
            foreach ($podcast_title as $key => $value) {
                $podcasts[$i] = array(
                    'title' => $podcast_title[$key],
                    'desc' => $podcast_description[$key],
                    'cms_anchoring_id' => $id,
                );

                if($podcast_image[$key]){
                    $image = $podcast_image[$key];
                    $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/images/podcast', $image_name);
                    $podcasts[$i]['image'] = $image_name;
                }
                $i++;
            }
        }
        CmsAnchoringPodcast::where('cms_anchoring_id', $id)->delete();
        $cms_podcast = CmsAnchoringPodcast::insert($podcasts);
        return redirect()->route('admin.cms.anchoring_content3')->with('success', 'Data Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
