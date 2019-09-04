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
        <form class="form-horizontal" action="{{ route('admin.cms.anchoring_content7.update', ['id' => $cms_anchorings->id]) }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            @if(count($errors) > 0)
            <div class="alert alert-danger" style="margin: 30px;">
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
            </div>

            <!-- MANAGE CONTENT 7 -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 7</h3>
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
                            <label for="image_tile_title" class="control-label">Content 7 Title</label>
                            <input type="text" class="form-control" name="image_tile_title" placeholder="Content 7 Title" value="{{ $cms_anchoring_image_tiles ? $cms_anchoring_image_tiles->title : '' }}">
                        </div>
                    </div>
                    <a id="add-image-tile-detail" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Content 7 Detail</a>
                    <table width="100%" id="image-tile-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="70%">Content 7 Detail Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @if(count($cms_anchoring_image_tile_details) > 0)
                                @foreach ($cms_anchoring_image_tile_details as $cms_anchoring_image_tiles_detail)
                                <tr>
                                    <td> 
                                        <input type="hidden" name="image_tile_detail_id_old[]" value="{{ $cms_anchoring_image_tiles_detail->id }}">
                                        <input type="file" class="form-control image-tile-detail-image" name="image_tile_detail_image_old[]" accept="image/*">
                                        <img class="image-tile-detail-preview" src="{{ url('/assets/images/anchoring_image_tile/' . $cms_anchoring_image_tiles_detail->image) }}" alt="Content 7 Detail Image Preview" width="30%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-image-tile-detail"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        <input type="file" class="form-control image-tile-detail-image" name="image_tile_detail_image[]" accept="image/*">
                                        <img class="image-tile-detail-preview" src="#" alt="Content 7 Detail Image Preview" width="30%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-image-tile-detail"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.anchoring_content7') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> &nbsp;Submit</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 7 -->
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.anchoring_content7.script')
@endsection

