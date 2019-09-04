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
                  <table class="table table-responsive table-hover">
                    <tr>
                      <th width="30%">Content Type</th>
                      <td>{{ $data->content_type }}</td>
                    </tr>
                    <tr>
                      <th width="30%">Post Frequency</th>
                      <td>{{ $data->post_frequency }}</td>
                    </tr>
                    <tr>
                      <th width="30%">Post Rules</th>
                      <td>{{ $data->post_rules }}</td>
                    </tr>
                    <tr>
                      <th width="30%">Post Reference</th>
                      <td><img src="{{ url('/assets/images/post_reference/' . $data->post_image) }}" /><br>{{ $data->post_reference }}</td>
                    </tr>
                    <tr>
                      <th width="30%">Caption</th>
                      <td>{{ $data->caption }}</td>
                    </tr>
                    <tr>
                      <th width="30%">Deadline Draft Feed</th>
                      <td>{{ date('d M Y', strtotime($data->deadline_date)) }}</td>
                    </tr>
                  </table>
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <a class="btn btn-default" href="{{ route('influencer.newcampaign.index') }}"><i class="fa fa-back"></i> Back</a>
                </div>
              </div>
              
    </section>

    <!-- /.content -->
  </div>

@endsection
@section('scripts')
@include('layouts.tools.influencer.newcampaign.script')
@endsection


          