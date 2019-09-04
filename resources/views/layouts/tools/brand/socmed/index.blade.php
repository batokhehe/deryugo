@extends('layouts.tools.brand.master.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Social Media
    <small>Influencer</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
  <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-3 col-xs-6">
        <!-- small box -->
        <div class="info-box">
            <span class="info-box-icon"><img class="img" src="{{ url('/assets/dist/img/ig.png') }}" alt="Social Media"></span>
            <div class="info-box-content" style="background-color: #D32E97;">
              <span class="info-box-text">Followers</span>
              <span class="info-box-number" style="color: white;">279 K</span>
              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
                  <span class="progress-description">
                    40% Increase in 30 Days
                  </span>
            </div>
        </div>
            <!-- /.info-box-content -->
      </div>
      <!-- ./col -->
      <div class="col-md-3 col-xs-6">
        <!-- small box -->
        <div class="info-box">
            <span class="info-box-icon"><img class="img" src="{{ url('/assets/dist/img/fb.png') }}" alt="Social Media"></span>
            <div class="info-box-content" style="background-color: #5375BD;">
              <span class="info-box-text">Followers</span>
              <span class="info-box-number" style="color: white;">143 K</span>
              <div class="progress">
                <div class="progress-bar" style="width: 10%"></div>
              </div>
                  <span class="progress-description">
                    10% Increase in 30 Days
                  </span>
            </div>
        </div>
            <!-- /.info-box-content -->
      </div>
      <!-- ./col -->
      <div class="col-md-3 col-xs-6">
        <!-- small box -->
        <div class="info-box">
            <span class="info-box-icon"><img class="img" src="{{ url('/assets/dist/img/tw.png') }}" alt="Social Media"></span>
            <div class="info-box-content" style="background-color: #1DA1F2;">
              <span class="info-box-text">Followers</span>
              <span class="info-box-number" style="color: white;">198 K</span>
              <div class="progress">
                <div class="progress-bar" style="width: 20%"></div>
              </div>
                  <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
            </div>
        </div>
            <!-- /.info-box-content -->
      </div>
      <!-- ./col -->
      <div class="col-md-3 col-xs-6">
        <!-- small box -->
        <div class="info-box">
            <span class="info-box-icon"><img class="img" src="{{ url('/assets/dist/img/yt.png') }}" alt="Social Media"></i></span>
            <div class="info-box-content" style="background-color: #DE2925;">
              <span class="info-box-text">Subscribers</span>
              <span class="info-box-number" style="color: white;">415 K</span>
              <div class="progress">
                <div class="progress-bar" style="width: 30%"></div>
              </div>
                  <span class="progress-description">
                    30% Increase in 30 Days
                  </span>
            </div>
        </div>
            <!-- /.info-box-content -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <!-- CONTENT GRAFIK -->

    <!-- BAR CHART -->
    <div class="row">
      <div class="col-md-6">
        <div class="box" style="border-top-color:#D33724;">
          <div class="box-header with-border">
            <h3 class="box-title">Average Interactions</h3>
            <div class="btn-group" style="padding-left: 15%;">
              <button type="button" class="btn btn-default">Day</button>
              <button type="button" class="btn btn-default">Week</button>
              <button type="button" class="btn btn-default">Month</button>
            </div>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="barChartAverageInteractions" style="height:230px"></canvas>
            </div>
          </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="row">
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">6,0K</h5>
                  <span class="description-text">Max Interaction</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">175</h5>
                  <span class="description-text">Min Interaction</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">1,2K</h5>
                  <span class="description-text">Average Interaction</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.box-footer -->  
        </div><!-- /.box -->
      </div>

      <!-- BAR CHART -->

      <div class="col-md-6">
        <div class="box" style="border-top-color:#D33724">
          <div class="box-header with-border">
            <h3 class="box-title">Growth of Total Fans</h3>
            <div class="btn-group" style="padding-left: 15%;">
              <button type="button" class="btn btn-default">Day</button>
              <button type="button" class="btn btn-default">Week</button>
              <button type="button" class="btn btn-default">Month</button>
            </div>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="barChartGrowthTotalFans" style="height:230px"></canvas>
            </div>
          </div>
          <!-- ./box-body -->
          <div class="box-footer">
            <div class="row">
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">6,0K</h5>
                  <span class="description-text">Max Interaction</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">175</h5>
                  <span class="description-text">Min Interaction</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">1,2K</h5>
                  <span class="description-text">Average Interaction</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-footer -->
        </div>
          <!-- /.box -->
      </div>
    </div>

    <!-- BAR CHART -->

    <div class="row">
      <div class="col-md-6">
        <div class="box" style="border-top-color:#D33724; height:425px;">
          <div class="box-header with-border">
            <h3 class="box-title">Most Engaging Post by Type</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="chart" style="margin-top: 10px;">
              <canvas id="barChartMostEngagingPost" style="height:230px"></canvas>
            </div>
          </div>
          <!-- ./box-body -->
          <div class="box-footer">
            <div class="row">
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">6,0K</h5>
                  <span class="description-text">Max Interaction</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">175</h5>
                  <span class="description-text">Min Interaction</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">1,2K</h5>
                  <span class="description-text">Average Interaction</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>

      <!-- DONUT CHART -->

      <div class="col-md-6">
        <div class="box" style="border-top-color:#D33724">
          <div class="box-header with-border">
            <h3 class="box-title">Distribution of Interactions</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-8">
                <div class="chart-responsive">
                  <canvas id="doughnutChartDistributionInteractions" height="160" width="205" style="width: 205px; height: 160px;"></canvas>
                </div>
                <!-- ./chart-responsive -->
              </div>
              <div class="col-md-2"></div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 99,27%</span>
                  <h5 class="description-header">233K</h5>
                  <span class="description-text">Reactions</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0,5%</span>
                  <h5 class="description-header">1,2K</h5>
                  <span class="description-text">Comments</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 0,23%</span>
                  <h5 class="description-header">542</h5>
                  <span class="description-text">Shares</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.footer -->
        </div>
      </div>
    </div>

    <!-- DONUT CHART -->

    <div class="row">
      <div class="col-md-12">
        <div class="box" style="border-top-color:#D33724">
          <div class="box-header with-border">
            <h3 class="box-title">Interest Rate / Post</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="chart-responsive">
                  <canvas id="doughnutChartInterestRate" ></canvas>
                </div>
                <!-- ./chart-responsive -->
              </div>
              <div class="col-md-6">
                <p class="text-center">
                  <strong>Engagement Score</strong>
                </p>
                <div class="progress-group">
                  <span class="progress-text">Music</span>
                  <span class="progress-number"><b>160</b>/200</span>
                  <div class="progress sm">
                    <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Food</span>
                  <span class="progress-number"><b>310</b>/400</span>
                  <div class="progress sm">
                    <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Lifestyle</span>
                  <span class="progress-number"><b>480</b>/800</span>
                  <div class="progress sm">
                    <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Travel</span>
                  <span class="progress-number"><b>250</b>/500</span>
                  <div class="progress sm">
                    <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">120</h5>
                  <span class="description-text">TOTAL LIKES</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">60</h5>
                  <span class="description-text">TOTAL COMMENTS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">165</h5>
                  <span class="description-text">TOTAL RE-SHARE</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.footer -->
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('scripts')
@include('layouts.tools.influencer.socmed.scripts')
@endsection
