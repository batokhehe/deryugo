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
    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
		<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">My Campaign</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatables" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>BRAND</th>
                  <th>CAMPAIGN</th>
                  <th>CONTENT TYPE</th>
                  <th>POST REFERENCE</th>
                  <th>PERIOD</th>
                  <th>STATUS</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                @php $i = 1 @endphp
                @foreach ($campaigns as $campaign)
                <tr>
                  <td>{{ $i }}</td>
                  <td><img class="profile-user-img img-responsive img-circle" src="{{ url('assets/images/brand/1.png') }}" alt="User profile picture"><br>{{ $campaign->name }}</td>
                  <td>{{ $campaign->campaign_name }}</td>
                  <td>{{ $campaign->content_type }}</td>
                  <td><img width="150px" class="img-responsive" src="{{ url('assets/images/post_reference/' . $campaign->post_image) }}" alt="Post Reference"></td>
                  <td>{{ date('d M Y', strtotime($campaign->start_date)) . ' - ' . date('d M Y', strtotime($campaign->end_date)) }}</td>
                  <td>
                  <?php
                    $status = array('0' => 'Draft', '1' => 'Waiting to Start', '2' => 'Running');
                    echo $status[$campaign->campaign_status];
                  ?></td>
                  <td>
                    @if ($campaign->campaign_status == '0')
                    <a href="{{ route('influencer.campaign.draft', ['id' => $campaign->campaign_id]) }}" type="button" class="btn-sm btn-success">DRAFT</a>
                    @endif
                    @if ($campaign->campaign_status == '2')
                    <a href="{{ route('influencer.campaign.post', ['id' => $campaign->campaign_id]) }}" type="button" class="btn-sm btn-success">POST</a>
                    @endif

                  </td>
                </tr>
                @php $i++ @endphp
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
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
