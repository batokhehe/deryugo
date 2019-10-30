<!DOCTYPE html>
<html lang="en">

<head>
  <title>DERYUGO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
  <!-- <link href="fonts/GothamLight.ttf" rel="stylesheet"> -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ url('/assets/fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/css/aos.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">

  <style>
    h1 {
      font-family: gotham-light;
      font-style: bold;
    }
    
    .nopad {
    	padding-left: 0 !important;
    	padding-right: 0 !important;
    }
    /*image gallery*/
    .image-checkbox {
    	cursor: pointer;
    	box-sizing: border-box;
    	-moz-box-sizing: border-box;
    	-webkit-box-sizing: border-box;
    	border: 4px solid transparent;
    	margin-bottom: 0;
    	outline: 0;
    }
    .image-checkbox input[type="checkbox"] {
    	display: none;
    }
    
    .image-checkbox-checked {
    	border-color: #4783B0;
    }
    .image-checkbox .fa {
      position: absolute;
      color: #4A79A3;
      background-color: #fff;
      padding: 10px;
      top: 0;
      right: 0;
    }
    .image-checkbox-checked .fa {
      display: block !important;
    }
    .hidden {
        display: none !important;
    }
  </style>
</head>

<body>
  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Navbar Area -->
    <div class="oneMusic-main-menu">
      <!-- <div class="container"> -->
      <!-- Menu -->
      <nav class="site-navbar" role="banner">
        <div class="container-fluid" style="max-width: 1010px;">
          <div class="row align-items-center">
            <div class="col-11 col-xl-2">
              <h1 class="logo"><a class="navbar-brand" href="/progress/public"><img src="{{ url('/assets/images/DERYUGO.png') }}" alt="Image" class="img-fluid" style="max-width: 150px;"></a></h1>
            </div>
            <div class="col-md-10 d-none d-xl-block">
              <nav class="site-navigation" role="navigation">
                <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block text-right">
                  <!-- <li class="active"><a href="index.html">Home</a></li> -->
                  <li><a href="/progress/public/anchoring/#about" data-target="#about">About Us</a></li>
                  <li><a href="/progress/public/anchoring/#service" data-target="#service">Our Services</a></li>
                  <li><a href="/progress/public/anchoring/#trendnow" data-target="#trendnow">Trend Now</a></li>
                  <li><a href="/progress/public/anchoring/#influencer" data-target="#influencer">Inspiring Influencer</a></li>
                  <li><a href="/progress/public/contact">Contact Us</a></li>
                  <li class="cta"><a href="{{ route('register.influencer') }}">Register</a></li>
                  
                </ul>
                
              </nav>
            </div>
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#"
                class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
      </nav>
    </div>
    <!-- </div> -->
  </header>

  <!-- ##### Header Area End ##### -->

  @yield('content')

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer">
            <h1 class="logo" style="width: 200px;margin: 0 auto;"><a class="navbar-brand" href="index.html"><img src="{{ url('/assets/images/DERYUGO.png') }}" alt="Image" class="img-fluid"></a></h1>
            <h4 style="font-size: 19px;text-align: center;">Make That Something</h4>
            <div class="text-center">
              <a href="#" class="btn-custom3" data-aos="fade-up" data-aos-delay="400" style="margin-top: 20px;margin-bottom: 20px;"><span>Work
                  with us</span></a>
            </div>
          </div>
        </div>
        
        
        <div class="col-md-12 text-center">
          <p>
            <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
            <a href="#" class="p-2"><span class="icon-twitter"></span></a>
            <a href="#" class="p-2"><span class="icon-youtube"></span></a>
            <a href="https://www.instagram.com/deryugoid/" class="p-2"><span class="icon-instagram"></span></a>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="border-top" style="color:white;">
            <p>
              Copyright &copy; <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  </div>

  <script src="{{ url ('/assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ url ('/assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url ('/assets/js/jquery-ui.js') }}"></script>
  <script src="{{ url ('/assets/js/popper.min.js') }}"></script>
  <script src="{{ url ('/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ url ('/assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url ('/assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ url ('/assets/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ url ('/assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url ('/assets/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ url ('/assets/js/aos.js') }}"></script>
  <script src="{{ url ('/assets/js/main.js') }}"></script>

  <!-- All Plugins js -->
  <script src="{{ url ('/assets/js/plugins.js') }}"></script>
  <!-- Active js -->
  <script src="{{ url ('/assets/js/active.js') }}"></script>
  <script>
    $num = $('.my-card').length;
    console.log($num);
    $even = Math.ceil($num / 8);
    $odd = Math.ceil(($num + 4) / 8);
    console.log($even + ' ' + $odd);

    if ($num % 2 == 0) {
      $('.my-card:nth-child(' + $even + ')').addClass('active');
      $('.my-card:nth-child(' + $even + ')').prevAll().addClass('prev');
      // $('.my-card:nth-child(' + $even + ')').prev().prev().addClass('prev');
      $('.my-card:nth-child(' + $even + ')').nextAll().addClass('next');
      // $('.my-card:nth-child(' + $even + ')').next().next().addClass('next');
    } else {
      $('.my-card:nth-child(' + $odd + ')').addClass('active');
      $('.my-card:nth-child(' + $odd + ')').prevAll().addClass('prev');
      // $('.my-card:nth-child(' + $odd + ')').prev().prev().addClass('prev');
      $('.my-card:nth-child(' + $odd + ')').nextAll().addClass('next');
      // $('.my-card:nth-child(' + $odd + ')').next().next().addClass('next');
    }

    $('.my-card').hover(function () {
      $slide = $('.active').width() - 50;
      console.log($('.active').position().left);

      // if ($(this).hasClass('next')) {
      //   $('.card-carousel').stop(false, true).animate({
      //     left: '-=' + $slide
      //   });
      // } else if ($(this).hasClass('prev')) {
      //   $('.card-carousel').stop(false, true).animate({
      //     left: '+=' + $slide
      //   });
      // }

      $(this).removeClass('prev next');
      $(this).siblings().removeClass('prev active next');
      $(this).siblings().find('a').hide();
      $(this).siblings().find('p').hide();

      $index = $(this).index();
      console.log('index : ' + $index);

      $(this).addClass('active');
      $(this).find('a').show();
      $(this).find('p').show();
      $(this).prevAll().addClass('prev');
      // $(this).prev().prev().addClass('prev');
      // if (($num - $index) < ($num - ($num - 3))) {
      //   $(this).prev().prev().prev().addClass('prev');
      // }
      // if (($num - $index) < ($num - ($num - 2))) {
      //   $(this).prev().prev().prev().prev().addClass('prev');
      // }

      $(this).nextAll().addClass('next');
      // $(this).next().next().addClass('next');
      // if (($num - $index) > ($num - 2)) {
      //   $(this).next().next().next().addClass('next');
      // }
      // if (($num - $index) > ($num - 1)) {
      //   $(this).next().next().next().next().addClass('next');
      // }
    });
  </script>
  @if(Request::is('anchoring'))
  <script>
      $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
          });
        } // End if
        });
      });
  </script>
  @endif
  
    <script>
        $(".image-checkbox").each(function () {
          if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
            $(this).addClass('image-checkbox-checked');
          }
          else {
            $(this).removeClass('image-checkbox-checked');
          }
        });
        
        // sync the state to the input
        $(".image-checkbox").on("click", function (e) {
          $(this).toggleClass('image-checkbox-checked');
          var $checkbox = $(this).find('input[type="checkbox"]');
          $checkbox.prop("checked",!$checkbox.prop("checked"))
        
          e.preventDefault();
        });
    </script>

</body>

</html>
