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

            <!-- MANAGE CONTENT 6 -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 6</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <img src="{{ url('assets/images/cms_preview/anchoring_content6.png') }}" width="100%">
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image_tile_title" class="control-label">Content 6 Title</label>
                            <p>{{ $cms_anchoring_image_tiles->title }}</p>
                        </div>
                    </div>
                    <table width="100%" id="image-tile-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="5%">No</th>
                            <th width="70%">Content 6 Detail Image</th>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach ($cms_anchoring_image_tile_details as $cms_anchoring_image_tiles_detail)
                            <tr>
                                <td>{{ $i }}</td>
                                <td><img class="image-tile-detail-preview" src="{{ url('/assets/images/anchoring_image_tile/' . $cms_anchoring_image_tiles_detail->image) }}" alt="Content 6 Detail Image Preview" width="30%" /></td>
                            </tr>
                            @php $i++ @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.anchoring_content6') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> &nbsp;Submit</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 6 -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.anchoring.script')
@endsection

