<?php

namespace App\Http\Controllers;

use App\CmsHome;
use Illuminate\Http\Request;
use Validator;

class CMSHomeController extends Controller
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
        return view('layouts.admin.pages.cms.home.index')
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
        return view('layouts.admin.pages.cms.home.create');
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.cms.home.create')
                ->withErrors($validator)
                ->withInput();
        }

        $home = new CmsHome([
            'title' => $request->post('title'),
            'status' => '0',
        ]);

        if($home->save()){
            return redirect()->route('admin.cms.home')->with('success', 'Data Added');
        } else {
            return redirect()->route('admin.cms.home')->with('danger', 'Data Failed to Add');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CMSHome  $cMSHome
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CMSHome  $cMSHome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $cms_homes = CmsHome::where('id', $id)->first();
        // return view('layouts.admin.pages.cms.home.edit')
        //         ->with('cms_homes', $cms_homes);
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
        //
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
