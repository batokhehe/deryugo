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
                  <td><img width="300px" src="{{ url('/assets/images/post_reference/' . $data->post_image) }}" /><br>{{ $data->post_reference }}</td>
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

            <form action="{{ route('brand.campaign.process_draft', ['id' => $data->id]) }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="influencer" value="{{ $influencer }}">
              <table id="datatables" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Post ID</th>
                  <th>Comment</th>
                  <th>Like</th>
                  <th>Engagement Rate</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @php $i = 1 @endphp
                @foreach ($details as $detail)
                <tr>
                  <td>{{ $i }}</td>
                  <td><img width="200px" src="{{ $detail->image }}" /><br>{{ $detail->post_id }}</td>
                  <td>{{ $detail->comment }}</td>
                  <td>{{ $detail->like }}</td>
                  <td>{{ $detail->engagement_rate }}</td>
                </tr>
                @php $i++ @endphp
                @endforeach
                </tbody>
              </table>
            
              <!-- /.box-body -->
              <div class="box-footer pull-right">
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


          