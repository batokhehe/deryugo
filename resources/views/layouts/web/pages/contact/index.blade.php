@extends('layouts.web.master.master')
@section('content')
<section class="site-section2">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-uppercase text-dark font-weight-bold mb-sm-5 mb-4">Get In Touch</h3>
			<div class="address row mb-xl-5">
				<div class="col-lg-4 address-grid-w3l">
					<div class="address-info p-5">
						<div class="row">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6 class="ad-info text-uppercase mb-2">Address</h6>
								<p> California, USA
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 address-grid-w3l my-lg-0 my-4">
					<div class="address-info p-5">
						<div class="row">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6 class="ad-info text-uppercase mb-2">Email</h6>
								<p>
									<a href="mailto:example@email.com"> mail@example.com</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 address-grid-w3l">
					<div class="address-info p-5">
						<div class="row">

							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6 class="ad-info text-uppercase mb-2">Phone</h6>
								<p>+1 234 567 8901</p>
							</div>
						</div>
					</div>
				</div>
			</div>
      <div class="row">
  			<div class="col-md-6">
  				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" width="100%" height="100%"></iframe>
  			</div>
  			<div class="col-md-6 main_grid_contact">
  				<div class="form">
  					<h4 class="text-center text-uppercase text-dark font-weight-bold mb-sm-5 mb-4">Send us a message</h4>
  					<form action="#" method="post">
  						<div class="form-group">
  							<label class="mb-2">Name</label>
  							<input class="form-control" type="text" name="Name" placeholder="" required="">
  						</div>
  						<div class="form-group">
  							<label class="mb-2">Email</label>
  							<input class="form-control" type="email" name="Email" placeholder="" required="">
  						</div>
  						<div class="form-group">
  							<label class="mb-2">Message</label>
  							<textarea class="form-control" id="textarea" name="message" placeholder=""></textarea>
  						</div>
  						<div class="input-group1">
  							<input class="form-control" type="submit" value="Submit">
  						</div>
  					</form>
  				</div>
  			</div>
  		</div>
      <div class="container py-xl-5 py-lg-3">
  			<h3 class="tittle text-center text-uppercase text-dark font-weight-bold mb-sm-4 mb-3">
  				Subscribe</h3>
  			<p style="text-align:center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
  				totam rem aperiam Sed
  				ut perspiciatis unde omnis iste natus error sit.</p>
  			<form action="#" method="post" style="text-align:center">
  				<input type="email" name="email" placeholder="Enter your Email..." required="">
  				<input type="submit" value="Submit">
  			</form>
  		</div>
		</div>
	</section>
@endsection
