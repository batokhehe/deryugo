<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WebpageController@index');
Route::get('/anchoring', 'WebpageController@anchoring');
Route::get('/backup', function () { return view('layouts.web.pages.home.backup'); });
Route::get('/homecms', 'WebpageController@index');
Route::get('/interest', 'WebpageController@interest');
// Route::get('', function () { return view('layouts.web.pages.influencer.index'); });
Route::get('/article', function () { return view('layouts.web.pages.article.index'); });
Route::get('/contact', function () { return view('layouts.web.pages.contact.index'); });

Auth::routes();

//INFLUENCER
Route::prefix('influencer')->group(function() {
	//REGISTER
	Route::get('/register', 'Auth\RegisterController@indexInfluencer')->name('register.influencer');
	Route::post('/register/interest', 'Auth\RegisterController@indexInterest')->name('register.interest');
// 	Route::post('/register/create', 'Auth\RegisterController@create')->name('register.influencer.create');
	
	//LOGIN
	Route::get('/login', function () { return view('auth.logininfluencer'); })->name('login.influencer');
	
	//PROFILE
	Route::get('/profile', 'ProfileController@index')->name('profile.influencer');
	Route::get('/profile/edit', 'ProfileController@edit')->name('profile.influencer.edit');
	Route::post('/profile/update', 'ProfileController@update')->name('profile.influencer.update');

	//TOOLS
	Route::get('/tools', function () { return view('layouts.tools.influencer.home.index'); })->name('influencer.tools');
	Route::get('/tools/newcampaign', 'CampaignController@new_campaign_influencer')->name('influencer.newcampaign.index');
	Route::get('/tools/newcampaign/brief/{id}', 'CampaignController@brief_influencer')->name('influencer.campaign.brief');
	Route::get('/tools/newcampaign/join/{id}', 'CampaignController@join_influencer')->name('influencer.campaign.join');
	Route::get('/tools/newcampaign/snubs/{id}', 'CampaignController@snubs_influencer')->name('influencer.campaign.snubs');
	Route::get('/tools/mycampaign', 'CampaignController@index_influencer')->name('influencer.campaign.index');
	Route::get('/tools/mycampaign/draft/{id}', 'CampaignController@draft_influencer')->name('influencer.campaign.draft');
	Route::post('/tools/mycampaign/draft/update/{id}', 'CampaignController@update_draft_influencer')->name('influencer.campaign.update');
	Route::get('/tools/socmed', function () { return view('layouts.tools.influencer.socmed.index'); });
});

//BRAND
Route::prefix('brand')->group(function() {
	//REGISTER
	Route::get('/register', function () { return view('auth.registerbrand'); });
	Route::post('/register/create', 'Auth\RegisterController@create')->name('register.brand.create');

	//TOOLS
	Route::get('/tools', function () { return view('layouts.tools.brand.home.index'); });
	Route::get('/tools/newcampaign', 'CampaignController@create')->name('brand.campaign.create');
	Route::post('/tools/newcampaign/store', 'CampaignController@store')->name('brand.campaign.store');
	Route::get('/tools/mycampaign', 'CampaignController@index')->name('brand.campaign.index');
	Route::get('/tools/mycampaign/detail/{id}', 'CampaignController@show')->name('brand.campaign.detail');
	Route::get('/tools/mycampaign/detail/draft/{id}', 'CampaignController@draft')->name('brand.campaign.draft');
	Route::post('/tools/mycampaign/detail/draft/process/{id}', 'CampaignController@process_draft')->name('brand.campaign.process_draft');
// 	Route::get('/tools/mycampaign/detail/draft/accept/{id}', 'CampaignController@accept_draft')->name('brand.campaign.accept_draft');
// 	Route::get('/tools/mycampaign/detail/draft/decline/{id}', 'CampaignController@decline_draft')->name('brand.campaign.decline_draft');
	Route::get('/tools/socmed', function () { return view('layouts.tools.brand.socmed.index'); });
});

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	//CMS HOME
	Route::get('/cms/cms_home', 'CMSHomeController@index')->name('admin.cms.home');
	Route::get('/cms/cms_home/create', 'CMSHomeController@create')->name('admin.cms.home.create');
	Route::post('/cms/cms_home/store', 'CMSHomeController@store')->name('admin.cms.home.store');
	Route::get('/cms/cms_home/show/{id}', 'CMSHomeController@show')->name('admin.cms.home.show');
	Route::get('/cms/cms_home/edit/{id}', 'CMSHomeController@edit')->name('admin.cms.home.edit');
	Route::post('/cms/cms_home/update/{id}', 'CMSHomeController@update')->name('admin.cms.home.update');
	Route::post('/cms/cms_home/delete/{id}', 'CMSHomeController@delete')->name('admin.cms.home.delete');

	//CMS HOME SLIDER
	Route::get('/cms/cms_home_slider', 'CMSHomeSliderController@index')->name('admin.cms.home_slider');
	Route::get('/cms/cms_hom_slidere/create', 'CMSHomeSliderController@create')->name('admin.cms.home_slider.create');
	Route::post('/cms/cms_home_slider/store', 'CMSHomeSliderController@store')->name('admin.cms.home_slider.store');
	Route::get('/cms/cms_home_slider/show/{id}', 'CMSHomeSliderController@show')->name('admin.cms.home_slider.show');
	Route::get('/cms/cms_home_slider/edit/{id}', 'CMSHomeSliderController@edit')->name('admin.cms.home_slider.edit');
	Route::post('/cms/cms_home_slider/update/{id}', 'CMSHomeSliderController@update')->name('admin.cms.home_slider.update');
	Route::post('/cms/cms_home_slider/delete/{id}', 'CMSHomeSliderController@delete')->name('admin.cms.home_slider.delete');

	//CMS HOME CONTENT1
	Route::get('/cms/cms_home_content1', 'CMSHomeContent1Controller@index')->name('admin.cms.home_content1');
	// Route::get('/cms/cms_hom_content1e/create', 'CMSHomeContent1Controller@create')->name('admin.cms.home_content1.create');
	Route::post('/cms/cms_home_content1/store', 'CMSHomeContent1Controller@store')->name('admin.cms.home_content1.store');
	Route::get('/cms/cms_home_content1/show/{id}', 'CMSHomeContent1Controller@show')->name('admin.cms.home_content1.show');
	Route::get('/cms/cms_home_content1/edit/{id}', 'CMSHomeContent1Controller@edit')->name('admin.cms.home_content1.edit');
	Route::post('/cms/cms_home_content1/update/{id}', 'CMSHomeContent1Controller@update')->name('admin.cms.home_content1.update');
	Route::post('/cms/cms_home_content1/delete/{id}', 'CMSHomeContent1Controller@delete')->name('admin.cms.home_content1.delete');

	//CMS HOME CONTENT2
	Route::get('/cms/cms_home_content2', 'CMSHomeContent2Controller@index')->name('admin.cms.home_content2');
	Route::get('/cms/cms_hom_content2e/create', 'CMSHomeContent2Controller@create')->name('admin.cms.home_content2.create');
	Route::post('/cms/cms_home_content2/store', 'CMSHomeContent2Controller@store')->name('admin.cms.home_content2.store');
	Route::get('/cms/cms_home_content2/show/{id}', 'CMSHomeContent2Controller@show')->name('admin.cms.home_content2.show');
	Route::get('/cms/cms_home_content2/edit/{id}', 'CMSHomeContent2Controller@edit')->name('admin.cms.home_content2.edit');
	Route::post('/cms/cms_home_content2/update/{id}', 'CMSHomeContent2Controller@update')->name('admin.cms.home_content2.update');
	Route::post('/cms/cms_home_content2/delete/{id}', 'CMSHomeContent2Controller@delete')->name('admin.cms.home_content2.delete');

	//CMS HOME CONTENT3
	Route::get('/cms/cms_home_content3', 'CMSHomeContent3Controller@index')->name('admin.cms.home_content3');
	Route::get('/cms/cms_hom_content3e/create', 'CMSHomeContent3Controller@create')->name('admin.cms.home_content3.create');
	Route::post('/cms/cms_home_content3/store', 'CMSHomeContent3Controller@store')->name('admin.cms.home_content3.store');
	Route::get('/cms/cms_home_content3/show/{id}', 'CMSHomeContent3Controller@show')->name('admin.cms.home_content3.show');
	Route::get('/cms/cms_home_content3/edit/{id}', 'CMSHomeContent3Controller@edit')->name('admin.cms.home_content3.edit');
	Route::post('/cms/cms_home_content3/update/{id}', 'CMSHomeContent3Controller@update')->name('admin.cms.home_content3.update');
	Route::post('/cms/cms_home_content3/delete/{id}', 'CMSHomeContent3Controller@delete')->name('admin.cms.home_content3.delete');

	//CMS HOME CONTENT4
	Route::get('/cms/cms_home_content4', 'CMSHomeContent4Controller@index')->name('admin.cms.home_content4');
	Route::get('/cms/cms_hom_content4e/create', 'CMSHomeContent4Controller@create')->name('admin.cms.home_content4.create');
	Route::post('/cms/cms_home_content4/store', 'CMSHomeContent4Controller@store')->name('admin.cms.home_content4.store');
	Route::get('/cms/cms_home_content4/show/{id}', 'CMSHomeContent4Controller@show')->name('admin.cms.home_content4.show');
	Route::get('/cms/cms_home_content4/edit/{id}', 'CMSHomeContent4Controller@edit')->name('admin.cms.home_content4.edit');
	Route::post('/cms/cms_home_content4/update/{id}', 'CMSHomeContent4Controller@update')->name('admin.cms.home_content4.update');
	Route::post('/cms/cms_home_content4/delete/{id}', 'CMSHomeContent4Controller@delete')->name('admin.cms.home_content4.delete');

	//CMS ANCHORING
	Route::get('/cms/cms_anchoring', 'CMSAnchoringController@index')->name('admin.cms.anchoring');
	Route::get('/cms/cms_anchoring/create', 'CMSAnchoringController@create')->name('admin.cms.anchoring.create');
	Route::post('/cms/cms_anchoring/store', 'CMSAnchoringController@store')->name('admin.cms.anchoring.store');
	Route::get('/cms/cms_anchoring/show/{id}', 'CMSAnchoringController@show')->name('admin.cms.anchoring.show');
	Route::get('/cms/cms_anchoring/edit/{id}', 'CMSAnchoringController@edit')->name('admin.cms.anchoring.edit');
	Route::post('/cms/cms_anchoring/update/{id}', 'CMSAnchoringController@update')->name('admin.cms.anchoring.update');
	Route::post('/cms/cms_anchoring/delete/{id}', 'CMSAnchoringController@delete')->name('admin.cms.anchoring.delete');

	//CMS ANCHORING CONTENT1
	Route::get('/cms/cms_anchoring_content1', 'CMSAnchoringContent1Controller@index')->name('admin.cms.anchoring_content1');
	Route::get('/cms/cms_hom_content1e/create', 'CMSAnchoringContent1Controller@create')->name('admin.cms.anchoring_content1.create');
	Route::post('/cms/cms_anchoring_content1/store', 'CMSAnchoringContent1Controller@store')->name('admin.cms.anchoring_content1.store');
	Route::get('/cms/cms_anchoring_content1/show/{id}', 'CMSAnchoringContent1Controller@show')->name('admin.cms.anchoring_content1.show');
	Route::get('/cms/cms_anchoring_content1/edit/{id}', 'CMSAnchoringContent1Controller@edit')->name('admin.cms.anchoring_content1.edit');
	Route::post('/cms/cms_anchoring_content1/update/{id}', 'CMSAnchoringContent1Controller@update')->name('admin.cms.anchoring_content1.update');
	Route::post('/cms/cms_anchoring_content1/delete/{id}', 'CMSAnchoringContent1Controller@delete')->name('admin.cms.anchoring_content1.delete');

	//CMS ANCHORING CONTENT2
	Route::get('/cms/cms_anchoring_content2', 'CMSAnchoringContent2Controller@index')->name('admin.cms.anchoring_content2');
	Route::get('/cms/cms_hom_content2e/create', 'CMSAnchoringContent2Controller@create')->name('admin.cms.anchoring_content2.create');
	Route::post('/cms/cms_anchoring_content2/store', 'CMSAnchoringContent2Controller@store')->name('admin.cms.anchoring_content2.store');
	Route::get('/cms/cms_anchoring_content2/show/{id}', 'CMSAnchoringContent2Controller@show')->name('admin.cms.anchoring_content2.show');
	Route::get('/cms/cms_anchoring_content2/edit/{id}', 'CMSAnchoringContent2Controller@edit')->name('admin.cms.anchoring_content2.edit');
	Route::post('/cms/cms_anchoring_content2/update/{id}', 'CMSAnchoringContent2Controller@update')->name('admin.cms.anchoring_content2.update');
	Route::post('/cms/cms_anchoring_content2/delete/{id}', 'CMSAnchoringContent2Controller@delete')->name('admin.cms.anchoring_content2.delete');

	//CMS ANCHORING CONTENT3
	Route::get('/cms/cms_anchoring_content3', 'CMSAnchoringContent3Controller@index')->name('admin.cms.anchoring_content3');
	Route::get('/cms/cms_hom_content3e/create', 'CMSAnchoringContent3Controller@create')->name('admin.cms.anchoring_content3.create');
	Route::post('/cms/cms_anchoring_content3/store', 'CMSAnchoringContent3Controller@store')->name('admin.cms.anchoring_content3.store');
	Route::get('/cms/cms_anchoring_content3/show/{id}', 'CMSAnchoringContent3Controller@show')->name('admin.cms.anchoring_content3.show');
	Route::get('/cms/cms_anchoring_content3/edit/{id}', 'CMSAnchoringContent3Controller@edit')->name('admin.cms.anchoring_content3.edit');
	Route::post('/cms/cms_anchoring_content3/update/{id}', 'CMSAnchoringContent3Controller@update')->name('admin.cms.anchoring_content3.update');
	Route::post('/cms/cms_anchoring_content3/delete/{id}', 'CMSAnchoringContent3Controller@delete')->name('admin.cms.anchoring_content3.delete');

	//CMS ANCHORING CONTENT4
	Route::get('/cms/cms_anchoring_content4', 'CMSAnchoringContent4Controller@index')->name('admin.cms.anchoring_content4');
	Route::get('/cms/cms_hom_content4e/create', 'CMSAnchoringContent4Controller@create')->name('admin.cms.anchoring_content4.create');
	Route::post('/cms/cms_anchoring_content4/store', 'CMSAnchoringContent4Controller@store')->name('admin.cms.anchoring_content4.store');
	Route::get('/cms/cms_anchoring_content4/show/{id}', 'CMSAnchoringContent4Controller@show')->name('admin.cms.anchoring_content4.show');
	Route::get('/cms/cms_anchoring_content4/edit/{id}', 'CMSAnchoringContent4Controller@edit')->name('admin.cms.anchoring_content4.edit');
	Route::post('/cms/cms_anchoring_content4/update/{id}', 'CMSAnchoringContent4Controller@update')->name('admin.cms.anchoring_content4.update');
	Route::post('/cms/cms_anchoring_content4/delete/{id}', 'CMSAnchoringContent4Controller@delete')->name('admin.cms.anchoring_content4.delete');

	//CMS ANCHORING CONTENT5
	Route::get('/cms/cms_anchoring_content5', 'CMSAnchoringContent5Controller@index')->name('admin.cms.anchoring_content5');
	Route::get('/cms/cms_hom_content5e/create', 'CMSAnchoringContent5Controller@create')->name('admin.cms.anchoring_content5.create');
	Route::post('/cms/cms_anchoring_content5/store', 'CMSAnchoringContent5Controller@store')->name('admin.cms.anchoring_content5.store');
	Route::get('/cms/cms_anchoring_content5/show/{id}', 'CMSAnchoringContent5Controller@show')->name('admin.cms.anchoring_content5.show');
	Route::get('/cms/cms_anchoring_content5/edit/{id}', 'CMSAnchoringContent5Controller@edit')->name('admin.cms.anchoring_content5.edit');
	Route::post('/cms/cms_anchoring_content5/update/{id}', 'CMSAnchoringContent5Controller@update')->name('admin.cms.anchoring_content5.update');
	Route::post('/cms/cms_anchoring_content5/delete/{id}', 'CMSAnchoringContent5Controller@delete')->name('admin.cms.anchoring_content5.delete');

	//CMS ANCHORING CONTENT6
	Route::get('/cms/cms_anchoring_content6', 'CMSAnchoringContent6Controller@index')->name('admin.cms.anchoring_content6');
	Route::get('/cms/cms_hom_content6e/create', 'CMSAnchoringContent6Controller@create')->name('admin.cms.anchoring_content6.create');
	Route::post('/cms/cms_anchoring_content6/store', 'CMSAnchoringContent6Controller@store')->name('admin.cms.anchoring_content6.store');
	Route::get('/cms/cms_anchoring_content6/show/{id}', 'CMSAnchoringContent6Controller@show')->name('admin.cms.anchoring_content6.show');
	Route::get('/cms/cms_anchoring_content6/edit/{id}', 'CMSAnchoringContent6Controller@edit')->name('admin.cms.anchoring_content6.edit');
	Route::post('/cms/cms_anchoring_content6/update/{id}', 'CMSAnchoringContent6Controller@update')->name('admin.cms.anchoring_content6.update');
	Route::post('/cms/cms_anchoring_content6/delete/{id}', 'CMSAnchoringContent6Controller@delete')->name('admin.cms.anchoring_content6.delete');

	//CMS ANCHORING CONTENT7
	Route::get('/cms/cms_anchoring_content7', 'CMSAnchoringContent7Controller@index')->name('admin.cms.anchoring_content7');
	Route::get('/cms/cms_hom_content7e/create', 'CMSAnchoringContent7Controller@create')->name('admin.cms.anchoring_content7.create');
	Route::post('/cms/cms_anchoring_content7/store', 'CMSAnchoringContent7Controller@store')->name('admin.cms.anchoring_content7.store');
	Route::get('/cms/cms_anchoring_content7/show/{id}', 'CMSAnchoringContent7Controller@show')->name('admin.cms.anchoring_content7.show');
	Route::get('/cms/cms_anchoring_content7/edit/{id}', 'CMSAnchoringContent7Controller@edit')->name('admin.cms.anchoring_content7.edit');
	Route::post('/cms/cms_anchoring_content7/update/{id}', 'CMSAnchoringContent7Controller@update')->name('admin.cms.anchoring_content7.update');
	Route::post('/cms/cms_anchoring_content7/delete/{id}', 'CMSAnchoringContent7Controller@delete')->name('admin.cms.anchoring_content7.delete');
	
	//USER
	Route::get('/user/instagram', 'ManageUserController@instagram')->name('admin.user.instagram');
	Route::get('/user/instagram/verify/{id}', 'ManageUserController@instagram_verify')->name('admin.user.instagram.verify');
});
