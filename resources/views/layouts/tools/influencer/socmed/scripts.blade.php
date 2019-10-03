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
        labels: [<?php foreach ($audience_relateds as $audience_related) {
          echo "'" . $audience_related->created_at . "',";
        } ?>],
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