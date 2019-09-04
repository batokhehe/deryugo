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

/** CONTENT SCRIPT **/

$(document).on('click', '#add-content-detail', function (e) {
  console.log('add-content-detail');
  var html='';
  var contentCount = $('#content-table tr').length;
  if(contentCount < 5){

    html += '<tr>';
    html += '<td><textarea rows="2" class="form-control" name="content_detail_title[]" placeholder="Content 1 Title"></textarea></td>';
    html += '<td><textarea rows="4" class="form-control" name="content_detail_description[]" placeholder="Content 1 Description"></textarea></td>';
    html += '<td><input type="file" class="form-control content-detail-image" name="content_detail_image[]" accept="image/*">';
    html += '<img class="content-detail-preview" alt="Content 1 Detail Image Preview" width="100%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-content-detail"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#content-table tbody').append(html);
  } else {
    alert('Reached Max Content');
  }
});

$(document).on('click', '.delete-content-detail', function (e) {
  console.log('delete-content-detail');
  $(this).closest('tr').remove();
});

$(document).on('change', '.content-detail-image', function (e) {
  readURL(this, $(this).closest('tr').find('.content-detail-preview'));
});

/** CONTENT SCRIPT **/

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