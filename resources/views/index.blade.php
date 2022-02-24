@extends('layouts.apps')

@section('content')
	<!-- //w3l-header -->
	<!-- /breadcrumbs -->
	<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="/">Home</a> » <span class="breadcrumb_last" aria-current="page">About</span>
		</div>
	</nav>

<!-- feature1 -->
<section class="w3l-feature-1">
	<div class="feature-1sec py-5">
		<div class="container py-lg-5">
			<div class="feature-1-content">
				<img src="assets/images/logo.jpeg" class="img-fluid" alt="" />
				<h3 class="hny-title mt-4">Welcome to Our itps</h3>
				<p class="mt-2">Each year we help hundreds of students find internships, coaching sessions before the actual interview
                    with our partner companies, delivery of the signed internship agreement</p>
                <p>Here at itps, our students’ opinion matters, we regularly followup with e-mails, check on them regularly  and organise surveys…</p>
				<div class="read">
					<a class="btn mt-4" href="register">SignUp Here</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //feature1 -->
	<section class="w3l-content-4">
		<!-- /content-6-section -->
		<div class="content-4-main py-5">
			<div class="container py-lg-5">
				<div class="content-info-in row">
					<div class="content-right col-lg-6 pl-lg-4">
                        <h4>WHAT WE OFFER:</h4>
                        <hr>
						<div class="row content4-right-grids mb-lg-5 mb-4">

							<div class="col-md-2 content4-right-icon">
								<div class="content4-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
							<div class="col-md-10 content4-right-info">
								<h6><a href="#">Seek</a></h6>
								<p>We Seek to secure the best ITP for potential IT students</p>
							</div>

						</div>
						<div class="row content4-right-grids mb-lg-5 mb-4">
							<div class="col-md-2 content4-right-icon">
								<div class="content4-icon">
									<span class="fa fa-pencil"></span>
								</div>
							</div>
							<div class="col-md-10 content4-right-info">
								<h6><a href="#">
										Guide</a></h6>
								<p>We guide the IT students on how to write IT report.
                                   </p>
							</div>

						</div>
						<div class="row content4-right-grids mb-lg-5 mb-4">
							<div class="col-md-2 content4-right-icon">
								<div class="content4-icon">
									<span class="fa fa-handshake-o"></span>
								</div>
							</div>
							<div class="col-md-10 content4-right-info">
								<h6><a href="#">
										Support</a></h6>
								<p>We Support on how to write final year project report.</p>
							</div>

						</div>
					</div>
					<div class="content-left col-lg-6 pl-lg-4">
						<h6 class="sub-title">
							Why Choose Us</h6>
						<br>

                        <div class="col-md-10 content4-right-info">
                            <h6><a href="#">
                                    Our Delivery</a></h6>
                            <p>We deliver what we promise </p>
                        </div>
                        <div class="col-md-10 content4-right-info">
                            <h6><a href="#">
                                    We Care</a></h6>
                            <p>We give 100% care to our customers, result shows</p>
                        </div>
                        <div class="col-md-10 content4-right-info">
                            <h6><a href="#">
                                    Our Team</a></h6>
                            <p>We have competent hands to handle your work</p>
                        </div>
                        <div class="col-md-10 content4-right-info">
                            <h6><a href="#">
                                    Experience </a></h6>
                            <p>we have proven record of successful Internship seekers </p>
                        </div>

					</div>


				</div>

			</div>
		</div>
	</section>
	<!-- //content-6-section -->
	<!--/team-sec-->
	{{--<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
						<div class="row team-row">
							<div class="col-lg-3 col-md-6 team-left">
								<div class="title-content text-left">
									<h6 class="sub-title">Expert Doctors</h6>
									<h3 class="hny-title">Our Team</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sunt in culpa
										qui
										officia sed deserunt mollit anim id est laborum mollit anim id est nulla.</p>
								</div>
							</div>
							<!-- end team member -->

							<div class="col-lg-3 col-md-6 team-wrap">

								<div class="team-info text-left">
									<div class="column position-relative">
										<a href="#url"><img src="assets/images/team2.jpg" alt=""
												class="img-fluid team-image" /></a>
									</div>
									<div class="column">
										<h3 class="name-pos"><a href="#url">Theresa Cruz</a></h3>
										<p>President & CEO</p>
										<div class="social">
											<div class="social-left">
												<a href="#facebook" class="facebook"><span class="fa fa-facebook"
														aria-hidden="true"></span></a>
												<a href="#twitter" class="twitter"><span class="fa fa-twitter"
														aria-hidden="true"></span></a>
											</div>
											<div class="social-right">
												<a href="#email" class="email"><span
														class="fa fa-envelope-o"></span></a>
												<a href="#phone" class="phone"><span class="fa fa-phone"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end team member -->

							<div class="col-lg-3 col-md-6 team-wrap">
								<div class="team-info text-left">
									<div class="column position-relative">
										<a href="#url"><img src="assets/images/team1.jpg" alt=""
												class="img-fluid team-image" /></a>
									</div>
									<div class="column">
										<h3 class="name-pos"><a href="#url">Scott Colon</a></h3>
										<p>Doctor</p>
										<div class="social">
											<div class="social-left">
												<a href="#facebook" class="facebook"><span class="fa fa-facebook"
														aria-hidden="true"></span></a>
												<a href="#twitter" class="twitter"><span class="fa fa-twitter"
														aria-hidden="true"></span></a>
											</div>
											<div class="social-right">
												<a href="#email" class="email"><span
														class="fa fa-envelope-o"></span></a>
												<a href="#phone" class="phone"><span class="fa fa-phone"></span></a>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!-- end team member -->
							<!-- end team member -->

							<div class="col-lg-3 col-md-6 team-wrap">
								<div class="team-info text-left">
									<div class="column position-relative">
										<a href="#url"><img src="assets/images/team4.jpg" alt=""
												class="img-fluid team-image" /></a>
									</div>
									<div class="column">
										<h3 class="name-pos"><a href="#url">Bertha Sherman</a></h3>
										<p>Doctor </p>
										<div class="social">
											<div class="social-left">
												<a href="#facebook" class="facebook"><span class="fa fa-facebook"
														aria-hidden="true"></span></a>
												<a href="#twitter" class="twitter"><span class="fa fa-twitter"
														aria-hidden="true"></span></a>
											</div>
											<div class="social-right">
												<a href="#email" class="email"><span
														class="fa fa-envelope-o"></span></a>
												<a href="#phone" class="phone"><span class="fa fa-phone"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	</section>--}}
	<!--//team-sec-->
		<!-- grids -->
		{{--<section class="grids-1 py-5">
			<div class="grids py-lg-5">
				<div class="container">
					<h6 class="sub-title">We care your smile</h6>
					<h3 class="hny-title">Featured Services
					</h3>

					<div class="row text-center mt-lg-5 mt-4">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="column">
								<a href="#single"><img src="assets/images/g1.jpg" alt="" class="img-responsive" /></a>
								<h4><a href="#single">Periodontal Therapy</a></h4>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mt-sm-0 mt-4">
							<div class="column">
								<a href="#single"><img src="assets/images/g2.jpg" alt="" class="img-responsive" /></a>
								<h4><a href="#single">Cosmetic Dentistry</a></h4>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mt-md-0 mt-4">
							<div class="column">
								<a href="#single"><img src="assets/images/g3.jpg" alt="" class="img-responsive" /></a>
								<h4><a href="#single">Dental Implants</a></h4>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mt-lg-0 mt-4">
							<div class="column">
								<a href="#single"><img src="assets/images/g4.jpg" alt="" class="img-responsive" /></a>
								<h4><a href="#single">Pediatric Dentistry</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>--}}
		<!-- //grids -->
	<!-- footer-66 -->
@endsection
