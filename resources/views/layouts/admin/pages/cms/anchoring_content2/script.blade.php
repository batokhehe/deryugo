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

$(document).on('change', '#detail1-image', function (e) {
  readURL(this, $('#detail1-preview'));
});

/** CONTENT 2 DETAIL 1 SCRIPT **/

$(document).on('click', '#add-detail1-item', function (e) {
	console.log('add-content1-detail1');
  var html='';
  var contentCount = $('#detail1-item-table tr').length;
  console.log(contentCount);
  if(contentCount < 5){
    html += '<tr>';
    html += '<td><textarea rows="2" class="form-control" name="item_title[0][]" placeholder="Detail 1 Item Title"></textarea></td>';
    html += '<td><textarea rows="4" class="form-control" name="item_description[0][]" placeholder="Detail 1 Item Description"></textarea></td>';
    html += '<td><input type="file" class="form-control detail1-item-image" name="item_image[0][]" accept="image/*">';
    html += '<img class="detail1-item-preview" src="#" alt="Detail 1 Item Image Preview" width="100%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-detail1-item"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#detail1-item-table tbody').append(html);
  } else {
    alert('Reached Max Content');
  }
});

$(document).on('click', '.delete-detail1-item', function (e) {
  console.log('delete-detail1-item');
  $(this).closest('tr').remove();
});

$(document).on('change', '.detail1-item-image', function (e) {
  readURL(this, $(this).closest('tr').find('.detail1-item-preview'));
});

$(document).on('change', '#detail1-image', function (e) {
  readURL(this, $('#detail1-preview'));
});

/** CONTENT 2 DETAIL 1 SCRIPT **/

/** CONTENT 2 DETAIL 2 SCRIPT **/

$(document).on('click', '#add-detail2-item', function (e) {
  console.log('add-content2-detail2');
  var html='';
  var contentCount = $('#detail2-item-table tr').length;
  console.log(contentCount);
  if(contentCount < 5){
    html += '<tr>';
    html += '<td><textarea rows="2" class="form-control" name="item_title[1][]" placeholder="Detail 2 Item Title"></textarea></td>';
    html += '<td><textarea rows="4" class="form-control" name="item_description[1][]" placeholder="Detail 2 Item Description"></textarea></td>';
    html += '<td><input type="file" class="form-control detail2-item-image" name="item_image[1][]" accept="image/*">';
    html += '<img class="detail2-item-preview" src="#" alt="Detail 2 Item Image Preview" width="100%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-detail2-item"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#detail2-item-table tbody').append(html);
  } else {
    alert('Reached Max Content');
  }
});

$(document).on('click', '.delete-detail2-item', function (e) {
  console.log('delete-detail2-item');
  $(this).closest('tr').remove();
});

$(document).on('change', '.detail2-item-image', function (e) {
  readURL(this, $(this).closest('tr').find('.detail2-item-preview'));
});

$(document).on('change', '#detail2-image', function (e) {
  readURL(this, $('#detail2-preview'));
});

/** CONTENT 2 DETAIL 2 SCRIPT **/

/** CONTENT 3 DETAIL 3 SCRIPT **/

$(document).on('click', '#add-detail3-item', function (e) {
  console.log('add-content3-detail3');
  var html='';
  var contentCount = $('#detail3-item-table tr').length;
  console.log(contentCount);
  if(contentCount < 5){
    html += '<tr>';
    html += '<td><textarea rows="3" class="form-control" name="item_title[2][]" placeholder="Detail 3 Item Title"></textarea></td>';
    html += '<td><textarea rows="4" class="form-control" name="item_description[2][]" placeholder="Detail 3 Item Description"></textarea></td>';
    html += '<td><input type="file" class="form-control detail3-item-image" name="item_image[2][]" accept="image/*">';
    html += '<img class="detail3-item-preview" src="#" alt="Detail 3 Item Image Preview" width="100%" /></td>';
    html += '<td><a class="btn btn-sm btn-danger delete-detail3-item"><i class="fa fa-trash-o"></i></a></td>';
    html += '</tr>';

    $('#detail3-item-table tbody').append(html);
  } else {
    alert('Reached Max Content');
  }
});

$(document).on('click', '.delete-detail3-item', function (e) {
  console.log('delete-detail3-item');
  $(this).closest('tr').remove();
});

$(document).on('change', '.detail3-item-image', function (e) {
  readURL(this, $(this).closest('tr').find('.detail3-item-preview'));
});

$(document).on('change', '#detail3-image', function (e) {
  readURL(this, $('#detail3-preview'));
});

/** CONTENT 3 DETAIL 3 SCRIPT **/

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