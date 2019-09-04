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

$(document).on('click', '#add-image-content-detail', function (e) {
  console.log('add-image-content-detail');
  var html='';
  var contentCount = $('#image-content-table tr').length;
  if(contentCount < 11){

    html += '<tr>';
    html += '<td><textarea rows="2" class="form-control" name="image_content_detail_name[]" placeholder="Content 3 Name"></textarea></td>';
    html += '<td><textarea rows="2" class="form-control" name="image_content_detail_title[]" placeholder="Content 3 Title"></textarea></td>';
    html += '<td><textarea rows="4" class="form-control" name="image_content_detail_description[]" placeholder="Content 3 Description"></textarea></td>';
    html += '<td><input type="file" class="form-control image-content-detail-image" name="image_content_detail_image[]" accept="image/*">';
    html += '<img class="image-content-detail-preview" src="#" alt="Content 3 Detail Image Preview" width="100%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-image-content-detail"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#image-content-table tbody').append(html);
  } else {
    alert('Reached Max Content');
  }
});

$(document).on('click', '.delete-image-content-detail', function (e) {
  console.log('delete-image-content-detail');
  $(this).closest('tr').remove();
});

$(document).on('change', '.image-content-detail-image', function (e) {
  readURL(this, $(this).closest('tr').find('.image-content-detail-preview'));
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