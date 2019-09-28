<script type="text/javascript">
  $(function () {
    var startDate;
    var endDate;
    $('#datatables').DataTable({
        paging:false,
        scrollY:500
    });
     $('#datatablesDetail').DataTable({
        paging:false,
        scrollY:500,
        searching:false
    });
    $('#datepickerdeadline').datepicker({
      format: 'dd M yyyy',
      todayBtn:  1,
      autoclose: true,
    });
    $('#datepickerperiodfrom').datepicker({
      format: 'dd M yyyy',
      startDate: new Date(),
      todayBtn:  1,
      autoclose: true,
    }).on('changeDate', function (selected) {
        var minDate = new Date(selected.date.valueOf());
        minDate.setDate(minDate.getDate() + 7);
        $('#datepickerperiodto').datepicker('setStartDate', minDate);
        
        var startDate = new Date(selected.date.valueOf());
        startDate.setDate(startDate.getDate() + 1);
        var maxDate = new Date();
        maxDate.setDate(startDate.getDate() + 4);
        $('#datepickerdeadline').datepicker('setStartDate', startDate);
        $('#datepickerdeadline').datepicker('setEndDate', maxDate);
    });
    $('#datepickerperiodto').datepicker({
      format: 'dd M yyyy',
      todayBtn:  1,
      autoclose: true,
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
          // engagement_rate_total = engagement_rate_total + parseInt(engagement_rate);
          // followers_total = followers_total + parseInt(followers);
          var engagement_plan_tmp = parseInt(followers * engagement_rate);
          engagement_plan = engagement_plan + parseInt(engagement_plan_tmp);

          var type_price = 0;
          if(type == "Nano"){
            type_price = 4000;
          } else if(type == "Micro"){
            type_price = 6000;
          } else {
            type_price = 5000;
          }
          var budget_plan_tmp = engagement_plan_tmp * type_price;
          budget_plan = budget_plan + parseInt(budget_plan_tmp);

          console.log(budget_plan_tmp);
        }
    });
    cost_plan = parseInt(budget_plan / engagement_plan);
    $('#engagement_plan').val(engagement_plan);
    $('#budget_plan').val(formatRupiah(budget_plan));
    $('#cost_plan').val(formatRupiah(cost_plan));
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

    function formatRupiah(angka) {
      var number_string = angka.toString().replace(/[^,\d]/g, ""),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }

      rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
      return  "Rp. " + rupiah;
    }
</script>