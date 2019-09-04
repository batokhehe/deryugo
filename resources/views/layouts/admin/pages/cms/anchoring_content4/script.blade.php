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

$(document).on('click', '#add-article', function (e) {
  console.log('add-article');
  var html='';
  var contentCount = $('#article-table tr').length;
  console.log(contentCount);
  if(contentCount < 11){
    html += '<tr>';
    html += '<td><textarea rows="2" class="form-control" name="article_title[]" placeholder="Podcast Title"></textarea></td>';
    html += '<td><textarea rows="4" class="form-control" name="article_description[]" placeholder="Podcast Description"></textarea></td>';
    html += '<td><input type="file" class="form-control article-image" name="article_image[]" accept="image/*">';
    html += '<img class="article-preview" src="#" alt="Podcast Image Preview" width="100%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-article"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#article-table tbody').append(html);
  } else {
    alert('Reached Max Content');
  }
});

$(document).on('click', '.delete-article', function (e) {
  console.log('delete-article');
  $(this).closest('tr').remove();
});

$(document).on('change', '.article-image', function (e) {
  readURL(this, $(this).closest('tr').find('.article-preview'));
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