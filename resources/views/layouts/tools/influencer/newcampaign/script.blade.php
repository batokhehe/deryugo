<script type="text/javascript">
  $(function () {
    var startDate;
    var endDate;
    $('#datatables').DataTable();
    $('#datepicker').datepicker();
    $('#daterangepicker').daterangepicker({
      minDate: new Date()
    }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      $('#datepicker').datepicker('option', 'minDate', new Date(start));
    });
  })

  var sList = "";

  $('.influencer').change(function () {
    var engagement_rate_total = 0;
    // var followers_total = 0;
    var engagement_plan = 0;
    var budget_plan = 0;
    var cost_plan = 0;
    $('.influencer').each(function () {
        var engagement_rate = $(this).parent().parent().find('.engagement_rate').val();
        var followers = $(this).parent().parent().find('.followers').val();
        var type = $(this).parent().parent().find('.type').val();
        var sThisVal = (this.checked ? "1" : "0");
        if(sThisVal == "1"){
          // engagement_rate_total = engagement_rate_total + parseFloat(engagement_rate);
          // followers_total = followers_total + parseInt(followers);
          engagement_plan = engagement_plan + parseFloat(followers * engagement_rate);

          var type_price = 0;
          if(type == "Nano"){
            type_price = 4000;
          } else if(type == "Micro"){
            type_price = 6000;
          } else {
            type_price = 5000;
          }
          var budget_plan_tmp = engagement_rate * type_price;
          budget_plan = budget_plan + parseInt(budget_plan_tmp);

          console.log(budget_plan_tmp);
          cost_plan = cost_plan + parseFloat(engagement_rate * budget_plan_tmp);
        }
    });
    $('#engagement_plan').val(engagement_plan);
    $('#budget_plan').val(budget_plan);
    $('#cost_plan').val(cost_plan);
  });

  $(document).on('change', '#post-image', function (e) {
      readURL(this, $('#preview'));
    });

    function readURL(input, target) {
      console.log(input);
      console.log(target);
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          target.attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
</script>