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

$(document).on('click', '#add-podcast', function (e) {
	console.log('add-podcast');
  var html='';
  var contentCount = $('#podcast-table tr').length;
  console.log(contentCount);
  if(contentCount < 11){
    html += '<tr>';
    html += '<td><textarea rows="2" class="form-control" name="podcast_title[]" placeholder="Podcast Title"></textarea></td>';
    html += '<td><textarea rows="4" class="form-control" name="podcast_description[]" placeholder="Podcast Description"></textarea></td>';
    html += '<td><input type="file" class="form-control podcast-image" name="podcast_image[]" accept="image/*">';
    html += '<img class="podcast-preview" src="#" alt="Podcast Image Preview" width="100%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-podcast"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#podcast-table tbody').append(html);
  } else {
    alert('Reached Max Content');
  }
});

$(document).on('click', '.delete-podcast', function (e) {
  console.log('delete-podcast');
  $(this).closest('tr').remove();
});

$(document).on('change', '.podcast-image', function (e) {
  readURL(this, $(this).closest('tr').find('.podcast-preview'));
});

/** CONTENT 1 DETAIL 1 SCRIPT **/

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