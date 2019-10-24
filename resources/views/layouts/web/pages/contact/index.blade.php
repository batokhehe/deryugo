@extends('layouts.web.master.master')
@section('content')
<section class="" data-aos="fade">
	<div data-spy="scroll" class="site-section scrollspy-example" style="background-image: url('/assets/images/aboutus.jpg'); padding-top: 280px;">
		<div class="container" style="width: 70%;">
			<div class="col-md-6 aos-init aos-animate" data-aos="fade-up">
				<div class="tittle text-center text-uppercase text-dark font-weight-bold mb-sm-5 mb-4"">
					<h3 style="color:#FFF;">Get In Touch</h3>
				</div>
			</div>
		</div>
    </div>
		<div class="container py-xl-5 py-lg-3">
			<div class="address row mb-xl-5">
				<div class="col-lg-4 address-grid-w3l">
					<div class="address-info" style="padding: 1rem !important;">
						<div class="row">
							<div class="col-md-3 address-left text-center">
								<i class="fa fa-map-marker" style="font-size: 50px;"></i>
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
					<div class="address-info" style="padding: 1rem !important;">
						<div class="row">
							<div class="col-md-3 address-left text-center">
								<i class="fa fa-envelope" style="font-size: 50px;"></i>
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
					<div class="address-info" style="padding: 1rem !important;">
						<div class="row">

							<div class="col-md-3 address-left text-center">
								<i class="fa fa-phone" style="font-size: 50px;"></i>
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
			<div class="col-md-12" style="height: 500px;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" width="100%" height="100%" style="border-radius: 20px;"></iframe>
			</div>
			<div class="col-md-12 main_grid_contact">
				<div class="site-section2 form">
					<h4 class="text-center text-uppercase text-dark font-weight-bold mb-sm-5 mb-4">Send us a message</h4>
					<form action="#" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="mb-2">Name</label>
									<input class="form-control" type="text" name="Name" placeholder="" required="" style="border-radius: 20px;border: 2px solid;">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="mb-2">Email</label>
									<input class="form-control" type="email" name="Email" placeholder="" required="" style="border-radius: 20px;border: 2px solid;">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="mb-2">Message</label>
									<textarea class="form-control" id="textarea" name="message" placeholder="" style="border-radius: 20px;border: 2px solid;"></textarea>
								</div>
							</div>
							<div class="text-center" style="margin: 0 auto;">
								<a href="#" class="btn-custom1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400" style="margin-top: 20px;margin-bottom: 20px;">
								<span>Submit</span></a>
							</div>



						</div>
							
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="site-section2" style="background-color: #000000;">
		<div class="container">
			<div class="col-md-12">
				<form class="card card-sm" style="width: 80%;margin: 0 auto; border-radius: 30px;">
					<div class="row no-gutters align-items-center" style="width: 96%;margin: 0 auto;">
						<!-- <div class="col-auto">
							<i class="fas fa-search h4 text-body"></i>
						</div> -->
						<!--end of col-->
						<div class="col">
							<input class="form-control form-control-sm form-control-borderless" type="search" placeholder="What's Happening !" style="border-radius: 20px;">
						</div>
						<!--end of col-->
						<div class="col-auto">
							<button class="btn-sm btn-success" type="submit" style="border-radius: 30px; background-color: #E11F27;border-color: #E11F27;width: 100px;" >Let's Go</button>
						</div>
						<!--end of col-->
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
