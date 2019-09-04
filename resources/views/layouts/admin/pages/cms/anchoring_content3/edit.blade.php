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
        <form class="form-horizontal" action="{{ route('admin.cms.anchoring_content3.update', ['id' => $cms_anchorings->id]) }}" method="POST" enctype="multipart/form-data">
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

            <!-- MANAGE SLIDER -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 3 Podcast</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <a id="add-podcast" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Podcast</a>
                    <table width="100%" id="podcast-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="30%">Podcast Title</th>
                            <th width="50%">Podcast Description</th>
                            <th width="20%">Podcast Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @if (count($cms_anchorings_podcasts) > 0)
                                @foreach ($cms_anchorings_podcasts as $cms_anchorings_podcast)
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="podcast_title_old[]" placeholder="Podcast Title">{{ $cms_anchorings_podcast->title }}</textarea>
                                    </td>
                                    <td> 
                                        <textarea rows="4" class="form-control" name="podcast_description_old[]" placeholder="Podcast Description">{{ $cms_anchorings_podcast->desc }}</textarea>
                                    </td>
                                    <td> 
                                        <input type="hidden" name="podcast_id_old[]" value="{{ $cms_anchorings_podcast->id }}">
                                        <input type="file" class="form-control podcast-image" name="podcast_image_old[]" accept="image/*">
                                        <img class="podcast-preview" src="{{ url('/assets/images/podcast/' . $cms_anchorings_podcast->image) }}" alt="Podcast Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-podcast"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="podcast_title[]" placeholder="Podcast Title"></textarea>
                                    </td>
                                    <td> 
                                        <textarea rows="4" class="form-control" name="podcast_description[]" placeholder="Podcast Description"></textarea>
                                    </td>
                                    <td> 
                                        <input type="file" class="form-control podcast-image" name="podcast_image[]" accept="image/*">
                                        <img class="podcast-preview" src="#" alt="Podcast Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-podcast"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.anchoring_content3') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> &nbsp;Submit</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE SLIDER -->
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.anchoring_content3.script')
@endsection

