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
            </div>

            <form action="{{ route('brand.campaign.process_draft', ['id' => $data->id]) }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="influencer" value="{{ $influencer }}">
              <table id="datatablesDetail" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Post ID</th>
                  <th>Comment</th>
                  <th>Like</th>
                  <th>Income</th>
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
                  <?php 
                  if($influencer_data->type == "Nano"){
                      $type_price = '4000';
                    } else if($influencer_data->type == "Micro"){
                      $type_price = '6000';
                    } else {
                      $type_price = '5000';
                    }  
                    ?>
                  <td><?php 
                  $income = (($detail->comment + $detail->like) / $influencer_data->avg_impression) * $type_price; echo $income; 
                  ?>
                  </td>
                  <td> <?php
                    $status = array('0' => 'Draft', '1' => 'Waiting to Start', '2' => 'Running');
                    echo $status[$data->status];
                  ?></td>
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


          