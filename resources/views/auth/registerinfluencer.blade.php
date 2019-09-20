<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
  <link rel="stylesheet" href="{{ url('/assets/css/main.css') }}">
  
  <style>
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

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more">
			<a class="" href="/"><img src="{{ url('/assets/images/DERYUGO.png') }}" alt="" style="width:35%; padding-left:20px;padding-top:20px;"></a>
			</div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-50 container">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
					<span class="login100-form-title p-b-59" style="padding-top: 30px;padding-bottom: 30px;">
						Sign Up
					</span>
					<input type="hidden" name="type" value="0">
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name" id="name">
						@if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Birthdate</span>
						<input class="input100" type="text" name="birthdate" placeholder="Birthdate" id="birthdate">
						@if ($errors->has('birthdate'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('birthdate') }}</strong>
                            </span>
                        @endif
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Gender</span><br/>
						<input type="radio" name="gender" value="0"> Male &nbsp;
                        <input type="radio" name="gender" value="1"> Female<br>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email" id="email">
						@if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************" id="password">
						@if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" id="password-confirm" name="password_confirmation" placeholder="*************">
						@if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
						<span class="focus-input100"></span>
					</div>

					<!-- <div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>
					</div> -->

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="#" class="login100-form-btn" style="background: #3f404600;" data-aos="fade-up" data-aos-delay="500" data-toggle="modal" data-target="#portfolioModal1">
                  <span>Sign Up</span>
              </a>
							<!--<button class="login100-form-btn" type="submit" value="Register">-->
							<!--	Sign Up-->
							<!--</button>-->
						</div>
						
						<a href="{{ route('login.influencer') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							<span>Sign in</span>
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
						<div class="modal fade portfolioModal" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" style="max-width: 90%;">
                <div class="modal-content" style="background-color: rgba(252, 252, 252, 0.8);">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h5 class="text-white" style="margin-bottom: 5px;">Before you step in to the next page, <br/>please choose your interest</h5>
                    <div class="row mb-5">
                        @php $i = 1; $j = 1; @endphp
                        @foreach($interests as $interest)
                        @if($i == 1)
                        <div class="col-md-6 mt-5" data-aos="fade" data-aos-delay="200">
                        <div class="row">
                        @endif
                        @if($i == 1 || $i == 4 || $i == 7)
                        <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="600" style="padding-right: 0px;padding-left: 5px;">
                        @endif
                        <div class="hovereffect nopad text-center">
                            <label class="image-checkbox">
                            <img src="{{ url('/assets/images/' . $interest->image) }}" alt="Image" class="img-fluid img-responsive">
                            <input type="checkbox" name="interest[]" value="{{ $interest->id }}" />
                            <i class="fa fa-check hidden"></i>
                            <div class="overlay">
                                <h2>{{ $interest->name }}</h2>
                            </div>
                            </label>
                        </div>
                        @if($j == 18)
                        <button type="submit" class="btn-custom pull-right" data-aos="fade-up" data-aos-delay="500" style="margin-top: 30px;float: right;">
                        <span>
                            JOIN NOW
                        </span>
                        </button>
                        @endif
                        @if($i == 3 || $i == 6 || $i == 9)
                        </div>
                        @endif
                        @if($i % 9 == 0)
                        </div>
                        </div>
                        @php $i = 0 @endphp
                        @endif
                        @php $i++; $j++; @endphp
                        @endforeach
                    </div>
                    </div>
                  </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.portfolioModal -->
					</div>
					<!-- <div class="w-full text-center" style="padding-top: 40px;">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="w-full login100-form-social flex-c-m" style="padding-top: 30px;">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg3 m-r-5">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg4 m-r-5">
							<i class="fa fa-youtube" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>
			</div>
		</div>
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
        $('#birthdate').datepicker({
            format: 'dd-M-yyyy',
            endDate: '+0d' // there's no convenient "right now" notation yet
        });
        $('#birthdate').on('changeDate', function(ev){
            $(this).datepicker('hide');
        });
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
