@extends('layouts.admin.master.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CMS Home Content4
        <small>Content Managament System - Home Content4</small>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home Content4</a></li>
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
              <h4 class="box-title">CMS Home Content4 List</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatables" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Title</th>
                  <th>Status</th>
                  <th width="45%">Action</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $i = 1;
                  @endphp
                  @foreach ($datas as $data)
                  <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $data->title }}</td>
                  <td>{{ $data->status == 1 ? 'Active' : 'Non-Active' }}</td>
                  <td>
                    <a href="{{ route('admin.cms.home_content4.show', ['id' => $data->id]) }}" type="button" class="btn-sm btn-success"><i class="fa fa-search"></i>&nbsp;Detail</a> &nbsp;
                    <a href="{{ route('admin.cms.home_content4.edit', ['id' => $data->id]) }}" type="button" class="btn-sm btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                  </td>
                  </tr>
                  @php
                    $i++;
                  @endphp
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Title</th>
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
@include('layouts.admin.pages.cms.home_content4.script')
@endsection
