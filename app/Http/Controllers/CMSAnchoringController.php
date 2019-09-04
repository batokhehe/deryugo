<?php

namespace App\Http\Controllers;

use App\CmsAnchoring;
use Illuminate\Http\Request;
use Validator;

class CMSAnchoringController extends Controller
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
        return view('layouts.admin.pages.cms.anchoring.index')
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
        return view('layouts.admin.pages.cms.anchoring.create');
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
            return redirect()->route('admin.cms.anchoring.create')
                ->withErrors($validator)
                ->withInput();
        }

        $anchoring = new CmsAnchoring([
            'title' => $request->post('title'),
            'status' => '0',
        ]);

        if($anchoring->save()){
            return redirect()->route('admin.cms.anchoring')->with('success', 'Data Added');
        } else {
            return redirect()->route('admin.cms.anchoring.create')->with('danger', 'Data Failed to Add');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CMSAnchoring  $cMSAnchoring
     * @return \Illuminate\Http\Response
     */
    public function show(CMSAnchoring $cMSAnchoring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CMSAnchoring  $cMSAnchoring
     * @return \Illuminate\Http\Response
     */
    public function edit(CMSAnchoring $cMSAnchoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CMSAnchoring  $cMSAnchoring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CMSAnchoring $cMSAnchoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CMSAnchoring  $cMSAnchoring
     * @return \Illuminate\Http\Response
     */
    public function destroy(CMSAnchoring $cMSAnchoring)
    {
        //
    }
}
