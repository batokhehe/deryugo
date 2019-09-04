@extends('layouts.admin.master.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
	  <h1>Create anchoring Content</h1>
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
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="content_title" class="control-label">Content 1 Title</label>
                        <p>{{ $cms_anchorings_headers->title }}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="content_description" class="control-label">Content 1 Description</label>
                        <p>{{ $cms_anchorings_headers->desc }}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="content_description" class="control-label">Content 1 Image</label>
                        <p><img src="{{ $cms_anchorings_headers ? url('/assets/images/anchoring_header/' . $cms_anchorings_headers->image) : '#' }}" width="30%"></p>
                    </div>
                </div>
            </div>  
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{ route('admin.cms.anchoring_content1') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- MANAGE CONTENT 4 -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.anchoring.script')
@endsection

