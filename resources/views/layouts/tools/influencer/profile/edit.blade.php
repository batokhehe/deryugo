@extends('layouts.tools.influencer.master.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
	  <h1>
    Profile
    <small>Edit</small>
    </h1>
	</div>
    <!-- Main content -->
    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <form class="form-horizontal" action="{{ route('profile.influencer.update') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <!-- form start -->
          <div class="box box-primary col-md-12">
            <div class="box-body">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="content_type" placeholder="Name" value="{{ $influencer->name }}">
                    </div>
                  </div>
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Job</label>
                      <input type="text" class="form-control" name="post_frequency" placeholder="Job">
                    </div>
                  </div>
                </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Bio</label>
                        <textarea class="form-control" name="caption" placeholder="Your Bio"></textarea>
                      </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label>Photo Profile</label>
                        <input type="file" name="post_reference_image" id="post-image">
                        <img id="preview" src="#" alt="Image Preview" width="30%" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="callout callout-info">
                      <h4>Personal Information</h4>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" value="<?php echo date_diff(date_create($influencer->birthdate), date_create('now'))->y; ?>" disabled="">
                      </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                      <!-- <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" class="form-control" name="post_frequency" placeholder="Twitter">
                      </div> -->
                      <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{ $influencer->instagram_username }}" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Interest</label>
                        <select class="form-control select2" name="interest[]" id="interest" multiple="multiple">
                          @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                            @foreach($influencer_categories as $influencer_category)
                                    @if ($category->id == $influencer_category->category_id)
                                    selected=""
                                    @endif
                            @endforeach
                                >{{ $category->name }}
                            </option>
                        @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>Averege Impression</label>
                        <input type="text" class="form-control" name="avg_impression" placeholder="150" value="" />
                      </div>
                      <!-- <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{ $influencer->instagram_username }}" />
                      </div> -->
                      <!-- <div class="form-group">
                        <label>Youtube</label>
                        <input type="text" class="form-control" name="post_frequency" placeholder="Youtube">
                      </div> -->
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" name="gender" value="<?php echo $influencer->gender == '0' ? 'Male' : 'Female'; ?>" disabled="">
                      </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label>Photo Insight</label>
                        <input type="file" name="post_reference_image" id="post-image">
                        <img id="preview" src="#" alt="Image Preview" width="30%" />
                      </div>
                    </div>
                      <!-- <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="post_frequency" placeholder="Facebook">
                      </div>
                    </div> -->
                  </div>
                </div>
            
            <!-- /.box-body -->
            <div class="box-footer">
              <a class="btn btn-default" href="{{ ('/influencer/tools/profile') }}"><i class="fa fa-back"></i> Back</a>
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


          