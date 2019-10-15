<script type="text/javascript">

  $(document).on('change', '#image', function (e) {
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
</script>