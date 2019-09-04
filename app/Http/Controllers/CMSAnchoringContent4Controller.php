<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmsAnchoring;
use App\CmsAnchoringArticle;

class CMSAnchoringContent4Controller extends Controller
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
        return view('layouts.admin.pages.cms.anchoring_content4.index')
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
        $cms_anchorings_articles = CmsAnchoringArticle::where('cms_anchoring_id', $cms_anchorings->id)->get();

        if(!$cms_anchorings_articles){
            $cms_anchorings_articles = array();
        }

        return view('layouts.admin.pages.cms.anchoring_content4.detail')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchorings_articles', $cms_anchorings_articles);
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
        $cms_anchorings_articles = CmsAnchoringArticle::where('cms_anchoring_id', $cms_anchorings->id)->get();

        if(!$cms_anchorings_articles){
            $cms_anchorings_articles = array();
        }

        return view('layouts.admin.pages.cms.anchoring_content4.edit')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_anchorings_articles', $cms_anchorings_articles);
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
        $i = 0;
        if($request->post('article_title_old')){
            $article_id_old = $request->post('article_id_old');
            $article_title_old = $request->post('article_title_old');
            $article_description_old = $request->post('article_description_old');
            $article_image_old = $request->file('article_image_old');
            foreach ($article_title_old as $key => $value) {
                $articles[$i] = array(
                    'title' => $article_title_old[$key],
                    'desc' => $article_description_old[$key],
                    'cms_anchoring_id' => $id,
                );

                if($article_image_old[$key]){
                    $image = $article_image_old[$key];
                    $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/images/article', $image_name);
                    $articles[$i]['image'] = $image_name;
                } else {
                    $article_data_old = CmsAnchoringArticle::where('id', $article_id_old[$key])->first();
                    $articles[$i]['image'] = $article_data_old->image;
                }
                $i++;
            }
        }

        if($request->post('article_title')){
            $article_title = $request->post('article_title');
            $article_description = $request->post('article_description');
            $article_image = $request->file('article_image');
            foreach ($article_title as $key => $value) {
                $articles[$i] = array(
                    'title' => $article_title[$key],
                    'desc' => $article_description[$key],
                    'cms_anchoring_id' => $id,
                );

                if($article_image[$key]){
                    $image = $article_image[$key];
                    $image_name = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();
                    $image->move('assets/images/article', $image_name);
                    $articles[$i]['image'] = $image_name;
                }
                $i++;
            }
        }
        CmsAnchoringArticle::where('cms_anchoring_id', $id)->delete();
        $cms_article = CmsAnchoringArticle::insert($articles);
        return redirect()->route('admin.cms.anchoring_content4')->with('success', 'Data Added');
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
