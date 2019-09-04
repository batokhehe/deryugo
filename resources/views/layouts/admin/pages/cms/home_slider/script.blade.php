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

/** SLIDER SCRIPT **/

$(document).on('click', '#add-slider', function (e) {
	console.log('add-slider');
  var html='';
  var sliderCount = $('#slider-table tr').length;
  console.log(sliderCount);
  if(sliderCount < 5){
    html += '<tr>';
    html += '<td><textarea rows="2" class="form-control" name="slider_title[]" placeholder="Slider Title"></textarea></td>';
    html += '<td><textarea rows="5" class="form-control" name="slider_description[]" placeholder="Slider Description"></textarea></td>';
    html += '<td><input type="text" class="form-control" name="slider_btn_text[]" placeholder="Slider Button Text"></td>';
    html += '<td><input type="text" class="form-control" name="slider_btn_action_url[]" placeholder="Slider Button Action URL"></td>';
    html += '<td><input type="file" class="form-control slider-image" name="slider_image[]" accept="image/*">';
    html += '<img class="slider-preview" alt="Slider Image Preview" width="100%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-slider"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#slider-table tbody').append(html);
  } else {
    alert('Reached Max Slider');
  }
});

$(document).on('click', '.delete-slider', function (e) {
  console.log('delete-slider');
  $(this).closest('tr').remove();
});

$(document).on('change', '.slider-image', function (e) {
  readURL(this, $(this).closest('tr').find('.slider-preview'));
});

/** SLIDER SCRIPT **/

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
    html += '<td><input type="file" class="form-control image-content-detail-image3" name="image_content_detail_image3[]" accept="image/*">';
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