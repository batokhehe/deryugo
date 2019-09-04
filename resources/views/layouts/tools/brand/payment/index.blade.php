@extends('user.master.master')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
	  <h1>
    Payment
    <small>Influencer</small>
    </h1>
	</div>
    <!-- Main content -->
    <section class="content container-fluid">
    <!-----| Your Page Content Here |----->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Payment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" style="text-align:center;">
                <thead>
                  <tr>
                    <th>CAMPAIGN</th>
                    <th>DESCRIPTIONS</th>
                    <th>INSTAGRAM</th>
                    <th>FACEBOOK</th>
                    <th>TWITTER</th>
                    <th>YOUTUBE</th>
                    <th>PERIOD</th>
                    <th>INCOME</th>
                  </tr>
                </thead>
                  <tbody>
                    <tr>
                    <td><img class="profile-user-img img-responsive img-circle" src="assets/dist/img/user4-128x128.jpg" alt="User profile picture"></td>
                    <td style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident autem rem sed doloremque labore ex molestiae tenetur, eaque, deserunt, mollitia repellendus.</td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">Rp.500.000;</a></td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">Rp.500.000;</a></td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">Rp.500.000;</a></td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">Rp.1.000.000;</a></td>
                    <td>Dec|07 - Jul|25</td>
                    <td><a href="#" type="button" class="btn-sm btn-success">Rp.2.500.000;</a></td>
                  </tr>
                  <tr>
                    <td><img class="profile-user-img img-responsive img-circle" src="assets/dist/img/user4-128x128.jpg" alt="User profile picture"></td>
                    <td style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">Rp.500.000;</a></td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">-</a></td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">-</a></td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">Rp.500.000;</a></td>
                    <td>Jan|01 - Nov|25</td>
                    <td><a href="#" type="button" class="btn-sm btn-success">Rp.1.000.000;</a></td>
                  </tr>
                  <tr>
                    <td><img class="profile-user-img img-responsive img-circle" src="assets/dist/img/user4-128x128.jpg" alt="User profile picture"></td>
                    <td style="text-align:justify;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">Rp.500.000;</a></td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">Rp.500.000;</a></td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">-</a></td>
                    <td><a href="#" type="button" class="btn-sm btn-warning">Rp.500.000;</a></td>
                    <td>Feb|01 - Dec|25</td>
                    <td><a href="#" type="button" class="btn-sm btn-success">Rp.1.500.000;</a></td>
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
