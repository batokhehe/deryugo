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
              <!-- form start -->
              <div class="box">
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
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <a class="btn btn-default" href="{{ route('influencer.newcampaign.index') }}"><i class="fa fa-back"></i> Back</a>
                  <a href="{{ route('influencer.campaign.join', ['id' => $data->id]) }}" type="button" class="btn btn-success pull-right" onclick="return confirm('Are you sure?')">JOIN</a>
                </div>
              </div>
              
    </section>

    <!-- /.content -->
  </div>

@endsection
@section('scripts')
@include('layouts.tools.influencer.newcampaign.script')
@endsection


          