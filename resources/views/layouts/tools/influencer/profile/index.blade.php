@extends('layouts.tools.influencer.master.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
	  <h1>
    Profile
    <small>Influencer</small>
    </h1>
	</div>
    <!-- Main content -->
    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
		<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6" style="padding-bottom: 15px;">
                    <img src="{{ $influencer->image }}" alt="Image" class="img-fluid" style="width: 80%;border-radius: 50%;">
                  </div>
                  <div class="col-md-6" style="padding-top: 60px;">
                    <h5 class="text-white">{{ $influencer->name }}</h5>
                    <span>Instagram</span>
                  </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, omnis illo iste ratione. Numquam
                  eveniet quo,
                  ullam itaque expedita impedit. Eveniet, asperiores.</p>
                <div class="callout callout-info">
                  <h4>Personal Information</h4>
                </div>
                <table>
                  <tbody>
                    <tr>
                      <td>Age</td>
                      <td style="padding-left: 15px;">:</td>
                      <td style="padding-left: 15px;"><?php echo date_diff(date_create($influencer->birthdate), date_create('now'))->y; ?></td>
                    </tr>
                    <tr>
                      <td>Gender</td>
                      <td style="padding-left: 15px;">:</td>
                      <td style="padding-left: 15px;"><?php echo $influencer->gender == '0' ? 'Male' : 'Female'; ?></td>
                    </tr>
                    <tr>
                      <td>Interest</td>
                      <td style="padding-left: 15px;">:</td>
                      <td style="padding-left: 15px;">
                          @foreach($categories as $category)
                          {{ $category->name }}, 
                          @endforeach
                      </td>
                    </tr>
                    <tr>
                      <td>Instagram</td>
                      <td style="padding-left: 15px;">:</td>
                      <td style="padding-left: 15px;">{{ $influencer->instagram_username }}</td>
                    </tr>
                    <tr>
                      <td>Youtube</td>
                      <td style="padding-left: 15px;">:</td>
                      <td style="padding-left: 15px;">-</td>
                    </tr>
                    <tr>
                      <td>Twitter</td>
                      <td style="padding-left: 15px;">:</td>
                      <td style="padding-left: 15px;">-</td>
                    </tr>
                    <tr>
                      <td>Facebook</td>
                      <td style="padding-left: 15px;">:</td>
                      <td style="padding-left: 15px;">-</td>
                    </tr>
                  </tbody>
                </table>
                <a href="{{ route('profile.influencer.edit') }}" type="button" class="btn-sm btn-success" style="float: inline-end;">EDIT</a>
              </div>
              @if(Auth::user()->status == 1)
              <div class="col-md-6">
                  <h5 class="text-white" style="margin-bottom: 20px;text-align: center;"><b>FEED INSTAGRAM<b></h5>
                  <div class="row">
                    @foreach($influencer->post_feed->data as $data)
                        <div class="col-md-4">
                            <img src="{{ $data->image }}" alt="Image" class="img-fluid" style="width: 100%;">
                        </div>
                    @endforeach
                    </div>
                  </div>
                @endif
            </div>   
          </div>
        </div>
      </div>
          <!-- /.box -->
    </div>
      </div>

    </section>

    <!-- /.content -->
  </div>

@endsection
@section('scripts')
@include('layouts.tools.influencer.mycampaign.script')
@endsection
