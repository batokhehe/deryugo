<script>
  // var ctx = document.getElementById("myChart");
  // var ctx = document.getElementById("myChart").getContext("2d");
  // $(function () {
  var ctxBarChartSalesPerformance = $("#barChartSalesPerformance").get(0).getContext('2d');
  var barChartSalesPerformance = new Chart(ctxBarChartSalesPerformance, {
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
        },
        onClick: clickHandlerBarChartSalesPerformance
    }
  });


  function clickHandlerBarChartSalesPerformance(evt)
  {
    var activeElement = barChartSalesPerformance.getElementAtEvent(evt);
    $('#modal-default').modal('show');
    // alert('clicked');
    // console.log(activeElement);
  }


  //BAR CHART HISTORIAL CAMPAIGN

  var ctxBarChartHistorialCampaign = $("#barChartHistorialCampaign").get(0).getContext('2d');
  var barChartHistorialCampaign = new Chart(ctxBarChartHistorialCampaign, {
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
        },
        onClick: clickHandlerBarChartHistorialCampaign
    }
  });


  function clickHandlerBarChartHistorialCampaign(evt)
  {
    var activeElement = barChartHistorialCampaign.getElementAtEvent(evt);
    $('#modal-default').modal('show');
    // alert('clicked');
    // console.log(activeElement);
  }
</script>