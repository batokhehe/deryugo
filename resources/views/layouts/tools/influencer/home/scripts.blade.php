<script>
  // var ctx = document.getElementById("myChart");
  // var ctx = document.getElementById("myChart").getContext("2d");
  // $(function () {
    @if(Auth::user()->status == '1')
    var series1 = [];
    var series2 = [];
    var series3 = [];
    var followers = [];
    var postER = [];
    var profileER = [];
    var color = Chart.helpers.color;
    $(document).ready(function() {
        $.ajax({
          url: "https://api.minter.io/v1.0/reports/5d2dee7f687b5b007db5603a/growth_total_followers?date_from=2019-01-01&to_date=2019-07-01&unit=month&access_token=yHmbpD3WKdYiXTiVHETepkJQGfFrmeNy",
          type: "GET",
          dataType: "json",
          async: false,
          cache: false,
          success: function(response){
            var s = response.data.series;
            $.each(s, function(i, item) {
                series1.push(item);
            });
            var f = response.data.values.Followers;
            $.each(f, function(i, item) {
                var q = 0; 
                if(item != 'null') {q = item;}
                console.log(q);
                followers.push(q);
            });
            drawFollowersChart();
          }
        });
    
        function drawFollowersChart(){
            var ctxLineChartFollowers = $("#lineChartFollowers").get(0).getContext('2d');
            var lineChartFollowers = new Chart(ctxLineChartFollowers, {
            type: 'line',
            data: {
                labels: series1,
				datasets: [{
					label: 'Growth of Total Followers',
					backgroundColor: color("#ED2939").alpha(0.5).rgbString(),
					borderColor: "#ED2939",
					fill: false,
					data: followers,
				}]
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
        }
        
        $.ajax({
          url: "https://api.minter.io/v1.0/reports/5d2dee7f687b5b007db5603a/post_engagement_rate?date_from=2019-01-01&to_date=2019-07-01&unit=month&access_token=yHmbpD3WKdYiXTiVHETepkJQGfFrmeNy",
          type: "GET",
          dataType: "json",
          async: false,
          cache: false,
          success: function(response){
            var s = response.data.series;
            $.each(s, function(i, item) {
                series2.push(item);
            });
            var f = response.data.values.Rate;
            $.each(f, function(i, item) {
                var q = 0; 
                if(item != 'null') {q = item;}
                console.log(q);
                postER.push(q);
            });
            drawPostERChart();
          }
        });
    
        function drawPostERChart(){
            var ctxLineChartPost = $("#lineChartPostER").get(0).getContext('2d');
            var lineChartPost = new Chart(ctxLineChartPost, {
            type: 'line',
            data: {
                labels: series2,
				datasets: [{
					label: 'Post Engagement Rate',
					backgroundColor: color("#ED2939").alpha(0.5).rgbString(),
					borderColor: "#ED2939",
					fill: false,
					data: postER,
				}]
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
        }
        
        $.ajax({
          url: "https://api.minter.io/v1.0/reports/5d2dee7f687b5b007db5603a/profile_engagement_rate?date_from=2019-01-01&to_date=2019-07-01&unit=month&access_token=yHmbpD3WKdYiXTiVHETepkJQGfFrmeNy",
          type: "GET",
          dataType: "json",
          async: false,
          cache: false,
          success: function(response){
            var s = response.data.series;
            $.each(s, function(i, item) {
                series3.push(item);
            });
            var f = response.data.values.Rate;
            $.each(f, function(i, item) {
                var q = 0; 
                if(item != 'null') {q = item;}
                console.log(q);
                profileER.push(q);
            });
            drawProfileERChart();
          }
        });
    
        function drawProfileERChart(){
            var ctxLineChartProfile = $("#lineChartProfileER").get(0).getContext('2d');
            var lineChartProfile = new Chart(ctxLineChartProfile, {
            type: 'line',
            data: {
                labels: series3,
				datasets: [{
					label: 'Profile Engagement Rate',
					backgroundColor: color("#ED2939").alpha(0.5).rgbString(),
					borderColor: "#ED2939",
					fill: false,
					data: profileER,
				}]
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
        }
    });
    @endif
  
//   var ctxBarChartSalesPerformance = $("#barChartSalesPerformance").get(0).getContext('2d');
//   var barChartSalesPerformance = new Chart(ctxBarChartSalesPerformance, {
//     type: 'bar',
//     data: {
//         labels: ['Dec 06', 'Dec 09', 'Dec 12', 'Dec 15', 'Dec 18', 'Dec 21', 'Dec 24', 'Dec 27', 'Dec 30', 'Jan 02'],
//         datasets: [
//           {
//             label               : 'Electronics',
//             backgroundColor     : '#59D6F5',
//             data                : [28, 48, 40, 19, 86, 27, 90, 48, 40, 19]
//           },
//           {
//             label               : 'Electronics',
//             backgroundColor     : '#00C0EF',
//             data                : [65, 59, 80, 81, 56, 55, 40, 80, 81, 56]
//           },
//           {
//             label               : 'Electronics',
//             backgroundColor     : '#00A7D0',
//             data                : [65, 59, 80, 81, 56, 55, 40, 80, 81, 56]
//           }
//         ]
//     },
//     options: {
//         title: {
//             display: false,
//             text: 'Stacked Bars'
//         },
//         tooltips: {
//             mode: 'label'
//         },
//         responsive: true,
//         maintainAspectRatio: false,
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero:true
//                 }
//             }]
//         },
//         onClick: clickHandlerBarChartSalesPerformance
//     }
//   });


//   function clickHandlerBarChartSalesPerformance(evt)
//   {
//     var activeElement = barChartSalesPerformance.getElementAtEvent(evt);
//     $('#modal-default').modal('show');
//     // alert('clicked');
//     // console.log(activeElement);
//   }


//   //BAR CHART HISTORIAL CAMPAIGN

//   var ctxBarChartHistorialCampaign = $("#barChartHistorialCampaign").get(0).getContext('2d');
//   var barChartHistorialCampaign = new Chart(ctxBarChartHistorialCampaign, {
//     type: 'bar',
//     data: {
//         labels: ['Dec 06', 'Dec 09', 'Dec 12', 'Dec 15', 'Dec 18', 'Dec 21', 'Dec 24', 'Dec 27', 'Dec 30', 'Jan 02'],
//         datasets: [
//           {
//             label               : 'Electronics',
//             backgroundColor     : '#59D6F5',
//             data                : [28, 48, 40, 19, 86, 27, 90, 48, 40, 19]
//           },
//           {
//             label               : 'Electronics',
//             backgroundColor     : '#00C0EF',
//             data                : [65, 59, 80, 81, 56, 55, 40, 80, 81, 56]
//           },
//           {
//             label               : 'Electronics',
//             backgroundColor     : '#00A7D0',
//             data                : [65, 59, 80, 81, 56, 55, 40, 80, 81, 56]
//           }
//         ]
//     },
//     options: {
//         title: {
//             display: false,
//             text: 'Stacked Bars'
//         },
//         tooltips: {
//             mode: 'label'
//         },
//         responsive: true,
//         maintainAspectRatio: false,
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero:true
//                 }
//             }]
//         },
//         onClick: clickHandlerBarChartHistorialCampaign
//     }
//   });


//   function clickHandlerBarChartHistorialCampaign(evt)
//   {
//     var activeElement = barChartHistorialCampaign.getElementAtEvent(evt);
//     $('#modal-default').modal('show');
//     // alert('clicked');
//     // console.log(activeElement);
//   }
</script>