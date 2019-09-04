@extends('layouts.tools.brand.master.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Bisnis</small>
    </h1>
  </section>

  <!-- MAIN CONTENT -->

  <!-- CAROUSEL -->
  <section class="content">

    <!-- modal -->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Default Modal</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
        <!-- /.modal -->


    <div class="box" style="border-top-color:#D33724">
        <div class="box box-solid">
          <div class="box-header with-border">
            <!--<h3 class="box-title">HOT!!! CAMPAIGN</h3>-->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <img src="{{ url('assets/images/coming.jpeg') }}" width="100%" />
            
            <!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">-->
            <!--  <ol class="carousel-indicators">-->
            <!--    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
            <!--    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>-->
            <!--    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>-->
            <!--  </ol>-->
            <!--  <div class="carousel-inner" style="padding-left: 3%;">-->
            <!--    <div class="item active">-->
            <!--      <img src="assets/dist/img/brand1.png" style="border-radius:5px;" alt="First slide">-->
            <!--    </div>-->
            <!--    <div class="item">-->
            <!--      <img src="assets/dist/img/brand2.png" style="border-radius:5px;" alt="Second slide">-->
            <!--    </div>-->
            <!--    <div class="item">-->
            <!--      <img src="assets/dist/img/brand3.png" style="border-radius:5px;" alt="Third slide">-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
  </section>
  <!-- /CAROUSEL -->


  <!-- Left col -->
  <!-- TO DO List -->

  <!--<section class="content">-->
  <!--  <div class="row">-->
  <!--    <section class="col-md-6 connectedSortable">-->
  <!--      <div class="box box-primary">-->
  <!--        <div class="box-header">-->
  <!--          <i class="ion ion-clipboard"></i>-->
  <!--          <h3 class="box-title">To Do List</h3>-->
  <!--          <div class="box-tools pull-right">-->
  <!--            <ul class="pagination pagination-sm inline">-->
  <!--              <li><a href="#">&laquo;</a></li>-->
  <!--              <li><a href="#">1</a></li>-->
  <!--              <li><a href="#">2</a></li>-->
  <!--              <li><a href="#">3</a></li>-->
  <!--              <li><a href="#">&raquo;</a></li>-->
  <!--            </ul>-->
  <!--          </div>-->
  <!--        </div>-->
          <!-- /.box-header -->
  <!--        <div class="box-body">-->
            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
  <!--          <ul class="todo-list">-->
  <!--            <li>-->
                <!-- drag handle -->
  <!--              <span class="handle">-->
  <!--                    <i class="fa fa-ellipsis-v"></i>-->
  <!--                    <i class="fa fa-ellipsis-v"></i>-->
  <!--                  </span>-->
                <!-- checkbox -->
  <!--              <input type="checkbox" value="">-->
                <!-- todo text -->
  <!--              <span class="text">Design a nice theme</span>-->
                <!-- Emphasis label -->
  <!--              <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>-->
                <!-- General tools such as edit or delete-->
  <!--              <div class="tools">-->
  <!--                <i class="fa fa-edit"></i>-->
  <!--                <i class="fa fa-trash-o"></i>-->
  <!--              </div>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <span class="handle">-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--              </span>-->
  <!--              <input type="checkbox" value="">-->
  <!--              <span class="text">Make the theme responsive</span>-->
  <!--              <small class="label label-danger"><i class="fa fa-clock-o"></i> 4 hours</small>-->
  <!--              <div class="tools">-->
  <!--                <i class="fa fa-edit"></i>-->
  <!--                <i class="fa fa-trash-o"></i>-->
  <!--              </div>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <span class="handle">-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--              </span>-->
  <!--              <input type="checkbox" value="">-->
  <!--              <span class="text">Let theme shine like a star</span>-->
  <!--              <small class="label label-danger"><i class="fa fa-clock-o"></i> 1 day</small>-->
  <!--              <div class="tools">-->
  <!--                <i class="fa fa-edit"></i>-->
  <!--                <i class="fa fa-trash-o"></i>-->
  <!--              </div>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <span class="handle">-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--              </span>-->
  <!--              <input type="checkbox" value="">-->
  <!--              <span class="text">Let theme shine like a star</span>-->
  <!--              <small class="label label-danger"><i class="fa fa-clock-o"></i> 3 days</small>-->
  <!--              <div class="tools">-->
  <!--                <i class="fa fa-edit"></i>-->
  <!--                <i class="fa fa-trash-o"></i>-->
  <!--              </div>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <span class="handle">-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--              </span>-->
  <!--              <input type="checkbox" value="">-->
  <!--              <span class="text">Check your messages and notifications</span>-->
  <!--              <small class="label label-danger"><i class="fa fa-clock-o"></i> 1 week</small>-->
  <!--              <div class="tools">-->
  <!--                <i class="fa fa-edit"></i>-->
  <!--                <i class="fa fa-trash-o"></i>-->
  <!--              </div>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <span class="handle">-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--              </span>-->
  <!--              <input type="checkbox" value="">-->
  <!--              <span class="text">Let theme shine like a star</span>-->
  <!--              <small class="label label-danger"><i class="fa fa-clock-o"></i> 1 month</small>-->
  <!--              <div class="tools">-->
  <!--                <i class="fa fa-edit"></i>-->
  <!--                <i class="fa fa-trash-o"></i>-->
  <!--              </div>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <span class="handle">-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--              </span>-->
  <!--              <input type="checkbox" value="">-->
  <!--              <span class="text">Let theme shine like a star</span>-->
  <!--              <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 month</small>-->
  <!--              <div class="tools">-->
  <!--                <i class="fa fa-edit"></i>-->
  <!--                <i class="fa fa-trash-o"></i>-->
  <!--              </div>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <span class="handle">-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--                <i class="fa fa-ellipsis-v"></i>-->
  <!--              </span>-->
  <!--              <input type="checkbox" value="">-->
  <!--              <span class="text">Check your messages and notifications</span>-->
  <!--              <small class="label label-danger"><i class="fa fa-clock-o"></i> 3 month</small>-->
  <!--              <div class="tools">-->
  <!--                <i class="fa fa-edit"></i>-->
  <!--                <i class="fa fa-trash-o"></i>-->
  <!--              </div>-->
  <!--            </li>-->
  <!--          </ul>-->
  <!--        </div>-->
          <!-- /.box-body -->
  <!--        <div class="box-footer clearfix no-border">-->
  <!--          <button type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add item</button>-->
  <!--        </div>-->
  <!--      </div>-->
        <!-- /.box -->

        <!-- BAR CHART -->

  <!--      <div class="box" style="border-top-color:#D33724">-->
  <!--        <div class="box-header with-border">-->
  <!--          <h3 class="box-title">Sales Performance Based on Campaign</h3>-->
  <!--          <div class="box-tools pull-right">-->
  <!--            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>-->
  <!--            </button>-->
  <!--            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="box-body">-->
  <!--          <div class="chart">-->
              <!-- <canvas id="barChart3" style="height:230px" data-toggle="modal" data-target="#modal-default"></canvas> -->
  <!--                  <canvas id="barChartSalesPerformance" style="height:230px"></canvas>-->
  <!--          </div>-->
  <!--        </div>-->
          <!-- /.box-body -->
  <!--        <div class="box-footer">-->
  <!--          <div class="row">-->
  <!--            <div class="col-md-4 col-xs-6">-->
  <!--              <div class="description-block border-right">-->
  <!--                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>-->
  <!--                <h5 class="description-header">6,0K</h5>-->
  <!--                <span class="description-text">Max Interaction</span>-->
  <!--              </div>-->
                <!-- /.description-block -->
  <!--            </div>-->
              <!-- /.col -->
  <!--            <div class="col-md-4 col-xs-6">-->
  <!--              <div class="description-block border-right">-->
  <!--                <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>-->
  <!--                <h5 class="description-header">175</h5>-->
  <!--                <span class="description-text">Min Interaction</span>-->
  <!--              </div>-->
                <!-- /.description-block -->
  <!--            </div>-->
              <!-- /.col -->
  <!--            <div class="col-md-4 col-xs-6">-->
  <!--              <div class="description-block border-right">-->
  <!--                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>-->
  <!--                <h5 class="description-header">1,2K</h5>-->
  <!--                <span class="description-text">Average Interaction</span>-->
  <!--              </div>-->
                <!-- /.description-block -->
  <!--            </div>-->
              <!-- /.col -->
  <!--          </div>-->
            <!-- /.row -->
  <!--        </div>-->
          <!-- /.box-footer -->
  <!--      </div>-->
        <!-- /.box -->
  <!--    </section>-->
      <!-- /.Left col -->

      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <!-- VISITOR -->

  <!--    <section class="col-md-6 connectedSortable">-->
  <!--      <div class="box" style="border-top-color:#D33724">-->
  <!--        <div class="nav-tabs-custom">-->
            <!-- Tabs within a box -->
  <!--          <div class="box-header">-->
  <!--            <i class="fa fa-inbox"></i>-->
  <!--            <h3 class="box-title">Visitor</h3>-->
  <!--            <ul class="nav nav-tabs pull-right">-->
  <!--              <li class="btn-group">-->
  <!--                <button type="button" class="btn btn-default">Day</button>-->
  <!--                <button type="button" class="btn btn-default">Week</button>-->
  <!--                <button type="button" class="btn btn-default">Month</button>-->
  <!--              </li>-->
  <!--            </ul>-->
  <!--          </div>-->
  <!--          <div class="tab-content no-padding">-->
              <!-- Morris chart - Sales -->
  <!--            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>-->
              <!-- <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div> -->
  <!--          </div>-->
  <!--          <div class="box-footer no-border" style="padding-top: 10px;padding-bottom: 14px;">-->
  <!--            <div class="row">-->
  <!--              <div class="col-md-4 text-center" style="border-right: 1px solid #f4f4f4">-->
  <!--                <div id="sparkline-1"></div>-->
  <!--                <div class="knob-label">Visitors</div>-->
  <!--              </div>-->
                <!-- ./col -->
  <!--              <div class="col-md-4 text-center" style="border-right: 1px solid #f4f4f4">-->
  <!--                <div id="sparkline-2"></div>-->
  <!--                <div class="knob-label">Online</div>-->
  <!--              </div>-->
                <!-- ./col -->
  <!--              <div class="col-md-4 text-center">-->
  <!--                <div id="sparkline-3"></div>-->
  <!--                <div class="knob-label">Exists</div>-->
  <!--              </div>-->
                <!-- ./col -->
  <!--            </div>-->
              <!-- /.row -->
  <!--          </div>-->
            <!-- /.box-footer -->
  <!--        </div>-->
          <!-- /.box -->
  <!--      </div>-->
        <!-- BAR CHART -->

  <!--      <div class="box" style="border-top-color:#D33724">-->
  <!--        <div class="box-header with-border">-->
  <!--          <h3 class="box-title">Historical Campaign with Brand</h3>-->
  <!--          <div class="box-tools pull-right">-->
  <!--            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>-->
  <!--            </button>-->
  <!--            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--        <div class="box-body">-->
  <!--          <div class="chart">-->
  <!--            <canvas id="barChartHistorialCampaign" style="height:230px"></canvas>-->
  <!--          </div>-->
  <!--        </div>-->
          <!-- /.box-body -->
  <!--        <div class="box-footer">-->
  <!--          <div class="row">-->
  <!--            <div class="col-md-4 col-xs-6">-->
  <!--              <div class="description-block border-right">-->
  <!--                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>-->
  <!--                <h5 class="description-header">6,0K</h5>-->
  <!--                <span class="description-text">Max Interaction</span>-->
  <!--              </div>-->
                <!-- /.description-block -->
  <!--            </div>-->
              <!-- /.col -->
  <!--            <div class="col-md-4 col-xs-6">-->
  <!--              <div class="description-block border-right">-->
  <!--                <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>-->
  <!--                <h5 class="description-header">175</h5>-->
  <!--                <span class="description-text">Min Interaction</span>-->
  <!--              </div>-->
                <!-- /.description-block -->
  <!--            </div>-->
              <!-- /.col -->
  <!--            <div class="col-md-4 col-xs-6">-->
  <!--              <div class="description-block border-right">-->
  <!--                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>-->
  <!--                <h5 class="description-header">1,2K</h5>-->
  <!--                <span class="description-text">Average Interaction</span>-->
  <!--              </div>-->
                <!-- /.description-block -->
  <!--            </div>-->
              <!-- /.col -->
  <!--          </div>-->
            <!-- /.row -->
  <!--        </div>-->
          <!-- /.box-footer -->
  <!--      </div>-->
        <!-- /.box -->
  <!--    </section>-->
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('scripts')
@include('layouts.tools.brand.home.scripts')
@endsection
