@extends('layouts.tools.brand.master.master')
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
        <!-- <form class="form-horizontal" action="{{ route('influencer.campaign.update' , ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}} -->
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
                      <textarea class="form-control" rows="3" name="name" id="name" disabled value="{{ $data->post_rules }}" style="height:200px;">{{ $data->post_rules }}</textarea>
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

            <form action="{{ route('brand.campaign.process_draft', ['id' => $data->id]) }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="influencer" value="{{ $influencer }}">
              <table id="datatables" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>IMAGE</th>
                  <th>REMARKS</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @php $i = 1 @endphp
                @foreach ($details as $detail)
                <tr>
                  <td>{{ $i }}</td>
                  <td><img class="preview" src="{{ url('/assets/images/campaign_draft/' . $detail->image) }}" alt="Image Preview" width="50%" /></td>
                  <td><textarea rows="4" cols="50" class="form-control" name="remarks[]" placeholder="Remarks">{{ $detail->remarks }}</textarea></td>
                  @if ($detail->status == '1')
                  <td><a type="button" class="btn-sm btn-success">ACCEPTED</a></td>
                  @elseif ($detail->status == '0')
                  <td><input type="checkbox" name="post_image[]" value="{{ $detail->id }}"></td>
                  @elseif ($detail->status == '2')
                  <td>
                    <a type="button" class="btn-sm btn-danger">DECLINE</a>
                    <input type="checkbox" name="post_image[]" value="{{ $detail->id }}">
                  </td>
                  @elseif ($detail->status == '3')
                  <td>
                    <a type="button" class="btn-sm btn-warning">REVISED</a>
                    <input type="checkbox" name="post_image[]" value="{{ $detail->id }}">
                  </td>
                  @endif
                </tr>
                @php $i++ @endphp
                @endforeach
                </tbody>
              </table>
            
              <!-- /.box-body -->
              <div class="box-footer pull-left">
                <a class="btn btn-default" href="{{ route('brand.campaign.detail' , ['id' => $data->id]) }}"><i class="fa fa-back"></i> Back</a>
              </div>

              <div class="box-footer pull-right">
                <input type="submit" class="btn btn-danger" name="decline_draft" value="DECLINE" onclick="return confirm('Are You Sure?')" />
                <input type="submit" class="btn btn-success" name="accept_draft" value="ACCEPT" onclick="return confirm('Are You Sure?')" />
              </div>
            </form>
          </div>
      

        <!-- </form> -->
              
    </section>

    <!-- /.content -->
  </div>

@endsection
@section('scripts')
@include('layouts.tools.brand.campaign.script')
@endsection


          