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
        <form class="form-horizontal" action="{{ route('admin.cms.home_content4.update', ['id' => $cms_homes->id]) }}" method="POST" enctype="multipart/form-data">
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
        	</div><!-- MANAGE CONTENT 4 -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 4</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <img src="{{ url('assets/images/cms_preview/content4.png') }}" width="100%">
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="text_content_description" class="control-label">Content 4 Description</label>
                            <textarea rows="4" class="form-control" name="text_content_description" placeholder="Content 4 Description">{{ $cms_homes_text_contents ? $cms_homes_text_contents->desc : '' }}</textarea>
                        </div>
                    </div>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.home_content4') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
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
@include('layouts.admin.pages.cms.home_content4.script')
@endsection

