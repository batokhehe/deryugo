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
                <table width="100%" id="slider-table" class="table table-bordered table-responsive">
                    <thead>
                        <th>No</th>
                        <th>Slider Title</th>
                        <th>Slider Description</th>
                        <th>Slider Button Text</th>
                        <th>Slider Button Action URL</th>
                        <th>Slider Image</th>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($cms_sliders as $cms_slider)
                        <tr>
                            <td> {{ $i }} </td>
                            <td> {{ $cms_slider->title }} </td>
                            <td> {{ $cms_slider->desc }} </td>
                            <td> {{ $cms_slider->button_text }} </td>
                            <td> {{ $cms_slider->button_action_url }} </td>
                            <td width="30%"> <img src="{{ url('/assets/images/slider/' . $cms_slider->image) }}" width="100%" /> </td>
                        </tr>
                        @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>  
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="box-footer">
                    <a href="{{ route('admin.cms.home_slider') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
                </div>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- MANAGE SLIDER -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.home.script')
@endsection

