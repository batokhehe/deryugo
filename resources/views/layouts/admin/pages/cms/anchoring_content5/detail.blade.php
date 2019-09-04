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
        </div>

        <!-- MANAGE CONTENT 5 -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 5</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <img src="{{ url('assets/images/cms_preview/anchoring_content5.png') }}" width="100%">
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image_content_title" class="control-label">Content 5 Title</label>
                            <p>{{ $cms_anchoring_image_contents->title }}</p>
                        </div>
                        <div class="form-group">
                            <label for="image_content_description" class="control-label">Content 5 Description</label>
                            <p>{{ $cms_anchoring_image_contents->desc }}</p>
                        </div>
                    </div>
                    <table width="100%" id="image-content-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="15%">Content 5 Detail Name</th>
                            <th width="15%">Content 5 Detail Title</th>
                            <th width="40%">Content 5 Detail Description</th>
                            <th width="30%">Content 5 Detail Image</th>
                        </thead>
                        <tbody>
                            @foreach ($cms_anchoring_image_content_details as $cms_anchoring_image_contents_detail)
                            <tr>
                                <td>{{ $cms_anchoring_image_contents_detail->name }}</td>
                                <td>{{ $cms_anchoring_image_contents_detail->title }}</td>
                                <td>{{ $cms_anchoring_image_contents_detail->desc }}</td>
                                <td><img class="image-content-detail-preview" src="{{ url('/assets/images/anchoring_image_content/' . $cms_anchoring_image_contents_detail->image) }}" alt="Content 5 Detail Image Preview" width="100%" /></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.anchoring_content5') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 5 -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.anchoring.script')
@endsection

