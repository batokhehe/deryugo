<?php

namespace App\Http\Controllers;

use App\CmsHome;
use App\CmsSlider;
use Illuminate\Http\Request;

class CMSHomeSliderController extends Controller
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
        return view('layouts.admin.pages.cms.home_slider.index')
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
        return view('layouts.admin.pages.cms.home_slider.create');
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

        // 'slider_title' => 'required',
        // 'slider_description' => 'required',
        // 'slider_btn_text' => 'required',
        // 'slider_btn_action_url' => 'required',
        // 'slider_image' => 'required',

        if ($validator->fails()) {
            return redirect()->route('admin.cms.home_slider.create')
                ->withErrors($validator)
                ->withInput();
        }

        $home = new CmsHome([
            'title' => $request->post('title'),
            'status' => '0',
        ]);

        if($home->save()){
            // echo $request->post('title') . '<br>';
            $slider_title = $request->post('slider_title');
            $slider_description = $request->post('slider_description');
            $slider_btn_text = $request->post('slider_btn_text');
            $slider_btn_action_url = $request->post('slider_btn_action_url');
            $slider_image = $request->file('slider_image');
            $i = 0;
            foreach ($slider_title as $key => $value) {
                // echo $slider_title[$key] . '<br>';
                // echo $slider_description[$key] . '<br>';
                // echo $slider_btn_text[$key] . '<br>';
                // echo $slider_btn_action_url[$key] . '<br>';
                // echo $image_name . '<br>';
                // echo $home->id . '<br>';
                $image = $slider_image[$key];
                $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                $image->move('assets/images/slider', $image_name);
                $image_size = getimagesize('assets/images/slider/' . $image_name);

                $sliders[$i] = array(
                    'title' => $slider_title[$key],
                    'desc' => $slider_description[$key],
                    'button_text' => $slider_btn_text[$key],
                    'button_action_url' => $slider_btn_action_url[$key],
                    'image' => $image_name,
                    'cms_homes_id' => $home->id,
                    'image_width' => $image_size[0],
                    'image_height' => $image_size[1],
                );
                $i++;
            }
            $cms_slider = CmsSlider::insert($sliders);
        }

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
        $cms_homes = CmsHome::where('id', $id)->first();
        $cms_sliders = CmsSlider::where('cms_homes_id', $cms_homes->id)->get();
        return view('layouts.admin.pages.cms.home_slider.detail')
                ->with('cms_homes', $cms_homes)
                ->with('cms_sliders', $cms_sliders);
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
        $cms_sliders = CmsSlider::where('cms_homes_id', $cms_homes->id)->get();
        return view('layouts.admin.pages.cms.home_slider.edit')
                ->with('cms_homes', $cms_homes)
                ->with('cms_sliders', $cms_sliders);
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
        //SLIDER
        $i = 0;
        if($request->post('slider_title_old')){
            $slider_id_old = $request->post('slider_id_old');
            $slider_title_old = $request->post('slider_title_old');
            $slider_description_old = $request->post('slider_description_old');
            $slider_btn_text_old = $request->post('slider_btn_text_old');
            $slider_btn_action_url_old = $request->post('slider_btn_action_url_old');
            $slider_image_old = $request->file('slider_image_old');
            foreach ($slider_title_old as $key => $value) {
                $sliders[$i] = array(
                    'title' => $slider_title_old[$key],
                    'desc' => $slider_description_old[$key],
                    'button_text' => $slider_btn_text_old[$key],
                    'button_action_url' => $slider_btn_action_url_old[$key],
                    'cms_homes_id' => $id,
                );

                if($slider_image_old[$key]){
                    $image = $slider_image_old[$key];
                    $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/images/slider', $image_name);
                    $image_size = getimagesize('assets/images/slider/' . $image_name);
                    $sliders[$i]['image'] = $image_name;
                    $sliders[$i]['image_width'] = $image_size[0];
                    $sliders[$i]['image_height'] = $image_size[1];
                } else {
                    $slider_data_old = CmsSlider::where('id', $slider_id_old[$key])->first();
                    $sliders[$i]['image'] = $slider_data_old->image;
                    $sliders[$i]['image_width'] = $slider_data_old->image_width;
                    $sliders[$i]['image_height'] = $slider_data_old->image_height;
                }
                $i++;
            }
        }

        if($request->post('slider_title')){
            $slider_title = $request->post('slider_title');
            $slider_description = $request->post('slider_description');
            $slider_btn_text = $request->post('slider_btn_text');
            $slider_btn_action_url = $request->post('slider_btn_action_url');
            $slider_image = $request->file('slider_image');
            foreach ($slider_title as $key => $value) {
                $sliders[$i] = array(
                    'title' => $slider_title[$key],
                    'desc' => $slider_description[$key],
                    'button_text' => $slider_btn_text[$key],
                    'button_action_url' => $slider_btn_action_url[$key],
                    'cms_homes_id' => $id,
                );

                if($slider_image[$key]){
                    $image = $slider_image[$key];
                    $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/images/slider', $image_name);
                    $image_size = getimagesize('assets/images/slider/' . $image_name);
                    $sliders[$i]['image'] = $image_name;
                    $sliders[$i]['image_width'] = $image_size[0];
                    $sliders[$i]['image_height'] = $image_size[1];
                }
                $i++;
            }
        }
        CmsSlider::where('cms_homes_id', $id)->delete();
        $cms_slider = CmsSlider::insert($sliders);
        return redirect()->route('admin.cms.home_slider')->with('success', 'Data Added');
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
