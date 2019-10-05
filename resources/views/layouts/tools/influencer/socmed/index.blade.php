@extends('layouts.tools.influencer.master.master')
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
    <div class="row">
      <div class="col-md-3 col-xs-6">
        <div class="info-box">
            <span class="info-box-icon"><img class="img" src="{{ url('/assets/dist/img/ig.png') }}" alt="Social Media"></span>
            <div class="info-box-content" style="background-color: #D32E97;">
              <span class="info-box-text">Followers</span>
              <span class="info-box-number" style="color: white;">{{ $influencer->followers }}</span>
              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
                  <span class="progress-description">
                    {{ $audience_related->fans_growth }} Increase in 30 Days
                  </span>
            </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- CONTENT GRAFIK -->

    <!-- BAR CHART -->
    <!-- <div class="row">
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
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">6,0K</h5>
                  <span class="description-text">Max Interaction</span>
                </div>
              </div>
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">175</h5>
                  <span class="description-text">Min Interaction</span>
                </div>
              </div>
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">1,2K</h5>
                  <span class="description-text">Average Interaction</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

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
          <div class="box-footer">
            <div class="row">
              <!-- <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">6,0K</h5>
                  <span class="description-text">Max Interaction</span>
                </div>
              </div>
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">175</h5>
                  <span class="description-text">Min Interaction</span>
                </div>
              </div>
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">1,2K</h5>
                  <span class="description-text">Average Interaction</span>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- BAR CHART -->

    <!-- <div class="row"> -->
      <!-- <div class="col-md-6">
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
          <div class="box-footer">
            <div class="row">
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">6,0K</h5>
                  <span class="description-text">Max Interaction</span>
                </div>
              </div>
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">175</h5>
                  <span class="description-text">Min Interaction</span>
                </div>
              </div>
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">1,2K</h5>
                  <span class="description-text">Average Interaction</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- DONUT CHART -->

      <!-- <div class="col-md-6">
        <div class="box" style="border-top-color:#D33724">
          <div class="box-header with-border">
            <h3 class="box-title">Distribution of Interactions</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-8">
                <div class="chart-responsive">
                  <canvas id="doughnutChartDistributionInteractions" height="160" width="205" style="width: 205px; height: 160px;"></canvas>
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 99,27%</span>
                  <h5 class="description-header">233K</h5>
                  <span class="description-text">Reactions</span>
                </div>
              </div>
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0,5%</span>
                  <h5 class="description-header">1,2K</h5>
                  <span class="description-text">Comments</span>
                </div>
              </div>
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 0,23%</span>
                  <h5 class="description-header">542</h5>
                  <span class="description-text">Shares</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- DONUT CHART -->

    <!-- <div class="row">
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
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="chart-responsive">
                  <canvas id="doughnutChartInterestRate" ></canvas>
                </div>
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
                <div class="progress-group">
                  <span class="progress-text">Food</span>
                  <span class="progress-number"><b>310</b>/400</span>
                  <div class="progress sm">
                    <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                  </div>
                </div>
                <div class="progress-group">
                  <span class="progress-text">Lifestyle</span>
                  <span class="progress-number"><b>480</b>/800</span>
                  <div class="progress sm">
                    <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                  </div>
                </div>
                <div class="progress-group">
                  <span class="progress-text">Travel</span>
                  <span class="progress-number"><b>250</b>/500</span>
                  <div class="progress sm">
                    <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                  <h5 class="description-header">120</h5>
                  <span class="description-text">TOTAL LIKES</span>
                </div>
              </div>
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                  <h5 class="description-header">60</h5>
                  <span class="description-text">TOTAL COMMENTS</span>
                </div>
              </div>
              <div class="col-md-4 col-xs-6">
                <div class="description-block border-right">
                  <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                  <h5 class="description-header">165</h5>
                  <span class="description-text">TOTAL RE-SHARE</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </section>
</div>
<!-- /.content-wrapper -->
<?php foreach ($audience_relateds as $data) {
          echo "'" . $data->created_at . "',";
        } ?>
@endsection

@section('scripts')
<script>
  //BAR CHART AVERAGE INTERATIONS
  var ctxBarChartAverageInteractions = $("#barChartAverageInteractions").get(0).getContext('2d');
  var barChartAverageInteractions = new Chart(ctxBarChartAverageInteractions, {
    type: 'bar',
    data: {
        labels: ['Dec 06', 'Dec 09', 'Dec 12', 'Dec 15', 'Dec 18', 'Dec 21', 'Dec 24', 'Dec 27', 'Dec 30', 'Jan 02'],
        datasets: [
          {
            label               : 'Electronics',
            backgroundColor     : '#59D6F5',
            data                : [28, 48, 40, 19, 86, 27, 90, 48, 40, 19]
          },
          {
            label               : 'Electronics',
            backgroundColor     : '#00C0EF',
            data                : [65, 59, 80, 81, 56, 55, 40, 80, 81, 56]
          },
          {
            label               : 'Electronics',
            backgroundColor     : '#00A7D0',
            data                : [65, 59, 80, 81, 56, 55, 40, 80, 81, 56]
          }
        ]
    },
    options: {
        title: {
            display: false,
            text: 'Stacked Bars'
        },
        tooltips: {
            mode: 'label'
        },
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
      }
  });

  <?php var_dump($audience_related); ?>

  //BAR CHART GROWTH TOTAL FANS
  var ctxBarChartGrowthTotalFans = $("#barChartGrowthTotalFans").get(0).getContext('2d');
  var barChartGrowthTotalFans = new Chart(ctxBarChartGrowthTotalFans, {
    type: 'bar',
    data: {
        labels: [<?php foreach ($audience_relateds as $data) { echo "'" . $data->created_at . "',"; } ?>],
        datasets: [
          {
            label               : 'Growth Total Fans',
            backgroundColor     : '#59D6F5',
            data                : [<?php foreach ($audience_relateds as $data) { echo "'" . $data->fans_growth . "',"; } ?>]
          }
        ]
    },
    options: {
        title: {
            display: false,
            text: 'Stacked Bars'
        },
        tooltips: {
            mode: 'label'
        },
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
      }
  });

  //BAR CHART GROWTH TOTAL FANS
  var ctxBarChartMostEngagingPost = $("#barChartMostEngagingPost").get(0).getContext('2d');
  var barChartMostEngagingPost = new Chart(ctxBarChartMostEngagingPost, {
    type: 'bar',
    data: {
        labels: ['Dec 06', 'Dec 09', 'Dec 12', 'Dec 15', 'Dec 18', 'Dec 21', 'Dec 24', 'Dec 27', 'Dec 30', 'Jan 02'],
        datasets: [
          {
            label               : 'Electronics',
            backgroundColor     : '#59D6F5',
            data                : [28, 48, 40, 19, 86, 27, 90, 48, 40, 19]
          }
        ]
    },
    options: {
        title: {
            display: false,
            text: 'Stacked Bars'
        },
        tooltips: {
            mode: 'label'
        },
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
      }
  });

  //DOUGHNUT CHART GROWTH TOTAL FANS
  var ctxDoughnutChartDistributionInteractions = $("#doughnutChartDistributionInteractions").get(0).getContext('2d');
  var doughnutChartDistributionInteractions = new Chart(ctxDoughnutChartDistributionInteractions, {
    type: 'doughnut',
    data: {
          datasets: [
          {
              data: [700, 500, 400, 600],
              backgroundColor: ['#00C0EF', '#DD4B39', '#00A56A', '#F39C12']
          }],
          labels: [
              'Music',
              'Food',
              'Lifestyle',
              'Travel'
          ]}
  });

  //DOUGHNUT CHART INTEREST RATE
  var ctxDoughnutChartInterestRate = $("#doughnutChartInterestRate").get(0).getContext('2d');
  var doughnutChartInterestRate = new Chart(ctxDoughnutChartInterestRate, {
    type: 'doughnut',
    data: {
          datasets: [
          {
              data: [700, 500, 400, 600],
              backgroundColor: ['#00C0EF', '#DD4B39', '#00A56A', '#F39C12']
          }],
          labels: [
              'Music',
              'Food',
              'Lifestyle',
              'Travel'
          ]}
  });
</script>
@endsection
