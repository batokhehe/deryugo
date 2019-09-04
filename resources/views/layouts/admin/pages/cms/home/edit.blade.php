@extends('layouts.admin.master.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
	  <h1>Create Home Content</h1>
	</div>
    <!-- Main content -->
    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <form class="form-horizontal" action="{{ route('admin.cms.home.update', ['id' => $cms_homes->id]) }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            @if(count($errors) > 0)
            <div class="alert alert-danger" style="margin: 20px;">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="box box-primary">
        		<!-- /.box-header -->
        		<!-- form start -->
        		<div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nama" class="control-label">Title</label>
                            <p>{{ $cms_homes->title }}</p>
                        </div>
                    </div>
    			</div>	
    			<!-- /.box-body -->
        	</div>

            <!-- MANAGE SLIDER -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Slider</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <a id="add-slider" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Slider</a>
                    <table width="100%" id="slider-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="15%">Slider Title</th>
                            <th width="20%">Slider Description</th>
                            <th>Slider Button Text</th>
                            <th>Slider Button Action URL</th>
                            <th width="30%">Slider Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($cms_sliders as $cms_slider)
                            <tr>
                                <td>
                                    <textarea rows="2" class="form-control" name="slider_title_old[]" placeholder="Slider Title">{{ $cms_slider->title }}</textarea>
                                </td>
                                <td> 
                                    <textarea rows="5" class="form-control" name="slider_description_old[]" placeholder="Slider Description">{{ $cms_slider->desc }}</textarea>
                                </td>
                                <td> 
                                    <input type="text" class="form-control" name="slider_btn_text_old[]" 
                                    placeholder="Slider Button Text" value="{{ $cms_slider->button_text }}">
                                </td>
                                <td> 
                                    <input type="text" class="form-control" name="slider_btn_action_url_old[]" placeholder="Slider Button Action URL" value="{{ $cms_slider->button_action_url }}"> 
                                </td>
                                <td> 
                                    <input type="hidden" name="slider_id_old[]" value="{{ $cms_slider->id }}">
                                    <input type="file" class="form-control slider-image" name="slider_image_old[]" accept="image/*">
                                    <img class="slider-preview" src="{{ url('/assets/images/slider/' . $cms_slider->image) }}" alt="Slider Image Preview" width="100%" />
                                </td>
                                <td><a class="btn btn-sm btn-danger delete-slider"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE SLIDER -->

            <!-- MANAGE CONTENT 1 -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 1</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="content_title" class="control-label">Content 1 Title</label>
                            <input type="text" class="form-control" name="content_title" placeholder="Content 1 Title" value="{{ $cms_homes_contents->title }}">
                        </div>
                        <div class="form-group">
                            <label for="content_description" class="control-label">Content 1 Description</label>
                            <textarea class="form-control" name="content_description" placeholder="Content 1 Description">{{ $cms_homes_contents->desc }}</textarea>
                        </div>
                    </div>
                    <a id="add-content-detail" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Content 1 Detail</a>
                    <table width="100%" id="content-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="20%">Content 1 Detail Title</th>
                            <th width="50%">Content 1 Detail Description</th>
                            <th width="30%">Content 1 Detail Image</th>
                        </thead>
                        <tbody>
                            @foreach ($cms_homes_contents_details as $cms_homes_contents_detail)
                            <tr>
                                <td>
                                    <textarea rows="2" class="form-control" name="content_detail_title_old[]" placeholder="Content 1 Title">{{ $cms_homes_contents_detail->title }}</textarea>
                                </td>
                                <td>
                                    <textarea rows="4" class="form-control" name="content_detail_description_old[]" placeholder="Content 1 Description">{{ $cms_homes_contents_detail->desc }}</textarea>
                                </td>
                                <td> 
                                    <input type="hidden" name="content_detail_id_old[]" value="{{ $cms_homes_contents_detail->id }}">
                                    <input type="file" class="form-control content-detail-image" name="content_detail_image_old[]" accept="image/*">
                                    <img class="content-detail-preview" src="{{ url('/assets/images/home_content/' . $cms_homes_contents_detail->image) }}" alt="Content 1 Detail Image Preview" width="100%" />
                                </td>
                                <td><a class="btn btn-sm btn-danger delete-content-detail"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 1 -->

            <!-- MANAGE CONTENT 2 -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 2</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image_content_title" class="control-label">Content 2 Title</label>
                            <input type="text" class="form-control" name="image_content_title" placeholder="Content 2 Title" value="{{ $cms_homes_images_contents->title }}">
                        </div>
                        <div class="form-group">
                            <label for="image_content_description" class="control-label">Content 2 Description</label>
                            <textarea class="form-control" name="image_content_description" placeholder="Content 2 Description">{{ $cms_homes_images_contents->desc }}</textarea>
                        </div>
                    </div>
                    <a id="add-image-content-detail" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Content 2 Detail</a>
                    <table width="100%" id="image-content-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="15%">Content 2 Detail Name</th>
                            <th width="15%">Content 2 Detail Title</th>
                            <th width="40%">Content 2 Detail Description</th>
                            <th width="30%">Content 2 Detail Image</th>
                        </thead>
                        <tbody>
                            @foreach ($cms_homes_images_contents_details as $cms_homes_images_contents_detail)
                            <tr>
                                <td>
                                    <textarea rows="2" class="form-control" name="image_content_detail_name_old[]" placeholder="Content 2 Title">{{ $cms_homes_images_contents_detail->name }}</textarea>
                                </td>
                                <td>
                                    <textarea rows="2" class="form-control" name="image_content_detail_title_old[]" placeholder="Content 2 Title">{{ $cms_homes_images_contents_detail->title }}</textarea>
                                </td>
                                <td>
                                    <textarea rows="4" class="form-control" name="image_content_detail_description_old[]" placeholder="Content 2 Description">{{ $cms_homes_images_contents_detail->desc }}</textarea>
                                </td>
                                <td> 
                                    <input type="hidden" name="image_content_detail_id_old[]" value="{{ $cms_homes_images_contents_detail->id }}">
                                    <input type="file" class="form-control image-content-detail-image" name="image_content_detail_image_old[]" accept="image/*">
                                    <img class="image-content-detail-preview" src="{{ url('/assets/images/image_content/' . $cms_homes_images_contents_detail->image) }}" alt="Content 2 Detail Image Preview" width="100%" />
                                </td>
                                <td><a class="btn btn-sm btn-danger delete-image-content-detail"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 2 -->

            <!-- MANAGE CONTENT 3 -->
            <!-- <a style="margin-bottom: 10px;" id="add-home-content" class="btn btn-primary input-block-level form-control"><i class="fa fa-plus"></i> &nbsp;Add More Content</a> -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 3</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image_content_title3" class="control-label">Content 3 Title</label>
                            <input type="text" class="form-control" name="image_content_title3" placeholder="Content 2 Title" value="{{ $cms_homes_images_contents3->title }}">
                        </div>
                        <div class="form-group">
                            <label for="image_content_description3" class="control-label">Content 3 Description</label>
                            <textarea class="form-control" name="image_content_description3" placeholder="Content 2 Description">{{ $cms_homes_images_contents3->desc }}</textarea>
                        </div>
                    </div>
                    <a id="add-image-content-detail3" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Content 3 Detail</a>
                    <table width="100%" id="image-content-table3" class="table table-bordered table-responsive">
                        <thead>
                            <th width="15%">Content 3 Detail Name</th>
                            <th width="15%">Content 3 Detail Title</th>
                            <th width="40%">Content 3 Detail Description</th>
                            <th width="30%">Content 3 Detail Image</th>
                        </thead>
                        <tbody>
                            @foreach ($cms_homes_images_contents_details3 as $cms_homes_images_contents_detail3)
                            <tr>
                                <td>
                                    <textarea rows="2" class="form-control" name="image_content_detail_name3_old[]" placeholder="Content 3 Name">{{ $cms_homes_images_contents_detail3->name }}</textarea>
                                </td>
                                <td>
                                    <textarea rows="2" class="form-control" name="image_content_detail_title3_old[]" placeholder="Content 3 Title">{{ $cms_homes_images_contents_detail3->title }}</textarea>
                                </td>
                                <td>
                                    <textarea rows="4" class="form-control" name="image_content_detail_description3_old[]" placeholder="Content 3 Description">{{ $cms_homes_images_contents_detail3->desc }}</textarea>
                                </td>
                                <td> 
                                    <input type="hidden" name="image_content_detail_id3_old[]" value="{{ $cms_homes_images_contents_detail3->id }}">
                                    <input type="file" class="form-control image-content-detail-image3" name="image_content_detail_image3_old[]" accept="image/*">
                                    <img class="image-content-detail-preview3" src="{{ url('/assets/images/image_content/' . $cms_homes_images_contents_detail3->image) }}" alt="Content 3 Detail Image Preview" width="100%" />
                                </td>
                                <td><a class="btn btn-sm btn-danger delete-image-content-detail3"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 3 -->

            <!-- MANAGE CONTENT 4 -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 4</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="text_content_description" class="control-label">Content 4 Description</label>
                            <textarea rows="4" class="form-control" name="text_content_description" placeholder="Content 4 Description">{{ $cms_homes_text_contents->desc }}</textarea>
                        </div>
                    </div>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.home') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> &nbsp;Submit</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 4 -->
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.home.script')
@endsection

