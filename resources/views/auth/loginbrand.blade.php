<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/fonts/font-awesome.min.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	 -->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/bower_components/select2/dist/css/select2.min.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/main.css') }}">

</head>
<body>

	<div class="limiter">



		<div class="container-login100">

			<div class="login100-more2">
			<a class="" href="/"><img src="{{ url('/assets/images/DERYUGO.png') }}" alt="" style="width:35%; padding-left:20px;padding-top:20px;"></a>
			</div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-50">
				<form class="login100-form validate-form" action="{{ route('login') }}" method="post">
					{{ csrf_field() }}
					<span class="login100-form-title p-b-59">
						Sign In
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" id="email" placeholder="Email">
						@if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" id="email" name="password" placeholder="*************">
						@if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Remember me
									</a>
								</span>
							</label>
						</div>
						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>

					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign In
							</button>
						</div>

						<a href="{{ route('register.brand') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign Up
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
					<!-- <div class="w-full text-center" style="padding-top: 40px;">
						<span class="txt2">
							or sign in using
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

<!-- 	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script> -->

</body>
</html>