@extends('layouts.admin.master.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
	  <h1>Create Anchoring Content</h1>
	</div>
    <!-- Main content -->
    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <form class="form-horizontal" action="{{ route('admin.cms.anchoring.store') }}" method="POST" enctype="multipart/form-data">
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
                        <img src="{{ url('assets/images/cms_preview/anchoring.png') }}" width="100%">
                        <br><br>
                        <div class="form-group">
                            <label for="nama" class="control-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="control-label">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="control-label">Image</label>
                            <input type="file" class="form-control image" name="image" accept="image/*">
                            <img class="preview" src="#" alt="Image Preview" width="100%" />
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
                    <img src="{{ url('assets/images/cms_preview/anchoring_content1.png') }}" width="100%">
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="content_title" class="control-label">Content 1 Detail 1 Title</label>
                            <textarea rows="2" class="form-control" name="content_detail_title[]" placeholder="Content 1 Detail 1 Title"></textarea>
                        </div>
                    </div>
                    <a id="add-content1-detail1" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Content 1 Detail 1</a>
                    <table width="100%" id="content1-detail1-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="15%">Content 1 Detail 1 Title</th>
                            <th width="50%">Content 1 Detail 1 Description</th>
                            <th width="30%">Content 1 Detail 1 Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea rows="2" class="form-control" name="content_detail_title[0][]" placeholder="Content 1 Detail 1 Title"></textarea>
                                </td>
                                <td> 
                                    <textarea rows="5" class="form-control" name="content_detail_description[0][]" placeholder="Content 1 Detail 1 Description"></textarea>
                                </td>
                                <td> 
                                    <input type="file" class="form-control content1-detail1-image" name="content_detail_image[0][]" accept="image/*">
                                    <img class="content1-detail1-preview" src="#" alt="Content 1 Detail 1 Image Preview" width="100%" />
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="content_title" class="control-label">Content 1 Detail 2 Title</label>
                            <textarea rows="2" class="form-control" name="content_detail_title[]" placeholder="Content 1 Detail 2 Title"></textarea>
                        </div>
                    </div>
                    <a id="add-content1-detail2" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Content 1 Detail 2</a>
                    <table width="100%" id="content1-detail2-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="15%">Content 1 Detail 2 Title</th>
                            <th width="50%">Content 1 Detail 2 Description</th>
                            <th width="30%">Content 1 Detail 2 Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea rows="2" class="form-control" name="content_detail_title[1][]" placeholder="Content 1 Detail 2 Title"></textarea>
                                </td>
                                <td> 
                                    <textarea rows="5" class="form-control" name="content_detail_description[1][]" placeholder="Content 1 Detail 2 Description"></textarea>
                                </td>
                                <td> 
                                    <input type="file" class="form-control content1-detail2-image" name="content_detail_image[1][]" accept="image/*">
                                    <img class="content1-detail2-preview" src="#" alt="Content 1 Detail 2 Image Preview" width="100%" />
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="content_title" class="control-label">Content 1 Detail 3 Title</label>
                            <textarea rows="2" class="form-control" name="content_detail_title[]" placeholder="Content 1 Detail 3 Title"></textarea>
                        </div>
                    </div>
                    <a id="add-content1-detail3" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Content 1 Detail 3</a>
                    <table width="100%" id="content1-detail3-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="15%">Content 1 Detail 3 Title</th>
                            <th width="50%">Content 1 Detail 3 Description</th>
                            <th width="30%">Content 1 Detail 3 Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea rows="2" class="form-control" name="content_detail_title[2][]" placeholder="Content 1 Detail 3 Title"></textarea>
                                </td>
                                <td> 
                                    <textarea rows="5" class="form-control" name="content_detail_description[2][]" placeholder="Content 1 Detail 3 Description"></textarea>
                                </td>
                                <td> 
                                    <input type="file" class="form-control content1-detail2-image" name="content_detail_image[2][]" accept="image/*">
                                    <img class="content1-detail2-preview" src="#" alt="Content 1 Detail 3 Image Preview" width="100%" />
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 1 -->

            <!-- MANAGE CONTENT 1 -->
            <!-- <a style="margin-bottom: 10px;" id="add-anchoring-content" class="btn btn-primary input-block-level form-control"><i class="fa fa-plus"></i> &nbsp;Add More Content</a> -->
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
                            <input type="text" class="form-control" name="content_title" placeholder="Content 1 Title">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="content_description" class="control-label">Content 1 Description</label>
                            <input type="text" class="form-control" name="content_description" placeholder="Content 1 Description">
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
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 1 -->

            <!-- MANAGE CONTENT 2 -->
            <!-- <a style="margin-bottom: 10px;" id="add-anchoring-content" class="btn btn-primary input-block-level form-control"><i class="fa fa-plus"></i> &nbsp;Add More Content</a> -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 2</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <img src="{{ url('assets/images/cms_preview/content2.png') }}" width="100%">
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image_content_title" class="control-label">Content 2 Title</label>
                            <input type="text" class="form-control" name="image_content_title" placeholder="Content 2 Title">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image_content_description" class="control-label">Content 2 Description</label>
                            <input type="text" class="form-control" name="image_content_description" placeholder="Content 2 Description">
                        </div>
                    </div>
                    <a id="add-image-content-detail" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Content 2 Detail</a>
                    <table width="100%" id="image-content-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="15%">Content 2 Detail Name</th>
                            <th width="15%">Content 2 Detail Title</th>
                            <th width="40%">Content 2 Detail Description</th>
                            <th width="30%">Content 2 Detail Image</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea rows="2" class="form-control" name="image_content_detail_name[]" placeholder="Content 2 Title"></textarea>
                                </td>
                                <td>
                                    <textarea rows="2" class="form-control" name="image_content_detail_title[]" placeholder="Content 2 Title"></textarea>
                                </td>
                                <td>
                                    <textarea rows="4" class="form-control" name="image_content_detail_description[]" placeholder="Content 2 Description"></textarea>
                                </td>
                                <td> 
                                    <input type="file" class="form-control image-content-detail-image" name="image_content_detail_image[]" accept="image/*">
                                    <img class="content-detail-preview" src="#" alt="Content 2 Detail Image Preview" width="100%" />
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 2 -->

            <!-- MANAGE CONTENT 3 -->
            <!-- <a style="margin-bottom: 10px;" id="add-anchoring-content" class="btn btn-primary input-block-level form-control"><i class="fa fa-plus"></i> &nbsp;Add More Content</a> -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 3</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <img src="{{ url('assets/images/cms_preview/content3.png') }}" width="100%">
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image_content_title3" class="control-label">Content 3 Title</label>
                            <input type="text" class="form-control" name="image_content_title3" placeholder="Content 3 Title">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image_content_description3" class="control-label">Content 3 Description</label>
                            <input type="text" class="form-control" name="image_content_description3" placeholder="Content 3 Description">
                        </div>
                    </div>
                    <a id="add-image-content-detail3" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Content 3 Detail</a>
                    <table width="100%" id="image-content-table3" class="table table-bordered table-responsive">
                        <thead>
                            <th width="15%">Content 3 Detail Name</th>
                            <th width="15%">Content 3 Detail Title</th>
                            <th width="40%">Content 3 Detail Description</th>
                            <th width="30%">Content 3 Detail Image</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea rows="2" class="form-control" name="image_content_detail_name3[]" placeholder="Content 3 Name"></textarea>
                                </td>
                                <td>
                                    <textarea rows="2" class="form-control" name="image_content_detail_title3[]" placeholder="Content 3 Title"></textarea>
                                </td>
                                <td>
                                    <textarea rows="4" class="form-control" name="image_content_detail_description3[]" placeholder="Content 3 Description"></textarea>
                                </td>
                                <td>
                                    <input type="file" class="form-control image-content-detail-image" name="image_content_detail_image3[]" accept="image/*">
                                    <img class="content-detail-preview3" src="#" alt="Content 3 Detail Image Preview" width="100%" />
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 3 -->

            <!-- MANAGE CONTENT 4 -->
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
                            <input type="text" class="form-control" name="text_content_description" placeholder="Content 4 Description">
                        </div>
                    </div>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.anchoring') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
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
@include('layouts.admin.pages.cms.anchoring.script')
@endsection

