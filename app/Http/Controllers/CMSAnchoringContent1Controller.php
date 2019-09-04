<?php

namespace App\Http\Controllers;

use App\CmsAnchoring;
use App\CmsAnchoringHeader;
use Illuminate\Http\Request;
use Validator;

class CMSAnchoringContent1Controller extends Controller
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
        return view('layouts.admin.pages.cms.anchoring_content1.index')
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
        $cms_anchorings = CmsAnchoring::where('id', $id)->first();
        $cms_anchorings_headers = CmsAnchoringHeader::where('cms_anchoring_id', $cms_anchorings->id)->first();
        return view('layouts.admin.pages.cms.anchoring_content1.detail')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchorings_headers', $cms_anchorings_headers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cms_anchorings = CmsAnchoring::where('id', $id)->first();
        $cms_anchorings_headers = CmsAnchoringHeader::where('cms_anchoring_id', $cms_anchorings->id)->first();
        if(!$cms_anchorings_headers){
            $cms_anchorings_headers = array();
        }

        return view('layouts.admin.pages.cms.anchoring_content1.edit')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchorings_headers', $cms_anchorings_headers);
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
        $anchoring_header_old = CmsAnchoringHeader::select('id')->where('cms_anchoring_id', $id)->first();
        //
        $validator = Validator::make($request->all(), [
            'header_title' => 'required',
            'header_description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.cms.anchoring.create')
                ->withErrors($validator)
                ->withInput();
        }

        $header_title = $request->post('header_title');
        $header_description = $request->post('header_description');
        $header_image = $request->file('header_image');
        $data = array(
        	'title' => $header_title,
        	'desc' => $header_description,
        );
        if($header_image){
            $image = $header_image;
            $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
            $image->move('assets/images/anchoring_header', $image_name);
            $image_size = getimagesize('assets/images/anchoring_header/' . $image_name);
            $data['image'] = $image_name;
            // $home_detail_contents[$i]['image_width'] = $image_size[0];
            // $home_detail_contents[$i]['image_height'] = $image_size[1];
        }
        if($anchoring_header_old){
        	$result = CmsAnchoringHeader::where('cms_anchoring_id', $id)->update($data);
        } else {
        	$data['cms_anchoring_id'] = $id;
        	$result = CmsAnchoringHeader::insert($data);
        }

        if($result){
        	return redirect()->route('admin.cms.anchoring_content1')->with('success', 'Data Added');
        } else {
        	return redirect()->route('admin.cms.anchoring_content1.create')->with('danger', 'Data Failed to Add');
        }
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
