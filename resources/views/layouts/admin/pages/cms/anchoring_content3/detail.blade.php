@extends('layouts.admin.master.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
	  <h1>Create anchoring Content</h1>
	</div>
    <!-- Main content -->
    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="box box-primary">
    		<!-- /.box-header -->
    		<!-- form start -->
    		<div class="box-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nama" class="control-label">Title</label>
                        <p>{{ $cms_anchorings->title }}</p>
                    </div>
                </div>
			</div>	
			<!-- /.box-body -->
    	</div>

        <!-- MANAGE CONTENT 3 -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Content 3 Podcast</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <table width="100%" id="podcast-table" class="table table-bordered table-responsive">
                    <thead>
                        <th width="5%">No</th>
                        <th width="30%">Podcast Title</th>
                        <th width="45%">Podcast Description</th>
                        <th width="20%">Podcast Image</th>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($cms_anchorings_podcasts as $cms_anchorings_podcast)
                        <tr>
                            <td> {{ $i }} </td>
                            <td> {{ $cms_anchorings_podcast->title }} </td>
                            <td> {{ $cms_anchorings_podcast->desc }} </td>
                            <td width="30%"> <img src="{{ url('/assets/images/podcast/' . $cms_anchorings_podcast->image) }}" width="100%" /> </td>
                        </tr>
                        @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>  
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{ route('admin.cms.anchoring_content3') }}" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- MANAGE CONTENT 3 -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
@include('layouts.admin.pages.cms.anchoring_content3.script')
@endsection

