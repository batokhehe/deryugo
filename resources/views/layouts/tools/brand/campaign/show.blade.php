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
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs pull-right">
            <li class=""><a href="#brief_tab" data-toggle="tab" aria-expanded="false" id="second_tab">Brief</a></li>
            <li class="active"><a href="#form_tab" data-toggle="tab" aria-expanded="true" id="first_tab">Form</a></li>
            <li class="pull-left header"><i class="fa fa-bullhorn"></i> Show Campaign </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="form_tab">
            <!-- form start -->
                <div class="box-body">
                  <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label">Campaign Name</label>
                    <div class="col-sm-6">
                      <!-- {{ $data->name }} -->
                      <input type="text" class="form-control" name="name" id="name" disabled value="{{ $data->name }}">
                    </div>
                  </div>
                  <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label">Campaign Period</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="name" id="name" disabled value="{{ date('d M Y', strtotime($data->start_date)) . ' - ' . date('d M Y', strtotime($data->end_date)) }}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group form-group">
                      <div class="input-group-btn">
                        <label type="text" class="btn btn-danger">Engagement Plan</label>
                      </div>
                      <!-- {{ $data->plan_engagement }} -->
                      <!-- <input type="text" name="" class="form-control" disabled value=""> -->
                      <input type="text" class="form-control" name="engagement_plan" id="engagement_plan" disabled value="{{ $data->plan_engagement }}">
                    </div>
                    <div class="input-group form-group">
                      <div class="input-group-btn">
                        <label type="text" class="btn btn-success">Budget Plan</label>
                      </div>
                      <input type="text" class="form-control" name="budget_plan" id="budget_plan" disabled value="{{ $data->plan_budget }}">
                    </div>
                    <div class="input-group form-group">
                      <div class="input-group-btn">
                        <label type="text" class="btn btn-warning">Cost/Engagement</label>
                      </div>
                      <input type="text" class="form-control" name="cost_plan" id="cost_plan" disabled="" value="{{ $data->plan_cost }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="callout callout-info">
                      <h4>
                      <i class="fa fa-info"></i>
                      Note
                      </h4>

                      <p>3 Parameter, Engagement, Budget, and Cost/engagement will follows as many Picked KOL</p>
                    </div>
                  </div>
                  
                </div>

                <!-- /.box-body -->

                <div class="box-body">
                  <?php
                    if($data->status == '1'){ ?>
                      <a class="btn btn-success pull-right" href="{{ route('brand.campaign.start', ['id' => $data->id]) }}">START CAMPAIGN</a>
                  <?php } ?>
                    <table id="datatablesDetail" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>NO</th>
                        <th>NAME</th>
                        <th></th>
                        <th>INTEREST</th>
                        <th>ENGAGEMENT RATE</th>
                        <th>TYPE</th>
                        <th>FOLLOWERS</th>
                        <th>STATUS</th>
                        <th></th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
                        @php $i = 1 @endphp
                        @foreach ($details as $detail)
                        <tr>
                          <td>{{ $i }}</td>
                          <td>{{ $detail->name }}</td>
                          <td><img width="300px" class="profile-user-img img-responsive img-circle" style="width:50px;" src="{{ $detail->image }}" alt="User profile picture"></td>
                          <td>
                            @foreach($categories[$i-1] as $category)
                            {{ $category->name }} &nbsp ,
                            @endforeach
                          </td>
                          <td>{{ $detail->engagement_rate * 100 . "%" }}</td>
                          <td>{{ $detail->type }}</td>
                          <td>{{ $detail->followers }}</td>
                          <td>
                            @if ($detail->campaign_influencer_status == '1' || $detail->campaign_influencer_status == '2' || $detail->campaign_influencer_status == '3')
                            <a href="#" type="button" class="btn-sm btn-success">JOINED</a>
                            @elseif ($detail->campaign_influencer_status == '0')
                            <a href="#" type="button" class="btn-sm btn-warning">WAITING</a>
                            @elseif ($detail->campaign_influencer_status == '9')
                            <a href="#" type="button" class="btn-sm btn-danger">SNUBS</a>
                            @endif
                          </td>
                          <td>
                            @if ($detail->campaign_influencer_status != '0')
                            <a href="{{ route('brand.campaign.draft', ['id' => $data->id, 'influencer' => $detail->id ]) }}" type="button" class="btn-sm btn-success">DRAFT</a>
                            @endif
                          </td>
                          <td>
                            @if ($data->status == '2')
                            <a href="{{ route('brand.campaign.post', ['id' => $data->id, 'influencer' => $detail->id ]) }}" type="button" class="btn-sm btn-success">POST</a>
                            @endif
                            @if ($detail->campaign_influencer_status == '3')
                            <a href="#" type="button" class="btn-sm btn-danger">DECLINE</a>
                            @elseif ($detail->campaign_influencer_status == '2')
                            <a href="#" type="button" class="btn-sm btn-success">ACCEPTED</a>
                            @endif
                          </td>
                        </tr>
                        @php $i++ @endphp
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                <div class="box-footer">
                  <a class="btn btn-info pull-right" onclick="$('#second_tab').trigger('click')">NEXT</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="brief_tab">
              <!-- form start -->
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
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                <?php
                if($data->status == '1'){ ?>
                  <a class="btn btn-success pull-right" href="{{ route('brand.campaign.start', ['id' => $data->id]) }}">START CAMPAIGN</a>
                <?php } ?>
                
                </div>
            </div>
            <!-- /.tab-pane -->
            
          </div>
          <!-- /.tab-content -->
        </div>
    </section>

    <!-- /.content -->
  </div>

@endsection
@section('scripts')
@include('layouts.tools.brand.campaign.script')
@endsection


          