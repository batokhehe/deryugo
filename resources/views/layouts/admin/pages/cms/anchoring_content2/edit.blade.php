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
        <form class="form-horizontal" action="{{ route('admin.cms.anchoring_content2.update', ['id' => $cms_anchorings->id]) }}" method="POST" enctype="multipart/form-data">
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
            <!-- MANAGE CONTENT 2 -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Content 2</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <img src="{{ url('assets/images/cms_preview/anchoring_content2.png') }}" width="100%">
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="header_title" class="control-label">Content 2 Title</label>
                            <input type="text" class="form-control" name="content_title" placeholder="Content 2 Title" value="{{ $cms_anchorings_contents ? $cms_anchorings_contents->title : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="header_description" class="control-label">Content 2 Description</label>
                            <textarea class="form-control" name="content_description" placeholder="Content 2 Description">{{ $cms_anchorings_contents ? $cms_anchorings_contents->desc : '' }}</textarea>
                        </div>
                    </div>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE CONTENT 2 -->

            <!-- MANAGE DETAIL 1 -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Detail 1</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="detail_title" class="control-label">Detail 1 Title</label>
                            <input type="text" class="form-control" name="detail_title[0]" placeholder="Detail 1 Title" value="{{ $cms_anchorings_contents_details1 ? $cms_anchorings_contents_details1->title : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="detail_description" class="control-label">Detail 1 Description</label>
                            <textarea class="form-control" name="detail_description[0]" placeholder="Detail 1 Description">{{ $cms_anchorings_contents_details1 ? $cms_anchorings_contents_details1->desc : '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="detail_image" class="control-label">Detail 1 Image</label>
                            @if($cms_anchorings_contents_details1)
                            <input type="hidden" name="detail_id[0]" value="{{ $cms_anchorings_contents_details1->id }}">
                            @endif
                            <input id="detail1-image" type="file" class="form-control" name="detail_image[0]" accept="image/*">
                            <img id="detail1-preview" src="{{ $cms_anchorings_contents_details1 ? url('/assets/images/anchoring_content/' . $cms_anchorings_contents_details1->image) : '#' }}" alt="Detail 1 Image Preview" width="30%" />
                        </div>
                    </div>
                    <a id="add-detail1-item" class="btn btn-primary pull-right" style="margin-bottom: 10px"><i class="fa fa-plus"></i> &nbsp;Add More Detail 1 Item</a>
                    <table width="100%" id="detail1-item-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="20%">Content 2 Detail 1 Item Title</th>
                            <th width="50%">Content 2 Detail 1 Item Description</th>
                            <th width="30%">Content 2 Detail 1 Item Image</th>
                        </thead>
                        <tbody>
                            @if (count($cms_anchorings_contents_items1) > 0)
                                @foreach ($cms_anchorings_contents_items1 as $cms_anchorings_contents_item1)
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="item_title_old[0][]" placeholder="Detail 1 Item Title">{{ $cms_anchorings_contents_item1->title }}</textarea>
                                    </td>
                                    <td>
                                        <textarea rows="4" class="form-control" name="item_description_old[0][]" placeholder="Detail 1 Item Description">{{ $cms_anchorings_contents_item1->desc }}</textarea>
                                    </td>
                                    <td> 
                                        <input type="hidden" name="item_id_old[0][]" value="{{ $cms_anchorings_contents_item1->id }}">
                                        <input type="file" class="form-control detail1-item-image" name="item_image_old[0][]" accept="image/*">
                                        <img class="content-detail-preview" src="{{ url('/assets/images/anchoring_content_item/' . $cms_anchorings_contents_item1->image) }}" alt="Content 2 Detail Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-detail1-item"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="item_title[0][]" placeholder="Detail 1 Item Title"></textarea>
                                    </td>
                                    <td>
                                        <textarea rows="4" class="form-control" name="item_description[0][]" placeholder="Detail 1 Item Description"></textarea>
                                    </td>
                                    <td> 
                                        <input type="file" class="form-control detail1-item-image" name="item_image[0][]" accept="image/*">
                                        <img class="detail1-item-preview" src="#" alt="Detail 1 Item Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-detail1-item"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE DETAIL 1 -->

            <!-- MANAGE DETAIL 2 -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Detail 2</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="detail_title" class="control-label">Detail 2 Title</label>
                            <input type="text" class="form-control" name="detail_title[1]" placeholder="Detail 2 Title" value="{{ $cms_anchorings_contents_details2 ? $cms_anchorings_contents_details2->title : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="detail_description" class="control-label">Detail 2 Description</label>
                            <textarea class="form-control" name="detail_description[1]" placeholder="Detail 2 Description">{{ $cms_anchorings_contents_details2 ? $cms_anchorings_contents_details2->desc : '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="detail_image" class="control-label">Detail 2 Image</label>
                            @if($cms_anchorings_contents_details2)
                            <input type="hidden" name="detail_id[1]" value="{{ $cms_anchorings_contents_details2->id }}">
                            @endif
                            <input id="detail2-image" type="file" class="form-control" name="detail_image[1]" accept="image/*">
                            <img id="detail2-preview" src="{{ $cms_anchorings_contents_details2 ? url('/assets/images/anchoring_content/' . $cms_anchorings_contents_details2->image) : '#' }}" alt="Detail 2 Image Preview" width="30%" />
                        </div>
                    </div>
                    <a id="add-detail2-item" class="btn btn-primary pull-right" style="margin-bottom: 21px"><i class="fa fa-plus"></i> &nbsp;Add More Detail 2 Item</a>
                    <table width="100%" id="detail2-item-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="20%">Content 2 Detail 2 Item Title</th>
                            <th width="50%">Content 2 Detail 2 Item Description</th>
                            <th width="30%">Content 2 Detail 2 Item Image</th>
                        </thead>
                        <tbody>
                            @if (count($cms_anchorings_contents_items2) > 0)
                                @foreach ($cms_anchorings_contents_items2 as $cms_anchorings_contents_item2)
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="item_title_old[1][]" placeholder="Detail 2 Item Title">{{ $cms_anchorings_contents_item2->title }}</textarea>
                                    </td>
                                    <td>
                                        <textarea rows="4" class="form-control" name="item_description_old[1][]" placeholder="Detail 2 Item Description">{{ $cms_anchorings_contents_item2->desc }}</textarea>
                                    </td>
                                    <td> 
                                        <input type="hidden" name="item_id_old[1][]" value="{{ $cms_anchorings_contents_item2->id }}">
                                        <input type="file" class="form-control detail2-item-image" name="item_image_old[1][]" accept="image/*">
                                        <img class="content-detail-preview" src="{{ url('/assets/images/anchoring_content_item/' . $cms_anchorings_contents_item2->image) }}" alt="Content 2 Detail Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-detail2-item"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="item_title[1][]" placeholder="Detail 2 Item Title"></textarea>
                                    </td>
                                    <td>
                                        <textarea rows="4" class="form-control" name="item_description[1][]" placeholder="Detail 2 Item Description"></textarea>
                                    </td>
                                    <td> 
                                        <input type="file" class="form-control detail2-item-image" name="item_image[1][]" accept="image/*">
                                        <img class="detail2-item-preview" src="#" alt="Detail 2 Item Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-detail2-item"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE DETAIL 2 -->

            <!-- MANAGE DETAIL 3 -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Detail 3</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="detail_title" class="control-label">Detail 3 Title</label>
                            <input type="text" class="form-control" name="detail_title[2]" placeholder="Detail 3 Title" value="{{ $cms_anchorings_contents_details3 ? $cms_anchorings_contents_details3->title : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="detail_description" class="control-label">Detail 3 Description</label>
                            <textarea class="form-control" name="detail_description[2]" placeholder="Detail 3 Description">{{ $cms_anchorings_contents_details3 ? $cms_anchorings_contents_details3->desc : '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="detail_image" class="control-label">Detail 3 Image</label>
                            @if($cms_anchorings_contents_details3)
                            <input type="hidden" name="detail_id[2]" value="{{ $cms_anchorings_contents_details3->id }}">
                            @endif
                            <input id="detail3-image" type="file" class="form-control" name="detail_image[2]" accept="image/*">
                            <img id="detail3-preview" src="{{ $cms_anchorings_contents_details3 ? url('/assets/images/anchoring_content/' . $cms_anchorings_contents_details3->image) : '#' }}" alt="Detail 3 Image Preview" width="30%" />
                        </div>
                    </div>
                    <a id="add-detail3-item" class="btn btn-primary pull-right" style="margin-bottom: 32px"><i class="fa fa-plus"></i> &nbsp;Add More Detail 3 Item</a>
                    <table width="100%" id="detail3-item-table" class="table table-bordered table-responsive">
                        <thead>
                            <th width="20%">Content 2 Detail 3 Item Title</th>
                            <th width="50%">Content 2 Detail 3 Item Description</th>
                            <th width="30%">Content 2 Detail 3 Item Image</th>
                        </thead>
                        <tbody>
                            @if (count($cms_anchorings_contents_items3) > 2)
                                @foreach ($cms_anchorings_contents_items3 as $cms_anchorings_contents_item3)
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="item_title_old[2][]" placeholder="Detail 3 Item Title">{{ $cms_anchorings_contents_item3->title }}</textarea>
                                    </td>
                                    <td>
                                        <textarea rows="4" class="form-control" name="item_description_old[2][]" placeholder="Detail 3 Item Description">{{ $cms_anchorings_contents_item3->desc }}</textarea>
                                    </td>
                                    <td> 
                                        <input type="hidden" name="item_id_old[2][]" value="{{ $cms_anchorings_contents_item3->id }}">
                                        <input type="file" class="form-control detail3-item-image" name="item_image_old[2][]" accept="image/*">
                                        <img class="content-detail-preview" src="{{ url('/assets/images/anchoring_content_item/' . $cms_anchorings_contents_item3->image) }}" alt="Content 2 Detail Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-detail3-item"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        <textarea rows="2" class="form-control" name="item_title[2][]" placeholder="Detail 3 Item Title"></textarea>
                                    </td>
                                    <td>
                                        <textarea rows="4" class="form-control" name="item_description[2][]" placeholder="Detail 3 Item Description"></textarea>
                                    </td>
                                    <td> 
                                        <input type="file" class="form-control detail3-item-image" name="item_image[2][]" accept="image/*">
                                        <img class="detail3-item-preview" src="#" alt="Detail 3 Item Image Preview" width="100%" />
                                    </td>
                                    <td><a class="btn btn-sm btn-danger delete-detail3-item"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>  
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.cms.anchoring_content2') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> &nbsp;Submit</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- MANAGE DETAIL 3 -->
        </form>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.anchoring_content2.script')
@endsection

