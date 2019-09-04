<?php

namespace App\Http\Controllers;

use App\CmsHome;
use App\CmsHomesImagesContent;
use App\CmsHomesImagesContentsDetails;
use Illuminate\Http\Request;

class CMSHomeContent2Controller extends Controller
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
        return view('layouts.admin.pages.cms.home_content2.index')
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
        return view('layouts.admin.pages.cms.home_content2.create');
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
        $cms_homes_images_contents = CmsHomesImagesContent::where('cms_homes_id', $cms_homes->id)->where('content', '2')->first();
        $cms_homes_images_contents_details = CmsHomesImagesContentsDetails::where('cms_homes_images_contents_id', $cms_homes_images_contents->id)->get();
        return view('layouts.admin.pages.cms.home_content2.detail')
                ->with('cms_homes', $cms_homes)
                ->with('cms_homes_images_contents', $cms_homes_images_contents)
                ->with('cms_homes_images_contents_details', $cms_homes_images_contents_details);
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
        $cms_homes_images_contents = CmsHomesImagesContent::where('cms_homes_id', $cms_homes->id)->where('content', '2')->first();
        if($cms_homes_images_contents){
            $cms_homes_images_contents_details = CmsHomesImagesContentsDetails::where('cms_homes_images_contents_id', $cms_homes_images_contents->id)->get();
         } else {
            $cms_homes_images_contents_details = array();
         }
       
        return view('layouts.admin.pages.cms.home_content2.edit')
                ->with('cms_homes', $cms_homes)
                ->with('cms_homes_images_contents', $cms_homes_images_contents)
                ->with('cms_homes_images_contents_details', $cms_homes_images_contents_details);
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
        //CONTENT 2
        $home_image_content_old = CmsHomesImagesContent::select('id')->where('cms_homes_id', $id)->where('content', '2')->first();
        if($home_image_content_old){
            $data = array(
                'title' => $request->post('image_content_title'),
                'desc' => $request->post('image_content_description'),
            );
            $home_content1_content = CmsHomesImagesContent::where('cms_homes_id', $id)->where('content', '2')->update($data);
            $id_image_content = $home_image_content_old->id;
        } else {
            $image_content = new CmsHomesImagesContent([
                'title' => $request->post('image_content_title'),
                'desc' => $request->post('image_content_description'),
                'content' => '2',
                'cms_homes_id' => $id,
            ]);
            $image_content->save();
            $id_image_content = $image_content->id;
        }

        $i = 0;
        if ($request->post('image_content_detail_title_old')) {
            $home_image_content_detail_id_old = $request->post('image_content_detail_id_old');
            $home_image_content_detail_name_old = $request->post('image_content_detail_name_old');
            $home_image_content_detail_title_old = $request->post('image_content_detail_title_old');
            $home_image_content_detail_description_old = $request->post('image_content_detail_description_old');
            $home_image_content_detail_image_old = $request->file('image_content_detail_image_old');
            foreach ($home_image_content_detail_title_old as $key => $value) {
                $home_detail_image_contents[$i] = array(
                    'name' => $home_image_content_detail_name_old[$key],
                    'title' => $home_image_content_detail_title_old[$key],
                    'desc' => $home_image_content_detail_description_old[$key],
                    'cms_homes_images_contents_id' => $id_image_content,
                );

                if($home_image_content_detail_image_old[$key]){
                    $image = $home_image_content_detail_image_old[$key];
                    $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/images/image_content', $image_name);
                    $image_size = getimagesize('assets/images/image_content/' . $image_name);
                    $home_detail_image_contents[$i]['image'] = $image_name;
                    $home_detail_image_contents[$i]['image_width'] = $image_size[0];
                    $home_detail_image_contents[$i]['image_height'] = $image_size[1];
                } else {
                    $home_detail_image_contents_data_old = CmsHomesImagesContentsDetails::where('id', $home_image_content_detail_id_old[$key])->first();
                    $home_detail_image_contents[$i]['image'] = $home_detail_image_contents_data_old->image;
                    $home_detail_image_contents[$i]['image_width'] = $home_detail_image_contents_data_old->image_width;
                    $home_detail_image_contents[$i]['image_height'] = $home_detail_image_contents_data_old->image_height;
                }
                $i++;
            }
        }
        
        if($request->post('image_content_detail_title')){
            $home_image_content_detail_name = $request->post('image_content_detail_name');
            $home_image_content_detail_title = $request->post('image_content_detail_title');
            $home_image_content_detail_description = $request->post('image_content_detail_description');
            $home_image_content_detail_image = $request->file('image_content_detail_image');
            foreach ($home_image_content_detail_title as $key => $value) {
                $home_detail_image_contents[$i] = array(
                    'name' => $home_image_content_detail_name[$key],
                    'title' => $home_image_content_detail_title[$key],
                    'desc' => $home_image_content_detail_description[$key],
                    'cms_homes_images_contents_id' => $id_image_content,
                );

                $home_detail_image_contents[$i]['image'] = null;
                $home_detail_image_contents[$i]['image_width'] = null;
                $home_detail_image_contents[$i]['image_height'] = null;
                if(array_key_exists($key, $home_image_content_detail_image)){
                    if($home_image_content_detail_image[$key]){
                        $image = $home_image_content_detail_image[$key];
                        $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                        $image->move('assets/images/image_content', $image_name);
                        $image_size = getimagesize('assets/images/image_content/' . $image_name);
                        $home_detail_image_contents[$i]['image'] = $image_name;
                        $home_detail_image_contents[$i]['image_width'] = $image_size[0];
                        $home_detail_image_contents[$i]['image_height'] = $image_size[1];
                    }
                }
                $i++;
            }   
        }
        if($home_image_content_old){
            CmsHomesImagesContentsDetails::where('cms_homes_images_contents_id', $home_image_content_old->id)->delete();
        }
        $cms_home_content = CmsHomesImagesContentsDetails::insert($home_detail_image_contents);

        return redirect()->route('admin.cms.home_content2')->with('success', 'Data Added');
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
