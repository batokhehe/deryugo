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
                        <p>{{ $cms_anchorings_contents->title }}</p>
                    </div>
                    <div class="form-group">
                        <label for="header_description" class="control-label">Content 2 Description</label>
                        <p>{{ $cms_anchorings_contents->desc }}</p>
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
                        <p>{{ $cms_anchorings_contents_details1->title }}</p>
                    </div>
                    <div class="form-group">
                        <label for="detail_description" class="control-label">Detail 1 Description</label>
                        <p>{{ $cms_anchorings_contents_details1->desc }}</p>
                    </div>
                    <div class="form-group">
                        <label for="detail_image" class="control-label">Detail 1 Image</label>
                        <p><img id="detail1-preview" src="{{ url('/assets/images/anchoring_content/' . $cms_anchorings_contents_details1->image) }}" alt="Detail 1 Image Preview" width="30%" /></p>
                    </div>
                </div>
                <table width="100%" id="detail1-item-table" class="table table-bordered table-responsive">
                    <thead>
                        <th width="30%">Content 2 Detail 1 Item Title</th>
                        <th width="55%">Content 2 Detail 1 Item Description</th>
                        <th width="15%">Content 2 Detail 1 Item Image</th>
                    </thead>
                    <tbody>
                        @foreach ($cms_anchorings_contents_items1 as $cms_anchorings_contents_item1)
                        <tr>
                            <td>{{ $cms_anchorings_contents_item1->title }}</td>
                            <td>{{ $cms_anchorings_contents_item1->desc }}</td>
                            <td><img class="content-detail-preview" src="{{ url('/assets/images/anchoring_content_item/' . $cms_anchorings_contents_item1->image) }}" alt="Content 2 Detail Image Preview" width="100%" />
                            </td>
                        </tr>
                        @endforeach
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
                        <p>{{ $cms_anchorings_contents_details2->title }}</p>
                    </div>
                    <div class="form-group">
                        <label for="detail_description" class="control-label">Detail 2 Description</label>
                        <p>{{ $cms_anchorings_contents_details2->desc }}</p>
                    </div>
                    <div class="form-group">
                        <label for="detail_image" class="control-label">Detail 2 Image</label>
                        <p><img id="detail2-preview" src="{{ url('/assets/images/anchoring_content/' . $cms_anchorings_contents_details2->image) }}" alt="Detail 2 Image Preview" width="30%" /></p>
                    </div>
                </div>
                <table width="100%" id="detail2-item-table" class="table table-bordered table-responsive">
                    <thead>
                        <th width="30%">Content 2 Detail 2 Item Title</th>
                        <th width="55%">Content 2 Detail 2 Item Description</th>
                        <th width="15%">Content 2 Detail 2 Item Image</th>
                    </thead>
                    <tbody>
                        @foreach ($cms_anchorings_contents_items2 as $cms_anchorings_contents_item2)
                        <tr>
                            <td>{{ $cms_anchorings_contents_item2->title }}</td>
                            <td>{{ $cms_anchorings_contents_item2->desc }}</td>
                            <td><img class="content-detail-preview" src="{{ url('/assets/images/anchoring_content_item/' . $cms_anchorings_contents_item2->image) }}" alt="Content 2 Detail Image Preview" width="100%" /></td>
                        </tr>
                        @endforeach
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
                        <p>{{ $cms_anchorings_contents_details3->title }}</p>
                    </div>
                    <div class="form-group">
                        <label for="detail_description" class="control-label">Detail 3 Description</label>
                        <p>{{ $cms_anchorings_contents_details3->desc }}</p>
                    </div>
                    <div class="form-group">
                        <label for="detail_image" class="control-label">Detail 3 Image</label>
                        <p><img id="detail3-preview" src="{{ url('/assets/images/anchoring_content/' . $cms_anchorings_contents_details3->image) }}" alt="Detail 3 Image Preview" width="30%" /></p>
                    </div>
                </div>
                <table width="100%" id="detail3-item-table" class="table table-bordered table-responsive">
                    <thead>
                        <th width="30%">Content 2 Detail 3 Item Title</th>
                        <th width="55%">Content 2 Detail 3 Item Description</th>
                        <th width="15%">Content 2 Detail 3 Item Image</th>
                    </thead>
                    <tbody>
                        @foreach ($cms_anchorings_contents_items3 as $cms_anchorings_contents_item3)
                        <tr>
                            <td>{{ $cms_anchorings_contents_item3->title }}</td>
                            <td>{{ $cms_anchorings_contents_item3->desc }}</td>
                            <td><img class="content-detail-preview" src="{{ url('/assets/images/anchoring_content_item/' . $cms_anchorings_contents_item3->image) }}" alt="Content 2 Detail Image Preview" width="100%" /></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>  
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{ route('admin.cms.anchoring_content2') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- MANAGE DETAIL 3 -->

    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.anchoring.script')
@endsection

