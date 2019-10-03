@extends('layouts.tools.influencer.master.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
	  <h1>
    Campaign
    <small>Brand</small>
    </h1>
	</div>
    <!-- Main content -->
    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <form class="form-horizontal" action="{{ route('influencer.campaign.update' , ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <!-- form start -->
          <div class="box box-primary col-md-12">
            <div class="box-body">                  
              <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label">Content Type</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="name" id="name" disabled value="{{ $data->content_type }}">
                    </div>
                  </div>
                  <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label">Post Rules</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="name" id="name" disabled value="{{ $data->post_rules }}">
                    </div>
                  </div>
                  <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label">Post Reference</label>
                    <div class="col-sm-4">
                      <img  width="80%" src="{{ url('/assets/images/post_reference/' . $data->post_image) }}">
                    </div>
                  </div>
                  <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label">Caption</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="name" id="name" disabled value="{{ $data->caption }}">
                    </div>
                  </div>
                  <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label">Deadline Draft Feed</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="name" id="name" disabled value="{{ date('d M Y', strtotime($data->deadline_date)) }}">
                    </div>
                  </div>

              @if(count($details) > 0)
              <table class="table table-bordered table-striped" id="datatables" >
                <tr>
                  <th>No</th>
                  <th>Images</th>
                  <th>Status</th>
                </tr>
                @php $i = 1 @endphp
                @foreach($details as $detail)
                <tr>
                  <td>{{ $i }}</td>
                  <td><img width="300px" src="{{ url('/assets/images/campaign_draft/' . $detail->image) }}" /></td>
                  <td>
                    @if ($detail->status == '1')
                    <a type="button" class="btn-sm btn-success">ACCEPTED</a>
                    @elseif ($detail->status == '0')
                    <a type="button" class="btn-sm btn-warning">WAITING</a>
                    @elseif ($detail->status == '2')
                    <a type="button" class="btn-sm btn-danger">DECLINE</a>
                    @endif
                  </td>
                </tr>
                @php $i++ @endphp
                @endforeach
              </table>
              @else
              <table class="table table-responsive" id="image_table">
                <tr>
                  <td>
                    <div class="form-group">
                      <label for="nama" class="control-label">Image</label>
                      <input type="file" class="form-control image" name="image[]" accept="image/*">
                      <img class="preview" src="#" alt="Image Preview" width="50%" />
                  </div>
                  </td>
                  <td></td>
                </tr>
              </table>
              <a id="add_image" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add More</a>
              @endif
            </div>
            
            <!-- /.box-body -->
            <div class="box-footer">
              <a class="btn btn-default" href="{{ route('influencer.campaign.index') }}"><i class="fa fa-back"></i> Back</a>
              @if(count($details) < 1)
              <button type="submit" class="btn btn-info pull-right" onclick="return confirm('Are You Sure?')">Submit</button>
              @endif
            </div>
          </div>
      

        </form>
              
    </section>

    <!-- /.content -->
  </div>

@endsection
@section('scripts')
@include('layouts.tools.influencer.mycampaign.script')
@endsection


          