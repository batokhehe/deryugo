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
        <form class="form-horizontal" action="{{ route('admin.cms.home_slider.update', ['id' => $cms_homes->id]) }}" method="POST" enctype="multipart/form-data">
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
                    <img src="{{ url('assets/images/cms_preview/slider.png') }}" width="100%">
                    <br><br>
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
                            @if (count($cms_sliders) > 0)
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
                            @else
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="slider_title[]" placeholder="Slider Title"></textarea>
                                    </td>
                                    <td> 
                                        <textarea rows="5" class="form-control" name="slider_description[]" placeholder="Slider Description"></textarea>
                                    </td>
                                    <td> 
                                        <input type="text" class="form-control" name="slider_btn_text[]" 
                                        placeholder="Slider Button Text">
                                    </td>
                                    <td> 
                                        <input type="text" class="form-control" name="slider_btn_action_url[]" placeholder="Slider Button Action URL"> 
                                    </td>
                                    <td> 
                                        <input type="file" class="form-control slider-image" name="slider_image[]" accept="image/*">
                                        <img class="slider-preview" src="#" alt="Slider Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-slider"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.home_slider') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> &nbsp;Submit</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE SLIDER -->
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.home_slider.script')
@endsection

