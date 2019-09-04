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
			<a class="" href="/progress/public"><img src="{{ url('/assets/images/DERYUGO.png') }}" alt="" style="width:35%; padding-left:20px;padding-top:20px;"></a>
			</div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-50 container">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
					<span class="login100-form-title p-b-59">
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
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>

						<a href="/login" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
					@foreach($interests as $interest)
					<input type="hidden" name="interest[]" value="{{ $interest }}">
					@endforeach
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
</script>
</body>
</html>
