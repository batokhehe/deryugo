@extends('layouts.admin.master.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
	  <h1>Create Home Content 1</h1>
	</div>
    <!-- Main content -->
    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <form class="form-horizontal" action="{{ route('admin.cms.home_content1.update', ['id' => $cms_homes->id]) }}" method="POST" enctype="multipart/form-data">
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
                    <img src="{{ url('assets/images/cms_preview/content1.png') }}" width="100%">
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="content_title" class="control-label">Content 1 Title</label>
                            <input type="text" class="form-control" name="content_title" placeholder="Content 1 Title" value="{{ $cms_homes_contents ? $cms_homes_contents->title : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="content_description" class="control-label">Content 1 Description</label>
                            <textarea class="form-control" name="content_description" placeholder="Content 1 Description">{{ $cms_homes_contents ? $cms_homes_contents->desc : '' }}</textarea>
                        </div>
                    </div>
                    <a id="add-content-detail" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Content 1 Detail</a>
                    <table width="100%" id="content-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="20%">Content 1 Detail Title</th>
                            <th width="50%">Content 1 Detail Description</th>
                            <th width="30%">Content 1 Detail Image</th>
                        </thead>
                        <tbody>
                            @if(count($cms_homes_contents_details) > 0)
                                @foreach ($cms_homes_contents_details as $cms_homes_contents_detail)
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="content_detail_title_old[]" placeholder="Content 1 Title">{{ $cms_homes_contents_detail->title }}</textarea>
                                    </td>
                                    <td>
                                        <textarea rows="4" class="form-control" name="content_detail_description_old[]" placeholder="Content 1 Description">{{ $cms_homes_contents_detail->desc }}</textarea>
                                    </td>
                                    <td> 
                                        <input type="hidden" name="content_detail_id_old[]" value="{{ $cms_homes_contents_detail->id }}">
                                        <input type="file" class="form-control content-detail-image" name="content_detail_image_old[]" accept="image/*">
                                        <img class="content-detail-preview" src="{{ url('/assets/images/home_content/' . $cms_homes_contents_detail->image) }}" alt="Content 1 Detail Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-content-detail"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="content_detail_title[]" placeholder="Content 1 Title"></textarea>
                                    </td>
                                    <td>
                                        <textarea rows="4" class="form-control" name="content_detail_description[]" placeholder="Content 1 Description"></textarea>
                                    </td>
                                    <td> 
                                        <input type="file" class="form-control content-detail-image" name="content_detail_image[]" accept="image/*">
                                        <img class="content-detail-preview" src="#" alt="Content 1 Detail Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-content-detail"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.home_content1') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> &nbsp;Submit</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 1 -->
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.home_content1.script')
@endsection

