<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\CmsHome;
use App\CmsSlider;
use App\CmsHomesContent;
use App\CmsHomesContentsDetails;
use App\CmsHomesImagesContent;
use App\CmsHomesImagesContentsDetails;
use App\CmsHomesTextContent;

use App\CmsAnchoring;
use App\CmsAnchoringHeader;
use App\CmsAnchoringContent;
use App\CmsAnchoringContentDetail;
use App\CmsAnchoringContentDetailItem;
use App\CmsAnchoringPodcast;
use App\CmsAnchoringArticle;
use App\CmsAnchoringImageContent;
use App\CmsAnchoringImageContentDetail;
use App\CmsAnchoringImageTile;
use App\CmsAnchoringImageTileDetail;

class WebpageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function interest(){
        $interest = Category::all();
        return view('layouts.web.pages.interest.index')
            ->with('interests', $interest);
    }
     
    public function index()
    {
    	$cms_homes = CmsHome::where('status', '1')->first();
    	$cms_sliders = CmsSlider::where('cms_homes_id', $cms_homes->id)->get();
    	$cms_homes_contents = CmsHomesContent::where('cms_homes_id', $cms_homes->id)->first();
    	$cms_homes_contents_details = CmsHomesContentsDetails::where('cms_homes_contents_id', $cms_homes_contents->id)->get();
    	$cms_homes_images_contents = CmsHomesImagesContent::where('cms_homes_id', $cms_homes->id)->where('content', '2')->first();
    	$cms_homes_images_contents_details = CmsHomesImagesContentsDetails::where('cms_homes_images_contents_id', $cms_homes_images_contents->id)->get();
    	$cms_homes_images_contents3 = CmsHomesImagesContent::where('cms_homes_id', $cms_homes->id)->where('content', '3')->first();
    	$cms_homes_images_contents_details3 = CmsHomesImagesContentsDetails::where('cms_homes_images_contents_id', $cms_homes_images_contents3->id)->get();
    	$cms_homes_text_contents = CmsHomesTextContent::where('cms_homes_id', $cms_homes->id)->first();
        return view('layouts.web.pages.home.index')
        		->with('cms_homes', $cms_homes)
        		->with('cms_sliders', $cms_sliders)
        		->with('cms_homes_contents', $cms_homes_contents)
        		->with('cms_homes_contents_details', $cms_homes_contents_details)
        		->with('cms_homes_images_contents', $cms_homes_images_contents)
        		->with('cms_homes_images_contents_details', $cms_homes_images_contents_details)
        		->with('cms_homes_images_contents3', $cms_homes_images_contents3)
        		->with('cms_homes_images_contents_details3', $cms_homes_images_contents_details3)
        		->with('cms_homes_text_contents', $cms_homes_text_contents);
    }
    
    

    public function anchoring()
    {
        $cms_anchorings = CmsAnchoring::where('status', '1')->first();
        $cms_headers = CmsAnchoringHeader::where('cms_anchoring_id', $cms_anchorings->id)->first();
        $cms_anchoring_contents = CmsAnchoringContent::where('cms_anchoring_id', $cms_anchorings->id)->first();

        $cms_anchoring_content_details1 = CmsAnchoringContentDetail::where('cms_anchoring_content_id', $cms_anchoring_contents->id)->where('content', '1')->first();
        $cms_anchoring_content_details1_items = CmsAnchoringContentDetailItem::where('cms_anchoring_content_detail_id', $cms_anchoring_content_details1->id)->get();

        $cms_anchoring_content_details2 = CmsAnchoringContentDetail::where('cms_anchoring_content_id', $cms_anchoring_contents->id)->where('content', '2')->first();
        $cms_anchoring_content_details2_items = CmsAnchoringContentDetailItem::where('cms_anchoring_content_detail_id', $cms_anchoring_content_details2->id)->get();

        $cms_anchoring_podcasts = CmsAnchoringPodcast::where('cms_anchoring_id', $cms_anchorings->id)->get();
        $cms_anchoring_articles = CmsAnchoringArticle::where('cms_anchoring_id', $cms_anchorings->id)->get();

        $cms_anchoring_image_contents = CmsAnchoringImageContent::where('cms_anchoring_id', $cms_anchorings->id)->first();
        $cms_anchoring_image_content_details = CmsAnchoringImageContentDetail::where('cms_anchoring_image_content_id', $cms_anchoring_image_contents->id)->get();

        $cms_anchoring_image_tiles6 = CmsAnchoringImageTile::where('cms_anchoring_id', $cms_anchorings->id)->where('content', '6')->first();
        $cms_anchoring_image_tiles6_details = CmsAnchoringImageTileDetail::where('cms_anchoring_image_tile_id', $cms_anchoring_image_tiles6->id)->get();

        $cms_anchoring_image_tiles7 = CmsAnchoringImageTile::where('cms_anchoring_id', $cms_anchorings->id)->where('content', '7')->first();
        $cms_anchoring_image_tiles7_details = CmsAnchoringImageTileDetail::where('cms_anchoring_image_tile_id', $cms_anchoring_image_tiles7->id)->get();

        return view('layouts.web.pages.anchoring.index')
                ->with('cms_anchorings', $cms_anchorings)
                ->with('cms_headers', $cms_headers)
                ->with('cms_anchoring_contents', $cms_anchoring_contents)
                ->with('cms_anchoring_content_details1', $cms_anchoring_content_details1)
                ->with('cms_anchoring_content_details1_items', $cms_anchoring_content_details1_items)
                ->with('cms_anchoring_content_details2', $cms_anchoring_content_details2)
                ->with('cms_anchoring_content_details2_items', $cms_anchoring_content_details2_items)
                ->with('cms_anchoring_podcasts', $cms_anchoring_podcasts)
                ->with('cms_anchoring_articles', $cms_anchoring_articles)
                ->with('cms_anchoring_image_contents', $cms_anchoring_image_contents)
                ->with('cms_anchoring_image_content_details', $cms_anchoring_image_content_details)
                ->with('cms_anchoring_image_tiles6', $cms_anchoring_image_tiles6)
                ->with('cms_anchoring_image_tiles6_details', $cms_anchoring_image_tiles6_details)
                ->with('cms_anchoring_image_tiles7', $cms_anchoring_image_tiles7)
                ->with('cms_anchoring_image_tiles7_details', $cms_anchoring_image_tiles7_details);
    }
}
