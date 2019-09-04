@extends('layouts.tools.influencer.master.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
	  <h1>
    Campaign
    <small>Influencer</small>
    </h1>
	</div>
    <!-- Main content -->
    <!-- <section class="content container-fluid">
        <div class="box box-primary">
          <div class="box-header with-border">
            <div class="col-md-3">
              <img class="profile-user-img img-responsive img-circle" src="{{ url('assets/dist/img/user4-128x128.jpg') }}" alt="User profile picture">
              <h3 class="profile-username text-center">Anti Party Party Club</h3>
              <p class="text-muted text-center">Sobber's Bar</p>
              <a href="#" class="btn btn-primary btn-block"><b>SUBMIT</b></a>
            </div>
            <div class="col-md-9">
              <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i> DESCRIPTIONS</strong>
                <p class="text-muted">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam vel similique, molestiae, consequuntur in hic ratione labore reprehenderit nisi sit fuga nihil nobis itaque odit at sed! Obcaecati, laudantium ipsam!
                </p>
                <hr>
                <strong><i class="fa fa-map-marker margin-r-5"></i> PERIOD</strong>
                <p class="text-muted">Dec|07 - Jul|25</p>
                <hr>
                <strong><i class="fa fa-pencil margin-r-5"></i> PLATFROM</strong>
                <p>
                  <span class="label label-danger">YOUTUBE</span>
                  <span class="label label-info">TWITTER</span>
                  <span class="label label-warning">INSTAGRAM</span>
                  <span class="label label-primary">FACEBOOK</span>
                </p>
              </div>
            </div>
          </div>
        </div>
    </section> -->

    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Campaign Form</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
          <div class="box-body">
            <div class="row">
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3 style="font-size: 30px;">IDR 3.000</h3>
                    <p>Wallet Cost/Engagement</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-money"></i>
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3 style="font-size: 30px;">IDR 5.000</h3>
                    <p>Wallet Cost/Post</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-money"></i>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-body">
              <table id="datatables" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>BRAND</th>
                  <th>CAMPAIGN</th>
                  <th>PERIOD</th>
                  <th>BRIEF</th>
                  <th>Projected Fee</th>
                  <th>AVAILABILITY</th>
                </tr>
                </thead>
                <tbody>
                @php $i = 1 @endphp
                @foreach ($campaigns as $campaign)
                  <tr>
                    <td>{{ $i }}</td>
                    <td><img class="profile-user-img img-responsive img-circle" src="{{ url('assets/images/brand/1.png') }}" alt="User profile picture"><br>{{ $campaign->name }}</td>
                    <td>{{ $campaign->campaign_name }}</td>
                    <td>{{ date('d M Y', strtotime($campaign->start_date)) . ' - ' . date('d M Y', strtotime($campaign->end_date)) }}</td>
                    <td><a href="{{ route('influencer.campaign.brief', ['id' => $campaign->campaign_id]) }}" type="button" class="btn btn-app"><i class="fa fa-newspaper-o"></i>Brief</a></td>
                    <?php 
                        $type_price = array('Nano' => '4000', 'Micro' => '6000', 'Mix' => '5000');
                        $engagement_plan = $campaign->followers * $campaign->engagement_rate;
                        $budget_plan = (int)$engagement_plan * $type_price[$campaign->type];
                    ?>
                    <td>Rp. {{ number_format($budget_plan, 0, ',', '.') }}</td>
                    <td>
                      <a href="{{ route('influencer.campaign.join', ['id' => $campaign->campaign_id]) }}" type="button" class="btn-sm btn-success" onclick="return confirm('Are you sure?')">JOIN</a>
                      <a href="{{ route('influencer.campaign.snubs', ['id' => $campaign->campaign_id]) }}" type="button" class="btn-sm btn-danger">SNUBS</a>
                    </td>
                  </tr>
                @php $i++ @endphp
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          <div class="box-footer">
            <!-- <button type="submit" class="btn btn-info pull-right">SUBMIT</button> -->
          </div>
          <!-- /.box-footer -->
        </form>
      </div>


    </section>

    <!-- /.content -->
  </div>

@endsection
@section('scripts')
@include('layouts.tools.influencer.mycampaign.script')
@endsection
