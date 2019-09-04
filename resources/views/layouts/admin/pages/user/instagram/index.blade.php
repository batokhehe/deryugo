@extends('layouts.admin.master.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage User
        <small>Instagram</small>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User List</h3>
              <!--<a href="{{ route('admin.cms.home.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> &nbsp;Create </a>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatables" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Email</th>
                  <th>Instagram</th>
                  <th>Status</th>
                  <th width="25%">Action</th>
                </tr>
                </thead>
                <tbody>
                  @php $i = 1 @endphp
                  @foreach ($datas as $data)
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->instagram_username }}</td>
                    <td>{{ $data->user_status == 1 ? 'Verified' : 'Non-Verified-yet' }}</td>
                    <td>
                       <?php if($data->user_status == 0){ ?>
                       <a href="{{ route('admin.user.instagram.verify', ['id' => $data->user_id]) }}" type="button" class="btn-sm btn-success"><i class="fa fa-check"></i>&nbsp;Verify</a> &nbsp;
                       <?php } else { echo "";} ?>
                    </td>
                  </tr>
                  @php $i++ @endphp
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Email</th>
                  <th>Instagram</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.home.script')
@endsection