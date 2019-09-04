<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmsAnchoring;
use App\CmsAnchoringImageTile;
use App\CmsAnchoringImageTileDetail;

class CMSAnchoringContent7Controller extends Controller
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
        return view('layouts.admin.pages.cms.anchoring_content7.index')
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
        $cms_anchoring_image_tiles = CmsAnchoringImageTile::where('cms_anchoring_id', $cms_anchorings->id)->where('content', '7')->first();
        $cms_anchoring_image_tile_details = array();
        if($cms_anchoring_image_tiles){
            $cms_anchoring_image_tile_details = CmsAnchoringImageTileDetail::where('cms_anchoring_image_tile_id', $cms_anchoring_image_tiles->id)->get();
        }
       
        return view('layouts.admin.pages.cms.anchoring_content7.detail')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchoring_image_tiles', $cms_anchoring_image_tiles)
                ->with('cms_anchoring_image_tile_details', $cms_anchoring_image_tile_details);
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
        $cms_anchoring_image_tiles = CmsAnchoringImageTile::where('cms_anchoring_id', $cms_anchorings->id)->where('content', '7')->first();
        $cms_anchoring_image_tile_details = array();
        if($cms_anchoring_image_tiles){
            $cms_anchoring_image_tile_details = CmsAnchoringImageTileDetail::where('cms_anchoring_image_tile_id', $cms_anchoring_image_tiles->id)->get();
        }
       
        return view('layouts.admin.pages.cms.anchoring_content7.edit')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchoring_image_tiles', $cms_anchoring_image_tiles)
                ->with('cms_anchoring_image_tile_details', $cms_anchoring_image_tile_details);
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
        //CONTENT 7
        $image_tile_old = CmsAnchoringImageTile::select('id')->where('cms_anchoring_id', $id)->where('content', '7')->first();
        if($image_tile_old){
            $data = array(
                'title' => $request->post('image_tile_title'),
            );
            CmsAnchoringImageTile::where('cms_anchoring_id', $id)->where('content', '7')->update($data);
            $id_image_tile = $image_tile_old->id;
        } else {
            $image_tile = new CmsAnchoringImageTile([
                'title' => $request->post('image_tile_title'),
                'content' => '7',
                'cms_anchoring_id' => $id,
            ]);
            $image_tile->save();
            $id_image_tile = $image_tile->id;
        }

        $i = 0;
        $detail_image_tiles = null;
        if ($request->file('image_tile_detail_image_old')) {
            $image_tile_detail_image_old = $request->file('image_tile_detail_image_old');
            foreach ($image_tile_detail_image_old as $key => $value) {
                $detail_image_tiles[$i] = array(
                    'cms_anchoring_image_tile_id' => $id_image_tile,
                );

                if($image_tile_detail_image_old[$key]){
                    $image = $image_tile_detail_image_old[$key];
                    $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/images/anchoring_image_tile', $image_name);
                    $detail_image_tiles[$i]['image'] = $image_name;
                } else {
                    $detail_image_tiles_data_old = CmsAnchoringImageTileDetail::where('id', $image_tile_detail_id_old[$key])->first();
                    $detail_image_tiles[$i]['image'] = $detail_image_tiles_data_old->image;
                }
                $i++;
            }
        }
        
        if($request->file('image_tile_detail_image')){
            $image_tile_detail_image = $request->file('image_tile_detail_image');
            foreach ($image_tile_detail_image as $key => $value) {
                $detail_image_tiles[$i] = array(
                    'cms_anchoring_image_tile_id' => $id_image_tile,
                );

                $detail_image_tiles[$i]['image'] = null;
                if(array_key_exists($key, $image_tile_detail_image)){
                    if($image_tile_detail_image[$key]){
                        $image = $image_tile_detail_image[$key];
                        $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                        $image->move('assets/images/anchoring_image_tile', $image_name);
                        $detail_image_tiles[$i]['image'] = $image_name;
                    }
                }
                $i++;
            }   
        }
        if($image_tile_old && $detail_image_tiles){
            CmsAnchoringImageTileDetail::where('cms_anchoring_image_tile_id', $image_tile_old->id)->delete();
        }
        if($detail_image_tiles){
            $cms_tile = CmsAnchoringImageTileDetail::insert($detail_image_tiles);
        }

        return redirect()->route('admin.cms.anchoring_content7')->with('success', 'Data Added');
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
