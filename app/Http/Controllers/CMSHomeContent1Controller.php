<?php

namespace App\Http\Controllers;

use App\CmsHome;
use App\CmsHomesContent;
use App\CmsHomesContentsDetails;
use Illuminate\Http\Request;

class CMSHomeContent1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = CmsHome::all();
        return view('layouts.admin.pages.cms.home_content1.index')
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
        return view('layouts.admin.pages.cms.home_content1.create');
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
     * @param  \App\CMSHome  $cMSHome
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cms_homes = CmsHome::where('id', $id)->first();
        $cms_homes_contents = CmsHomesContent::where('cms_homes_id', $cms_homes->id)->first();
        $cms_homes_contents_details = CmsHomesContentsDetails::where('cms_homes_contents_id', $cms_homes_contents->id)->get();
        return view('layouts.admin.pages.cms.home_content1.detail')
                ->with('cms_homes', $cms_homes)
                ->with('cms_homes_contents', $cms_homes_contents)
                ->with('cms_homes_contents_details', $cms_homes_contents_details);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CMSHome  $cMSHome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cms_homes = CmsHome::where('id', $id)->first();
        $cms_homes_contents = CmsHomesContent::where('cms_homes_id', $cms_homes->id)->first();
        if($cms_homes_contents){
            $cms_homes_contents_details = CmsHomesContentsDetails::where('cms_homes_contents_id', $cms_homes_contents->id)->get();
        } else {
            $cms_homes_contents_details = array();
        }

        return view('layouts.admin.pages.cms.home_content1.edit')
                ->with('cms_homes', $cms_homes)
                ->with('cms_homes_contents', $cms_homes_contents)
                ->with('cms_homes_contents_details', $cms_homes_contents_details);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CMSHome  $cMSHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //CONTENT 1
        $home_content_old = CmsHomesContent::select('id')->where('cms_homes_id', $id)->first();
        if($home_content_old){
            $data = array(
                'title' => $request->post('content_title'),
                'desc' => $request->post('content_description'),
            );
            $home_content = CmsHomesContent::where('cms_homes_id', $id)->update($data);
            $id_home_content = $home_content_old->id;
        } else {
            $home_content = new CmsHomesContent([
                'title' => $request->post('content_title'),
                'desc' => $request->post('content_description'),
                'cms_homes_id' => $id,
            ]);
            $home_content->save();
            $id_home_content = $home_content->id;
        }

        $i = 0;
        if ($request->post('content_detail_title_old')) {
            $home_content_detail_id_old = $request->post('content_detail_id_old');
            $home_content_detail_title_old = $request->post('content_detail_title_old');
            $home_content_detail_description_old = $request->post('content_detail_description_old');
            $home_content_detail_image_old = $request->file('content_detail_image_old');
            foreach ($home_content_detail_title_old as $key => $value) {
                $home_detail_contents[$i] = array(
                    'title' => $home_content_detail_title_old[$key],
                    'desc' => $home_content_detail_description_old[$key],
                    'cms_homes_contents_id' => $id_home_content,
                );

                if($home_content_detail_image_old[$key]){
                    $image = $home_content_detail_image_old[$key];
                    $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/images/home_content', $image_name);
                    $image_size = getimagesize('assets/images/home_content/' . $image_name);
                    $home_detail_contents[$i]['image'] = $image_name;
                    $home_detail_contents[$i]['image_width'] = $image_size[0];
                    $home_detail_contents[$i]['image_height'] = $image_size[1];
                } else {
                    $home_detail_contents_data_old = CmsHomesContentsDetails::where('id', $home_content_detail_id_old[$key])->first();
                    $home_detail_contents[$i]['image'] = $home_detail_contents_data_old->image;
                    $home_detail_contents[$i]['image_width'] = $home_detail_contents_data_old->image_width;
                    $home_detail_contents[$i]['image_height'] = $home_detail_contents_data_old->image_height;
                }
                $i++;
            }
        }

        if ($request->post('content_detail_title')) {
            $home_content_detail_title = $request->post('content_detail_title');
            $home_content_detail_description = $request->post('content_detail_description');
            $home_content_detail_image = $request->file('content_detail_image');
            foreach ($home_content_detail_title as $key => $value) {
                $home_detail_contents[$i] = array(
                    'title' => $home_content_detail_title[$key],
                    'desc' => $home_content_detail_description[$key],
                    'cms_homes_contents_id' => $id_home_content,
                );
                if($home_content_detail_image[$key]){
                    $image = $home_content_detail_image[$key];
                    $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/images/home_content', $image_name);
                    $image_size = getimagesize('assets/images/home_content/' . $image_name);
                    $home_detail_contents[$i]['image'] = $image_name;
                    $home_detail_contents[$i]['image_width'] = $image_size[0];
                    $home_detail_contents[$i]['image_height'] = $image_size[1];
                }
                $i++;
            }
        }

        if($home_content_old){
            CmsHomesContentsDetails::whereIn('cms_homes_contents_id', $home_content_old->toArray())->delete();
        }
        $cms_home_content = CmsHomesContentsDetails::insert($home_detail_contents);

        return redirect()->route('admin.cms.home_content1')->with('success', 'Data Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CMSHome  $cMSHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(CMSHome $cMSHome)
    {
        //
    }
}
