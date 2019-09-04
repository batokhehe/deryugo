<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmsAnchoring;
use App\CmsAnchoringImageContent;
use App\CmsAnchoringImageContentDetail;


class CMSAnchoringContent5Controller extends Controller
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
        return view('layouts.admin.pages.cms.anchoring_content5.index')
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
        $cms_anchoring_image_contents = CmsAnchoringImageContent::where('cms_anchoring_id', $cms_anchorings->id)->where('content', '5')->first();
        $cms_anchoring_image_content_details = array();
        if($cms_anchoring_image_contents){
            $cms_anchoring_image_content_details = CmsAnchoringImageContentDetail::where('cms_anchoring_image_content_id', $cms_anchoring_image_contents->id)->get();
        }
       
        return view('layouts.admin.pages.cms.anchoring_content5.detail')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchoring_image_contents', $cms_anchoring_image_contents)
                ->with('cms_anchoring_image_content_details', $cms_anchoring_image_content_details);
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
        $cms_anchoring_image_contents = CmsAnchoringImageContent::where('cms_anchoring_id', $cms_anchorings->id)->where('content', '5')->first();
        $cms_anchoring_image_content_details = array();
        if($cms_anchoring_image_contents){
            $cms_anchoring_image_content_details = CmsAnchoringImageContentDetail::where('cms_anchoring_image_content_id', $cms_anchoring_image_contents->id)->get();
        }
       
        return view('layouts.admin.pages.cms.anchoring_content5.edit')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchoring_image_contents', $cms_anchoring_image_contents)
                ->with('cms_anchoring_image_content_details', $cms_anchoring_image_content_details);
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
        //CONTENT 5
        $image_content_old = CmsAnchoringImageContent::select('id')->where('cms_anchoring_id', $id)->where('content', '5')->first();
        if($image_content_old){
            $data = array(
                'title' => $request->post('image_content_title'),
                'desc' => $request->post('image_content_description'),
            );
            CmsAnchoringImageContent::where('cms_anchoring_id', $id)->where('content', '5')->update($data);
            $id_image_content = $image_content_old->id;
        } else {
            $image_content = new CmsAnchoringImageContent([
                'title' => $request->post('image_content_title'),
                'desc' => $request->post('image_content_description'),
                'content' => '5',
                'cms_anchoring_id' => $id,
            ]);
            $image_content->save();
            $id_image_content = $image_content->id;
        }

        $i = 0;
        if ($request->post('image_content_detail_title_old')) {
            $image_content_detail_id_old = $request->post('image_content_detail_id_old');
            $image_content_detail_name_old = $request->post('image_content_detail_name_old');
            $image_content_detail_title_old = $request->post('image_content_detail_title_old');
            $image_content_detail_description_old = $request->post('image_content_detail_description_old');
            $image_content_detail_image_old = $request->file('image_content_detail_image_old');
            foreach ($image_content_detail_title_old as $key => $value) {
                $detail_image_contents[$i] = array(
                    'name' => $image_content_detail_name_old[$key],
                    'title' => $image_content_detail_title_old[$key],
                    'desc' => $image_content_detail_description_old[$key],
                    'cms_anchoring_image_content_id' => $id_image_content,
                );

                if($image_content_detail_image_old[$key]){
                    $image = $image_content_detail_image_old[$key];
                    $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/images/anchoring_image_content', $image_name);
                    $detail_image_contents[$i]['image'] = $image_name;
                } else {
                    $detail_image_contents_data_old = CmsAnchoringImageContentDetail::where('id', $image_content_detail_id_old[$key])->first();
                    $detail_image_contents[$i]['image'] = $detail_image_contents_data_old->image;
                }
                $i++;
            }
        }
        
        if($request->post('image_content_detail_title')){
            $image_content_detail_name = $request->post('image_content_detail_name');
            $image_content_detail_title = $request->post('image_content_detail_title');
            $image_content_detail_description = $request->post('image_content_detail_description');
            $image_content_detail_image = $request->file('image_content_detail_image');
            foreach ($image_content_detail_title as $key => $value) {
                $detail_image_contents[$i] = array(
                    'name' => $image_content_detail_name[$key],
                    'title' => $image_content_detail_title[$key],
                    'desc' => $image_content_detail_description[$key],
                    'cms_anchoring_image_content_id' => $id_image_content,
                );

                $detail_image_contents[$i]['image'] = null;
                if(array_key_exists($key, $image_content_detail_image)){
                    if($image_content_detail_image[$key]){
                        $image = $image_content_detail_image[$key];
                        $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                        $image->move('assets/images/anchoring_image_content', $image_name);
                        $detail_image_contents[$i]['image'] = $image_name;
                    }
                }
                $i++;
            }   
        }
        if($image_content_old){
            CmsAnchoringImageContentDetail::where('cms_anchoring_image_content_id', $image_content_old->id)->delete();
        }
        $cms_content = CmsAnchoringImageContentDetail::insert($detail_image_contents);

        return redirect()->route('admin.cms.anchoring_content5')->with('success', 'Data Added');
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
