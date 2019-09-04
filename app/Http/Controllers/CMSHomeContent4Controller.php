<?php

namespace App\Http\Controllers;

use App\CmsHome;
use App\CmsHomesTextContent;
use Illuminate\Http\Request;

class CMSHomeContent4Controller extends Controller
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
        return view('layouts.admin.pages.cms.home_content4.index')
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
        return view('layouts.admin.pages.cms.home_content4.create');
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
        $cms_homes_text_contents = CmsHomesTextContent::where('cms_homes_id', $cms_homes->id)->first();
        return view('layouts.admin.pages.cms.home_content4.detail')
                ->with('cms_homes', $cms_homes)
                ->with('cms_homes_text_contents', $cms_homes_text_contents);
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
        $cms_homes_text_contents = CmsHomesTextContent::where('cms_homes_id', $cms_homes->id)->first();
        return view('layouts.admin.pages.cms.home_content4.edit')
                ->with('cms_homes', $cms_homes)
                ->with('cms_homes_text_contents', $cms_homes_text_contents);
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
        $home_text_content_old = CmsHomesTextContent::select('id')->where('cms_homes_id', $id)->first();
        if($home_text_content_old){
            $home_text_content = array(
                'desc' => $request->post('text_content_description'),
            );
            CmsHomesTextContent::where('cms_homes_id', $id)->update($home_text_content);
        } else {
            $home_text_content = new CmsHomesTextContent([
                'desc' => $request->post('text_content_description'),
                'cms_homes_id' => $id,
            ]);
            $home_text_content->save();
        }
        return redirect()->route('admin.cms.home_content4')->with('success', 'Data Added');
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
