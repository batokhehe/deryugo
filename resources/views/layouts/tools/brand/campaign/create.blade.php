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
        <form class="form-horizontal" action="{{ route('brand.campaign.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs pull-right">
            <li class=""><a href="#brief_tab" data-toggle="tab" aria-expanded="false" id="second_tab">Brief</a></li>
            <li class="active"><a href="#form_tab" data-toggle="tab" aria-expanded="true" id="first_tab">Form</a></li>
            <li class="pull-left header"><i class="fa fa-bullhorn"></i> Create Campaign </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="form_tab">
            <!-- form start -->
                <div class="box-body">
                  <div class="form-group @if ($errors->has('name')) has-error @endif">
                    <label class="col-sm-2 control-label">Campaign Title</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Campaign Title" name="name">
                    </div>
                    @if ($errors->has('name')) 
                    <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                  </div>
                  <div class="form-group @if ($errors->has('period_from') || $errors->has('period_to')) has-error @endif">
                    <label class="col-sm-2 control-label">Campaign Period</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepickerperiodfrom" name="period_from">
                      </div>
                    </div>
                     ~ 
                    <div class="col-sm-4">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepickerperiodto" name="period_to">
                      </div>
                    </div>
                    @if ($errors->has('period_from') || $errors->has('period_to')) 
                    <span class="help-block">{{ $errors->first('period_from') }}</span>
                    @endif
                  </div>

                  <div class="col-md-5">
                    <div class="input-group form-group">
                      <div class="input-group-btn">
                        <label type="text" class="btn btn-danger">Engagement Plan</label>
                      </div>
                      <input type="text" class="form-control" name="engagement_plan" id="engagement_plan">
                    </div>
                    <div class="input-group form-group">
                      <div class="input-group-btn">
                        <label type="text" class="btn btn-success">Budget Plan</label>
                      </div>
                      <input type="text" class="form-control" name="budget_plan" id="budget_plan">
                    </div>
                    <div class="input-group form-group">
                      <div class="input-group-btn">
                        <label type="text" class="btn btn-warning">Cost/Engagement</label>
                      </div>
                      <input type="text" class="form-control" name="cost_plan" id="cost_plan">
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
                    <table id="datatables" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>NO</th>
                        <th>NAME</th>
                        <th></th>
                        <th>INTEREST</th>
                        <th>ENGAGEMENT RATE</th>
                        <th>TYPE</th>
                        <th>FOLLOWERS</th>
                        <th>AVAILABILITY</th>
                        <th>PICK</th>
                      </tr>
                      </thead>
                      <tbody>
                        @php $i = 1 @endphp
                        @foreach ($influencers as $influencer)
                        <tr>
                          <td>{{ $i }}</td>
                          <td>{{ $influencer->name }}</td>
                          <td><img class="profile-user-img img-responsive img-circle" style="width:50px;" src="{{ $influencer->image }}" alt="User profile picture"></td>
                          <td>{{ $influencer->category_name }}</td>
                          <td>{{ $influencer->engagement_rate * 100 . "%" }}
                            <input type="hidden" class="engagement_rate" value="{{ $influencer->engagement_rate }}" />
                          </td>
                          <td>{{ $influencer->type }}
                            <input type="hidden" class="type" value="{{ $influencer->type }}" />
                          </td>
                          <td>{{ $influencer->followers }}
                            <input type="hidden" class="followers" value="{{ $influencer->followers }}" />
                          </td>
                          <td><a href="#" type="button" class="btn-sm btn-success">Yes</a></td>
                          <td><input name="influencer[]" type="checkbox"  value="{{ $influencer->id }}" class="influencer"></td>
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
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="form-group @if ($errors->has('content_type')) has-error @endif">
                      <label>Content Type</label>
                      <input type="text" class="form-control" name="content_type" placeholder="Feed or Stories ">
                      @if ($errors->has('content_type')) 
                        <span class="help-block">{{ $errors->first('content_type') }}</span>
                        @endif
                    </div>
                  </div>
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-5">
                    <div class="form-group @if ($errors->has('post_frequency')) has-error @endif">
                      <label>Post Frequency</label>
                      <input type="text" class="form-control" name="post_frequency" placeholder="3 times a week">
                        @if ($errors->has('post_frequency')) 
                        <span class="help-block">{{ $errors->first('post_frequency') }}</span>
                        @endif
                    </div>
                  </div>
                    
                </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-group @if ($errors->has('post_rules')) has-error @endif">
                        <label>Post Rules</label>
                        <textarea class="form-control" rows="3" name="post_rules" placeholder="Your Rules Campaign" style="height:200px;"></textarea>
                        @if ($errors->has('post_rules')) 
                        <span class="help-block">{{ $errors->first('post_rules') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group @if ($errors->has('post_reference_image')) has-error @endif">
                        <label>Post Reference</label>
                        <input type="file" name="post_reference_image" id="post-image">
                        <img id="preview" src="#" alt="(Max 1Mb)" width="70%" />
                        @if ($errors->has('post_reference_image')) 
                        <span class="help-block">{{ $errors->first('post_reference_image') }}</span>
                        @endif
                      </div>
                      <div class="form-group @if ($errors->has('post_reference')) has-error @endif">
                        <label for="post_reference_image">and other info</label>
                        <input type="text" class="form-control" name="post_reference" placeholder="Product URL">
                        @if ($errors->has('post_reference')) 
                        <span class="help-block">{{ $errors->first('post_reference') }}</span>
                        @endif
                      </div>
                      <div class="form-group @if ($errors->has('deadline_draft')) has-error @endif">
                          <label for="deadline_draft">Deadline Draft Feed</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepickerdeadline" name="deadline_draft" placeholder="Deadline Draft">
                            
                          </div>
                          @if ($errors->has('deadline_draft')) 
                        <span class="help-block">{{ $errors->first('deadline_draft') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                    
                    
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-group @if ($errors->has('post_reference')) has-error @endif">
                        <label>Caption</label>
                        <textarea class="form-control" rows="3" name="caption" placeholder="Your Caption"></textarea>
                        @if ($errors->has('caption')) 
                        <span class="help-block">{{ $errors->first('caption') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                    
                    </div>
                  </div>
                    
                    
                    
                </div>
                
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right" onclick="return confirm('Are You Sure?')">Submit</button>
                </div>
            </div>
            <!-- /.tab-pane -->
            
          </div>
          <!-- /.tab-content -->
        </div>
      </form>
    </section>

    <!-- /.content -->
  </div>
  
@endsection
@section('scripts')
@include('layouts.tools.brand.campaign.script')
@endsection


          