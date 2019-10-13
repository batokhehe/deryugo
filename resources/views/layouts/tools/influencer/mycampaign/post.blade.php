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
              <table class="table table-responsive" id="image_table">
                <tr>
                  <th>No</th>
                  <th>Post ID</th>
                  <th>Comment</th>
                  <th>Like</th>
                  <th>Income</th>
                  <th>Status</th>
                </tr>
                <?php $type = $influencer->type; ?>
                @php $i = 1 @endphp
                @foreach($details as $detail)
                <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $detail->post_id }}</td>
                  <td>{{ $detail->comment }}</td>
                  <td>{{ $detail->like }}</td>
                  <?php 
                  if($type == "Nano"){
                      $type_price = '4000';
                    } else if($type == "Micro"){
                      $type_price = '6000';
                    } else {
                      $type_price = '5000';
                    }  
                    ?>
                  <td>
                    <?php 
                    $income = (($detail->comment + $detail->like) / $influencer->avg_impression) * $type_price; echo $income; 
                    ?>
                  </td>
                </tr>
                @php $i++ @endphp
                @endforeach
              </table>
              @endif
              <!-- <a id="add_post" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add More</a> -->
              
              @if(count($details) < 1)
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
              @endif
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


          