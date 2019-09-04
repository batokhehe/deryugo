@extends('layouts.tools.master.master')
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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CAMPAIGN</th>
                  <th>DESCRIPTION</th>
                  <th>PLATFROM</th>
                  <th>PERIOD</th>
                  <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><img class="profile-user-img img-responsive img-circle" src="{{ url('assets/dist/img/user4-128x128.jpg') }}" alt="User profile picture"></td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident autem rem sed doloremque labore ex molestiae tenetur, eaque, deserunt, mollitia repellendus.</td>
                  <td>Facebook | Instagram | Twitter | Youtube</td>
                  <td>Dec|07 - Jul|25</td>
                  <td><a href="#" type="button" class="btn-sm btn-success">Detail</a></td>
                </tr>
                <tr>
                  <td><img class="profile-user-img img-responsive img-circle" src="{{ url('assets/dist/img/user3-128x128.jpg') }}" alt="User profile picture"></td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                  <td>Instagrams | Youtube</td>
                  <td>Jan|01 - Nov|25</td>
                  <td><a href="#" type="button" class="btn-sm btn-success">Detail</a></td>
                </tr>
                <tr>
                  <td><img class="profile-user-img img-responsive img-circle" src="{{ url('assets/dist/img/user5-128x128.jpg') }}" alt="User profile picture"></td>
                  <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                  <td>Facebook | Twitter | Instagrams</td>
                  <td>Feb|01 - Dec|25</td>
                  <td><a href="#" type="button" class="btn-sm btn-success">Detail</a></td>
                </tr>
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
