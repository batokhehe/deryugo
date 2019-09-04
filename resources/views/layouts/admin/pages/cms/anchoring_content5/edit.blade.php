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
        <form class="form-horizontal" action="{{ route('admin.cms.anchoring_content5.update', ['id' => $cms_anchorings->id]) }}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="image_content_title" placeholder="Content 5 Title" value="{{ $cms_anchoring_image_contents ? $cms_anchoring_image_contents->title : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="image_content_description" class="control-label">Content 5 Description</label>
                            <textarea class="form-control" name="image_content_description" placeholder="Content 5 Description">{{ $cms_anchoring_image_contents ? $cms_anchoring_image_contents->desc : '' }}</textarea>
                        </div>
                    </div>
                    <a id="add-image-content-detail" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Content 5 Detail</a>
                    <table width="100%" id="image-content-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="15%">Content 5 Detail Name</th>
                            <th width="15%">Content 5 Detail Title</th>
                            <th width="40%">Content 5 Detail Description</th>
                            <th width="30%">Content 5 Detail Image</th>
                        </thead>
                        <tbody>
                            @if(count($cms_anchoring_image_content_details) > 0)
                                @foreach ($cms_anchoring_image_content_details as $cms_anchoring_image_contents_detail)
                                <tr>
                                    <td>
                                        <textarea rows="3" class="form-control" name="image_content_detail_name_old[]" placeholder="Content 5 Title">{{ $cms_anchoring_image_contents_detail->name }}</textarea>
                                    </td>
                                    <td>
                                        <textarea rows="3" class="form-control" name="image_content_detail_title_old[]" placeholder="Content 5 Title">{{ $cms_anchoring_image_contents_detail->title }}</textarea>
                                    </td>
                                    <td>
                                        <textarea rows="4" class="form-control" name="image_content_detail_description_old[]" placeholder="Content 5 Description">{{ $cms_anchoring_image_contents_detail->desc }}</textarea>
                                    </td>
                                    <td> 
                                        <input type="hidden" name="image_content_detail_id_old[]" value="{{ $cms_anchoring_image_contents_detail->id }}">
                                        <input type="file" class="form-control image-content-detail-image" name="image_content_detail_image_old[]" accept="image/*">
                                        <img class="image-content-detail-preview" src="{{ url('/assets/images/anchoring_image_content/' . $cms_anchoring_image_contents_detail->image) }}" alt="Content 5 Detail Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-image-content-detail"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        <textarea rows="3" class="form-control" name="image_content_detail_name[]" placeholder="Content 5 Title"></textarea>
                                    </td>
                                    <td>
                                        <textarea rows="3" class="form-control" name="image_content_detail_title[]" placeholder="Content 5 Title"></textarea>
                                    </td>
                                    <td>
                                        <textarea rows="4" class="form-control" name="image_content_detail_description[]" placeholder="Content 5 Description"></textarea>
                                    </td>
                                    <td>
                                        <input type="file" class="form-control image-content-detail-image" name="image_content_detail_image[]" accept="image/*">
                                        <img class="image-content-detail-preview" src="#" alt="Content 5 Detail Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-image-content-detail"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.anchoring_content5') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> &nbsp;Submit</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 5 -->
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.anchoring_content5.script')
@endsection

