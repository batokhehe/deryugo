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
              <div class="form-group">
                <label>Content Type</label>
                {{ $data->content_type }}
              </div>
              <div class="form-group">
                <label>Post Frequency</label>
                {{ $data->post_frequency }}
              </div>
              <div class="form-group">
                <label>Post Rules</label>
                {{ $data->post_rules }}
              </div>
              <div class="form-group">
                <label>Post Reference</label>
                {{ $data->post_reference }}
              </div>
              <div class="form-group">
                <img src="{{ url('/assets/images/post_reference/' . $data->post_image) }}" />
              </div>
              <div class="form-group">
                <label>Caption</label>
                {{ $data->caption }}
              </div>
              <div class="form-group">
                <label>Deadline Draft Feed</label>
                {{ $data->deadline_date }}
              </div>

              <div class="form-group">
                  <label for="nama" class="control-label">Image</label>
                  <input type="file" class="form-control image" name="image[]" accept="image/*">
                  <img class="preview" src="#" alt="Image Preview" width="50%" />
              </div>

              <div class="form-group">
                  <label for="nama" class="control-label">Image</label>
                  <input type="file" class="form-control image" name="image[]" accept="image/*">
                  <img class="preview" src="#" alt="Image Preview" width="50%" />
              </div>

              <div class="form-group">
                  <label for="nama" class="control-label">Image</label>
                  <input type="file" class="form-control image" name="image[]" accept="image/*">
                  <img class="preview" src="#" alt="Image Preview" width="50%" />
              </div>

            </div>
            
            <!-- /.box-body -->
            <div class="box-footer">
              <a class="btn btn-default" href="{{ route('influencer.campaign.index') }}"><i class="fa fa-back"></i> Back</a>
              <button type="submit" class="btn btn-info pull-right">Submit</button>
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


          