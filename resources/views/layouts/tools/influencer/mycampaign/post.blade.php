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
        <form class="form-horizontal" action="{{ route('influencer.campaign.update_post' , ['id' => $data->id]) }}" method="POST">
        {{csrf_field()}}
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

              @if(count($details) > 0)
              <table class="table table-responsive" id="image_table">
                <tr>
                  <th>No</th>
                  <th>Post ID</th>
                  <th>Comment</th>
                  <th>Like</th>
                  <th>Engagement Rate</th>
                  <th>Status</th>
                </tr>
                @php $i = 1 @endphp
                @foreach($details as $detail)
                <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $detail->post_id }}</td>
                  <td>{{ $detail->comment }}</td>
                  <td>{{ $detail->like }}</td>
                  <td>{{ $detail->engagement_rate }}</td>
                </tr>
                @php $i++ @endphp
                @endforeach
              </table>
              @endif
              <!-- <a id="add_post" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add More</a> -->
              <table class="table table-responsive" id="post_table">
                <tr>
                  <td>
                    <div class="form-group">
                      <label for="nama" class="control-label">Post ID</label>
                      <input type="text" class="form-control" name="post[]">
                    </div>
                  </td>
                  <td></td>
                </tr>
              </table>
            </div>
            
            <!-- /.box-body -->
            <div class="box-footer">
              <a class="btn btn-default" href="{{ route('influencer.campaign.index') }}"><i class="fa fa-back"></i> Back</a>
              
              <button type="submit" class="btn btn-info pull-right" onclick="return confirm('Are You Sure?')">Submit</button>
              
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


          