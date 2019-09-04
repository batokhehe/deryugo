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

/** IMAGE SCRIPT **/

$(document).on('click', '#add-image-tile-detail', function (e) {
  console.log('add-image-tile-detail');
  var html='';
  var tileCount = $('#image-tile-table tr').length;
  if(tileCount < 11){
    html += '<tr>';
    html += '<td><input type="file" class="form-control image-tile-detail-image" name="image_tile_detail_image[]" accept="image/*">';
    html += '<img class="image-tile-detail-preview" src="#" alt="Content 6 Detail Image Preview" width="30%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-image-tile-detail"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#image-tile-table tbody').append(html);
  } else {
    alert('Reached Max Content');
  }
});

$(document).on('click', '.delete-image-tile-detail', function (e) {
  console.log('delete-image-tile-detail');
  $(this).closest('tr').remove();
});

$(document).on('change', '.image-tile-detail-image', function (e) {
  readURL(this, $(this).closest('tr').find('.image-tile-detail-preview'));
});

/** IMAGE SCRIPT **/

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