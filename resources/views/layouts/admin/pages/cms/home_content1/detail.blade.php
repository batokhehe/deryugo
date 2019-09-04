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
                        <p>{{ $cms_homes_contents->title }}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="content_description" class="control-label">Content 1 Description</label>
                        <p>{{ $cms_homes_contents->desc }}</p>
                    </div>
                </div>
                <table width="100%" id="content-table" class="table table-bordered table-responsive">
                    <thead>
                        <th>No</th>
                        <th>Content 1 Detail Title</th>
                        <th>Content 1 Detail Description</th>
                        <th>Content 1 Detail Image</th>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($cms_homes_contents_details as $cms_homes_contents_detail)
                        <tr>
                            <td> {{ $i }} </td>
                            <td> {{ $cms_homes_contents_detail->title }} </td>
                            <td> {{ $cms_homes_contents_detail->desc }} </td>
                            <td width="30%"> <img src="{{ url('/assets/images/home_content/' . $cms_homes_contents_detail->image) }}" width="100%" /> </td>
                        </tr>
                        @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>  
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{ route('admin.cms.home') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- MANAGE CONTENT 1 -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.home.script')
@endsection

