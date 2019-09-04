<?php

namespace App\Http\Controllers;

use App\CmsAnchoring;
use App\CmsAnchoringContent;
use App\CmsAnchoringContentDetail;
use App\CmsAnchoringContentDetailItem;
use Illuminate\Http\Request;
use Validator;

class CMSAnchoringContent2Controller extends Controller
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
        return view('layouts.admin.pages.cms.anchoring_content2.index')
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
        $cms_anchorings_contents = CmsAnchoringContent::where('cms_anchoring_id', $cms_anchorings->id)->first();

        $cms_anchorings_contents_details1 = array();
        $cms_anchorings_contents_details2 = array();
        $cms_anchorings_contents_details3 = array();

        $cms_anchorings_contents_items1 = array();
        $cms_anchorings_contents_items2 = array();
        $cms_anchorings_contents_items3 = array();

        if(!$cms_anchorings_contents){
            $cms_anchorings_contents = array();
        } else {
            $cms_anchorings_contents_details1 = CmsAnchoringContentDetail::where('cms_anchoring_content_id', $cms_anchorings_contents->id)->where('content', '1')->first();
            if($cms_anchorings_contents_details1){
                $cms_anchorings_contents_items1 = CmsAnchoringContentDetailItem::where('cms_anchoring_content_detail_id', $cms_anchorings_contents_details1->id)->get();
            }
            $cms_anchorings_contents_details2 = CmsAnchoringContentDetail::where('cms_anchoring_content_id', $cms_anchorings_contents->id)->where('content', '2')->first();
            if($cms_anchorings_contents_details2){
                $cms_anchorings_contents_items2 = CmsAnchoringContentDetailItem::where('cms_anchoring_content_detail_id', $cms_anchorings_contents_details2->id)->get();
            }
            $cms_anchorings_contents_details3 = CmsAnchoringContentDetail::where('cms_anchoring_content_id', $cms_anchorings_contents->id)->where('content', '3')->first();
            if($cms_anchorings_contents_details3){
                $cms_anchorings_contents_items3 = CmsAnchoringContentDetailItem::where('cms_anchoring_content_detail_id', $cms_anchorings_contents_details3->id)->get();
            }
        }

        return view('layouts.admin.pages.cms.anchoring_content2.detail')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchorings_contents', $cms_anchorings_contents)
                ->with('cms_anchorings_contents_details1', $cms_anchorings_contents_details1)
                ->with('cms_anchorings_contents_items1', $cms_anchorings_contents_items1)
                ->with('cms_anchorings_contents_details2', $cms_anchorings_contents_details2)
                ->with('cms_anchorings_contents_items2', $cms_anchorings_contents_items2)
                ->with('cms_anchorings_contents_details3', $cms_anchorings_contents_details3)
                ->with('cms_anchorings_contents_items3', $cms_anchorings_contents_items3);
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
        $cms_anchorings_contents = CmsAnchoringContent::where('cms_anchoring_id', $cms_anchorings->id)->first();

        $cms_anchorings_contents_details1 = array();
        $cms_anchorings_contents_details2 = array();
        $cms_anchorings_contents_details3 = array();

        $cms_anchorings_contents_items1 = array();
        $cms_anchorings_contents_items2 = array();
        $cms_anchorings_contents_items3 = array();

        if(!$cms_anchorings_contents){
	        $cms_anchorings_contents = array();
        } else {
        	$cms_anchorings_contents_details1 = CmsAnchoringContentDetail::where('cms_anchoring_content_id', $cms_anchorings_contents->id)->where('content', '1')->first();
        	if($cms_anchorings_contents_details1){
        		$cms_anchorings_contents_items1 = CmsAnchoringContentDetailItem::where('cms_anchoring_content_detail_id', $cms_anchorings_contents_details1->id)->get();
        	}
            $cms_anchorings_contents_details2 = CmsAnchoringContentDetail::where('cms_anchoring_content_id', $cms_anchorings_contents->id)->where('content', '2')->first();
            if($cms_anchorings_contents_details2){
        		$cms_anchorings_contents_items2 = CmsAnchoringContentDetailItem::where('cms_anchoring_content_detail_id', $cms_anchorings_contents_details2->id)->get();
        	}
            $cms_anchorings_contents_details3 = CmsAnchoringContentDetail::where('cms_anchoring_content_id', $cms_anchorings_contents->id)->where('content', '3')->first();
            if($cms_anchorings_contents_details3){
        		$cms_anchorings_contents_items3 = CmsAnchoringContentDetailItem::where('cms_anchoring_content_detail_id', $cms_anchorings_contents_details3->id)->get();
        	}
        }

        return view('layouts.admin.pages.cms.anchoring_content2.edit')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchorings_contents', $cms_anchorings_contents)
                ->with('cms_anchorings_contents_details1', $cms_anchorings_contents_details1)
                ->with('cms_anchorings_contents_items1', $cms_anchorings_contents_items1)
                ->with('cms_anchorings_contents_details2', $cms_anchorings_contents_details2)
                ->with('cms_anchorings_contents_items2', $cms_anchorings_contents_items2)
                ->with('cms_anchorings_contents_details3', $cms_anchorings_contents_details3)
                ->with('cms_anchorings_contents_items3', $cms_anchorings_contents_items3);
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
        ///CONTENT 1
        $anchoring_content_old = CmsAnchoringContent::select('id')->where('cms_anchoring_id', $id)->first();
        if($anchoring_content_old){
            $data = array(
                'title' => $request->post('content_title'),
                'desc' => $request->post('content_description'),
                'content' => '1',
            );
            $anchoring_content = CmsAnchoringContent::where('cms_anchoring_id', $id)->update($data);
            $id_anchoring_content = $anchoring_content_old->id;
        } else {
            $anchoring_content = new CmsAnchoringContent([
                'title' => $request->post('content_title'),
                'desc' => $request->post('content_description'),
                'content' => '1',
                'cms_anchoring_id' => $id,
            ]);
            $anchoring_content->save();
            $id_anchoring_content = $anchoring_content->id;
        }

        $detail_titles = $request->post('detail_title');
        $detail_descriptions = $request->post('detail_description');
        $detail_images = $request->file('detail_image');

        foreach ($detail_titles as $key => $value) {
        	$content = $key+1;
        	$details_old = CmsAnchoringContentDetail::where('cms_anchoring_content_id', $id_anchoring_content)->where('content', $content)->first();
        	if($details_old){
                $data = array(
                    'title' => $detail_titles[$key],
                    'desc' => $detail_descriptions[$key],
                    'content' => $content,
                    'cms_anchoring_content_id' => $id_anchoring_content,
                );

                if($detail_images){
                    if(array_key_exists($key, $detail_images)){
                        if($detail_images[$key]){
                            $image = $detail_images[$key];
                            $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                            $image->move('assets/images/anchoring_content', $image_name);
                            $data['image'] = $image_name;
                        }
                    }
                }
                CmsAnchoringContentDetail::where('id', $details_old->id)->update($data);
                $id_anchoring_content_detail = $details_old->id;
        	} else {
                $image = $detail_images[$key];
                $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                $image->move('assets/images/anchoring_content', $image_name);

        		$anchoring_detail_contents = new CmsAnchoringContentDetail([
        			'title' => $detail_titles[$key],
                    'desc' => $detail_descriptions[$key],
                    'image' => $image_name,
                    'content' => $content,
                    'cms_anchoring_content_id' => $id_anchoring_content,
        		]);
                $anchoring_detail_contents->save();
                $id_anchoring_content_detail = $anchoring_detail_contents->id;
        	}

            //CONTENT DETAIL ITEMS
            $i = 0;
            $counter = $key;
            if ($request->post('item_title_old')) {
                $item_id_old = $request->post('item_id_old');
                $item_title_old = $request->post('item_title_old');
                $item_description_old = $request->post('item_description_old');
                $item_image_old = $request->file('item_image_old');
                if(array_key_exists($counter, $item_title_old)){
                    foreach ($item_title_old[$counter] as $key2 => $value2) {
                        $item_contents[$i] = array(
                            'title' => $item_title_old[$counter][$key2],
                            'desc' => $item_description_old[$counter][$key2],
                            'cms_anchoring_content_detail_id' => $id_anchoring_content_detail,
                        );

                        if($item_image_old){
                            if(array_key_exists($counter, $item_image_old)){
                                if(array_key_exists($key, $item_image_old[$counter])){
                                    if($item_image_old[$counter][$key2]){
                                        $image = $item_image_old[$counter][$key2];
                                        $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                                        $image->move('assets/images/content', $image_name);
                                        $image_size = getimagesize('assets/images/anchoring_content_item/' . $image_name);
                                        $item_contents[$i]['image'] = $image_name;
                                    } else {
                                        $detail_contents_data_old = CmsAnchoringContentDetailItem::where('id', $item_id_old[$counter][$key2])->first();
                                        $item_contents[$i]['image'] = $detail_contents_data_old->image;
                                    }
                                } else {
                                    $detail_contents_data_old = CmsAnchoringContentDetailItem::where('id', $item_id_old[$counter][$key2])->first();
                                    $item_contents[$i]['image'] = $detail_contents_data_old->image;
                                }
                            } else {
                                $detail_contents_data_old = CmsAnchoringContentDetailItem::where('id', $item_id_old[$counter][$key2])->first();
                                $item_contents[$i]['image'] = $detail_contents_data_old->image;
                            }
                        } else {
                            $detail_contents_data_old = CmsAnchoringContentDetailItem::where('id', $item_id_old[$counter][$key2])->first();
                            $item_contents[$i]['image'] = $detail_contents_data_old->image;
                        }
                        $i++;
                    }  
                }
                
            }

            if ($request->post('item_title')) {
                $item_title = $request->post('item_title');
                $item_description = $request->post('item_description');
                $item_image = $request->file('item_image');
                if(array_key_exists($counter, $item_title)){
                    foreach ($item_title[$counter] as $key2 => $value2) {
                        $item_contents[$i] = array(
                            'title' => $item_title[$counter][$key2],
                            'desc' => $item_description[$counter][$key2],
                            'cms_anchoring_content_detail_id' => $id_anchoring_content_detail,
                        );
                        if($item_image[$counter][$key2]){
                            $image = $item_image[$counter][$key2];
                            $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                            $image->move('assets/images/anchoring_content_item', $image_name);
                            $item_contents[$i]['image'] = $image_name;
                        }
                        $i++;
                    }
                }                
            }

            if($details_old){
                CmsAnchoringContentDetailItem::where('cms_anchoring_content_detail_id', $details_old->id)->delete();
            }
            $cms_item_content = CmsAnchoringContentDetailItem::insert($item_contents);
        }

        return redirect()->route('admin.cms.anchoring_content2')->with('success', 'Data Added');
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
