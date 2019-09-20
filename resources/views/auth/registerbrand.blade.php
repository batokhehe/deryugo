<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/> 
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"> 
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css"> 
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	 
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> 
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> 
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/bower_components/select2/dist/css/select2.min.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/css/main.css') }}">

</head>
<body>

	<div class="limiter">



		<div class="container-login100">

			<div class="login100-more1">
			<a class="" href="/"><img src="{{ url('/assets/images/DERYUGO.png') }}" alt="" style="width:35%; padding-left:20px;padding-top:20px;"></a>
			</div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-50">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
				{{ csrf_field() }}
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>
					<input type="hidden" name="type" value="1">
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Brand</span>
						<input class="input100" type="text" name="name" placeholder="Name">
						@if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email">
						@if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Website is required">
						<span class="label-input100">Website</span>
						<input class="input100" type="text" name="website" placeholder="Website">
						@if ($errors->has('website'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('website') }}</strong>
                            </span>
                        @endif
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Social Media is required">
						<span class="label-input100">Social Media</span>
						<input class="input100" type="text" name="social_media" placeholder="Social Media">
						@if ($errors->has('social_media'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('social_media') }}</strong>
                            </span>
                        @endif
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Phone is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="text" name="phone" placeholder="Phone">
						@if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
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

					<div class="w-full p-b-33">
						<div class="validate-input" data-validate="Service is required" style="height: 30px;">
						<span class="label-input100">Type of Service</span>
						</div>
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" value="0" name="service[]">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Socmed Management
								</span>
							</label>
							<input class="input-checkbox100" id="ckb2" type="checkbox" value="1" name="service[]">
							<label class="label-checkbox100" for="ckb2">
								<span class="txt1">
									Socmed Analytic
								</span>
							</label>
							<input class="input-checkbox100" id="ckb3" type="checkbox" value="2" name="service[]">
							<label class="label-checkbox100" for="ckb3">
								<span class="txt1">
									Web Design Services
								</span>
							</label>
							<input class="input-checkbox100" id="ckb4" type="checkbox" value="3" name="service[]">
							<label class="label-checkbox100" for="ckb4">
								<span class="txt1">
									Influencer Reccommendation
								</span>
							</label>
							<input class="input-checkbox100" id="ckb5" type="checkbox" value="4" name="service[]">
							<label class="label-checkbox100" for="ckb5">
								<span class="txt1">
									Influencer-Brand Matching Tools
								</span>
							</label>
						</div>
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
