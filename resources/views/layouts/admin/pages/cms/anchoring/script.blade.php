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

$(document).on('click', '#add-content1-detail1', function (e) {
	console.log('add-content1-detail1');
  var html='';
  var contentCount = $('#content1-detail1-table tr').length;
  console.log(contentCount);
  if(contentCount < 5){
    html += '<tr>';
    html += '<td><textarea rows="2" class="form-control" name="content_detail_title[0][]" placeholder="Content 1 Detail 1 Title"></textarea></td>';
    html += '<td><textarea rows="5" class="form-control" name="content_detail_description[0][]" placeholder="Content 1 Detail 1 Description"></textarea></td>';
    html += '<td><input type="file" class="form-control content1-detail1-image" name="content_detail_image[0][]" accept="image/*">';
    html += '<img class="content1-detail1-preview" src="#" alt="Content 1 Detail 1 Image Preview" width="100%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-content1-detail1"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#content1-detail1-table tbody').append(html);
  } else {
    alert('Reached Max Content');
  }
});

$(document).on('click', '.delete-content1-detail1', function (e) {
  console.log('delete-content1-detail1');
  $(this).closest('tr').remove();
});

$(document).on('change', '.content1-detail1-image', function (e) {
  readURL(this, $(this).closest('tr').find('.content1-detail1-preview'));
});

/** CONTENT 1 DETAIL 1 SCRIPT **/

/** CONTENT 1 DETAIL 2 SCRIPT **/

$(document).on('click', '#add-content1-detail2', function (e) {
  console.log('add-content1-detail2');
  var html='';
  var contentCount = $('#content1-detail2-table tr').length;
  console.log(contentCount);
  if(contentCount < 5){
    html += '<tr>';
    html += '<td><textarea rows="2" class="form-control" name="content_detail_title[1][]" placeholder="Content 1 Detail 2 Title"></textarea></td>';
    html += '<td><textarea rows="5" class="form-control" name="content_detail_description[1][]" placeholder="Content 1 Detail 2 Description"></textarea></td>';
    html += '<td><input type="file" class="form-control content1-detail2-image" name="content_detail_image[1][]" accept="image/*">';
    html += '<img class="content1-detail2-preview" src="#" alt="Content 1 Detail 2 Image Preview" width="100%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-content1-detail2"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#content1-detail2-table tbody').append(html);
  } else {
    alert('Reached Max Content');
  }
});

$(document).on('click', '.delete-content1-detail2', function (e) {
  console.log('delete-content1-detail2');
  $(this).closest('tr').remove();
});

$(document).on('change', '.content1-detail2-image', function (e) {
  readURL(this, $(this).closest('tr').find('.content1-detail2-preview'));
});

/** CONTENT 1 DETAIL 2 SCRIPT **/

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

$(document).on('click', '#add-image-content-detail', function (e) {
  console.log('add-image-content-detail');
  var html='';
  var contentCount = $('#image-content-table tr').length;
  if(contentCount < 11){

    html += '<tr>';
    html += '<td><textarea rows="2" class="form-control" name="image_content_detail_name[]" placeholder="Content 2 Name"></textarea></td>';
    html += '<td><textarea rows="2" class="form-control" name="image_content_detail_title[]" placeholder="Content 2 Title"></textarea></td>';
    html += '<td><textarea rows="4" class="form-control" name="image_content_detail_description[]" placeholder="Content 2 Description"></textarea></td>';
    html += '<td><input type="file" class="form-control image-content-detail-image" name="image_content_detail_image[]" accept="image/*">';
    html += '<img class="image-content-detail-preview" src="#" alt="Content 2 Detail Image Preview" width="100%" /></td>';
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

/** IMAGE SCRIPT **/

$(document).on('click', '#add-image-content-detail3', function (e) {
  console.log('add-image-content-detail3');
  var html='';
  var contentCount = $('#image-content-table3 tr').length;
  if(contentCount < 11){
    html += '<tr>';
    html += '<td><textarea rows="2" class="form-control" name="image_content_detail_name3[]" placeholder="Content 3 Name"></textarea></td>';
    html += '<td><textarea rows="2" class="form-control" name="image_content_detail_title3[]" placeholder="Content 3 Title"></textarea></td>';
    html += '<td><textarea rows="4" class="form-control" name="image_content_detail_description3[]" placeholder="Content 3 Description"></textarea></td>';
    html += '<td><input type="file" class="form-control image-content-detail-image" name="image_content_detail_image3[]" accept="image/*">';
    html += '<img class="image-content-detail-preview3" src="#" alt="Content 3 Detail Image Preview" width="100%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-image-content-detail"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#image-content-table3 tbody').append(html);
  } else {
    alert('Reached Max Content');
  }
});

$(document).on('click', '.delete-image-content-detail3', function (e) {
  console.log('delete-image-content-detail3');
  $(this).closest('tr').remove();
});

$(document).on('change', '.image-content-detail-image3', function (e) {
  readURL(this, $(this).closest('tr').find('.image-content-detail-preview3'));
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