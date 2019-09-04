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
        <form class="form-horizontal" action="{{ route('admin.cms.anchoring_content1.update', ['id' => $cms_anchorings->id]) }}" method="POST" enctype="multipart/form-data">
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
                            <p>{{ $cms_anchorings->title }}</p>
                        </div>
                    </div>
    			</div>	
    			<!-- /.box-body -->
        	</div>
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
                    <img src="{{ url('assets/images/cms_preview/anchoring_content1.png') }}" width="100%">
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="header_title" class="control-label">Content 1 Title</label>
                            <input type="text" class="form-control" name="header_title" placeholder="Content 1 Title" value="{{ $cms_anchorings_headers ? $cms_anchorings_headers->title : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="header_description" class="control-label">Content 1 Description</label>
                            <textarea class="form-control" name="header_description" placeholder="Content 1 Description">{{ $cms_anchorings_headers ? $cms_anchorings_headers->desc : '' }}</textarea>
                        </div>
                        <div class="form-group">
                            @if($cms_anchorings_headers)
                            <input type="hidden" name="header_id[]" value="{{ $cms_anchorings_headers->id }}">
                            @endif
                            <input id="header-image" type="file" class="form-control" name="header_image" accept="image/*">
                            <img id="header-preview" src="{{ $cms_anchorings_headers ? url('/assets/images/anchoring_header/' . $cms_anchorings_headers->image) : '#' }}" alt="Content 1 Image Preview" width="30%" />
                        </div>
                    </div>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.anchoring_content1') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
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
@include('layouts.admin.pages.cms.anchoring_content1.script')
@endsection

