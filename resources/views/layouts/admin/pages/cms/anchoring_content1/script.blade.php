<script type="text/javascript">
$(document).ready(function() {
    $('#datatables').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      'xScroll'     : true
    })
});

/** CONTENT 1 DETAIL 1 SCRIPT **/

$(document).on('click', '.delete-header', function (e) {
  console.log('delete-header');
  $(this).closest('tr').remove();
});

$(document).on('change', '#header-image', function (e) {
  readURL(this);
});

/** CONTENT 1 DETAIL 1 SCRIPT **/

function readURL(input) {
  console.log(input);
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#header-preview').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

</script>