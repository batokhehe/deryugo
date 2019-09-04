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
        <form class="form-horizontal" action="{{ route('admin.cms.anchoring_content4.update', ['id' => $cms_anchorings->id]) }}" method="POST" enctype="multipart/form-data">
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

            <!-- MANAGE ARTICLE -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 4 Article</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <a id="add-article" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Article</a>
                    <table width="100%" id="article-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="30%">Article Title</th>
                            <th width="50%">Article Description</th>
                            <th width="20%">Article Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @if (count($cms_anchorings_articles) > 0)
                                @foreach ($cms_anchorings_articles as $cms_anchorings_article)
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="article_title_old[]" placeholder="Article Title">{{ $cms_anchorings_article->title }}</textarea>
                                    </td>
                                    <td> 
                                        <textarea rows="4" class="form-control" name="article_description_old[]" placeholder="Article Description">{{ $cms_anchorings_article->desc }}</textarea>
                                    </td>
                                    <td> 
                                        <input type="hidden" name="article_id_old[]" value="{{ $cms_anchorings_article->id }}">
                                        <input type="file" class="form-control article-image" name="article_image_old[]" accept="image/*">
                                        <img class="article-preview" src="{{ url('/assets/images/article/' . $cms_anchorings_article->image) }}" alt="Article Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-article"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="article_title[]" placeholder="Article Title"></textarea>
                                    </td>
                                    <td> 
                                        <textarea rows="4" class="form-control" name="article_description[]" placeholder="Article Description"></textarea>
                                    </td>
                                    <td> 
                                        <input type="file" class="form-control article-image" name="article_image[]" accept="image/*">
                                        <img class="article-preview" src="#" alt="Article Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-article"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.anchoring_content4') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> &nbsp;Submit</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE ARTICLE -->
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.anchoring_content4.script')
@endsection

