<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<base href="../" />

	<title>Login - SIINas</title>

	<!-- include common vendor stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>node_modules/bootstrap/dist/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>node_modules/@fortawesome/fontawesome-free/css/regular.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>node_modules/@fortawesome/fontawesome-free/css/brands.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>node_modules/@fortawesome/fontawesome-free/css/solid.css">



	<!-- include vendor stylesheets used in "Login" page. see "application/views/default/pages/partials/page-login/@vendor-stylesheets.hbs" -->


	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/css/ace-font.css">



	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/css/ace.css">


	<link rel="icon" type="image/png" href="assets/favicon.png" />

	<!-- "Login" page styles specific to this page for demo purposes -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets_admin/application/views/default/pages/partials/page-login/@page-style.css">
</head>

<body>
	<div class="body-container">

		<div class="main-container container">

			<div role="main" class="main-content minh-100 justify-content-center">
				<div class="p-2 p-md-4">
					<div class="row justify-content-center">
						<div class="shadow radius-1 overflow-hidden bg-white col-12 col-lg-5">

							<div class="row">

								<div class="col-12 py-lg-5 bgc-white px-0">
									<!-- you can also use tab links -->
									<ul class="d-none mt-n4 mb-4 nav nav-tabs nav-tabs-simple justify-content-end" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#id-tab-login" role="tab" aria-controls="login" aria-selected="true">
												Login
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#id-tab-signup" role="tab" aria-controls="signup" aria-selected="false">
												Signup
											</a>
										</li>
									</ul>


									<div class="tab-content tab-sliding border-0 p-0" data-swipe="right">

										<div class="tab-pane active show mh-100 px-3 px-lg-0 pb-3" id="id-tab-login">
											

											<div class="text-secondary-m1 my-4 text-center">
												<a href="html/dashboard.html"><i class="fa fa-cogs text-success-m2 text-200 mb-4"></i></a>
												<h1 class="text-170">
													<span class="text-blue-d1">Login <span class="text-80 text-dark-tp3">SIINas</span></span>
												</h1>

												Selamat datang di Sistem Informasi Industri Nasional
											</div>
											<?php
											echo $this->session->flashdata('message');
											?>

											<form class="form-row mt-4" method="POST" action="">
												<div class="form-group col-md-8 offset-md-2">
													<div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
														<input name="username" type="text" class="form-control form-control-lg pr-4 shadow-none has-content" id="id-login-username" autocomplete="off">
														<i class="fa fa-user text-grey-m2 ml-n4"></i>
														<label class="floating-label text-grey-l1 text-100 ml-n3" for="id-login-username">Username</label>
													</div>
												</div>

												<div class="form-group mt-2 mt-md-1 col-md-8 offset-md-2">
													<div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
														<input name="password" type="password" class="form-control form-control-lg pr-4 shadow-none has-content" id="id-login-password" autocomplete="off">
														<i class="fa fa-key text-grey-m2 ml-n4"></i>
														<label class="floating-label text-grey-l1 text-100 ml-n3" for="id-login-password">Password</label>
													</div>
												</div>

												<div class="form-group col-md-8 offset-md-2">

													<button type="submit" class="btn btn-info btn-block btn-md btn-bold mt-2 mb-4">
														Sign In
													</button>
												</div>
											</form>

											
										</div>

										<div class="tab-pane mh-100 px-3 px-lg-0 pb-3" id="id-tab-forgot" data-swipe-prev="#id-tab-login">
											<div class="position-tl ml-3 mt-2">
												<a href="#" class="btn btn-light-default bg-transparent" data-toggle="tab" data-target="#id-tab-login"><i class="fa fa-arrow-left"></i></a>
											</div>

											

											<form class="form-row mt-4">
												<div class="form-group col-md-8 offset-md-2">
													<label class="text-secondary-m1 mb-3">
														Enter your email address and we'll send you the instructions:
													</label>
													<div class="d-flex align-items-center">
														<input type="email" class="form-control form-control-lg pr-4 shadow-none" id="id-recover-email" placeholder="Email" autocomplete="off">
														<i class="fa fa-envelope text-grey-m2 ml-n4"></i>
													</div>
												</div>


												<div class="form-group mt-1 col-md-8 offset-md-2">
													<button type="button" class="btn btn-warning btn-block btn-md btn-bold mt-2 mb-4">
														Continue
													</button>
												</div>
											</form>


											<div class="form-row w-100">
												<div class="col-12 d-flex flex-column align-items-center justify-content-center col-md-8 offset-md-2">

													<hr class="brc-default-m4 mt-0 mb-2 w-100">

													<div class="p-0 px-md-2 text-dark-tp4 my-3">
														<a class="text-blue-m2 text-600" data-toggle="tab" data-target="#id-tab-login" href="#">
															Back to Login
														</a>
													</div>


												</div>
											</div>
										</div>

									</div><!-- .tab-content -->
								</div>

							</div>

						</div>
					</div>

					<div class="d-lg-none my-3 text-white-tp1 text-center">
						<i class="fa fa-leaf text-success-l3 mr-1 text-110"></i> Ace Company © 2020
					</div>
				</div>
			</div><!-- /main -->

		</div><!-- /.main-container -->

		<!-- include common vendor scripts used in demo pages -->
		<script type="text/javascript" src="http://localhost/project_pns/node_modules/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="http://localhost/project_pns/node_modules/popper.js/dist/umd/popper.js"></script>
		<script type="text/javascript" src="http://localhost/project_pns/node_modules/bootstrap/dist/js/bootstrap.js"></script>


		<!-- include vendor scripts used in "Login" page. see "application/views/default/pages/partials/page-login/@vendor-scripts.hbs" -->


		<!-- include Ace script -->
		<script type="text/javascript" src="http://localhost/project_pns/dist/js/ace.js"></script>


		<script type="text/javascript" src="http://localhost/project_pns/assets_admin/js/demo.js"></script>
		<!-- this is only for Ace's demo and you don't need it -->

		<!-- "Login" page script to enable its demo functionality -->

	</div><!-- /.body-container -->




<script>
	jQuery(function($) {
		//because "Login Here" and "Signup now" links are not inside a "UL" or ".nav", they preserve "active" class
		//and we should remove that, to continue moving between tab-panes
		$('a[data-toggle="tab"]').on('click', function() {
			$('a[data-toggle="tab"]').removeClass('active');
		});

		//start/show carousel to change backgrounds
		$('#id-start-carousel').on('click', function(e) {
			e.preventDefault();
			$('.carousel-indicators').removeClass('d-none');
			$('#loginBgCarousel').carousel(1);
		});

		//remove the background/carousel section
		$('#id-remove-carousel').on('click', function(e) {
			e.preventDefault();
			var row = $('.carousel').parent().parent(); //.row
			row.children().eq(0).remove();
			row.children().eq(0).removeClass('col-lg-7 col-lg-8').parent().parent().removeClass('col-12 col-lg-10 offset-lg-1').addClass('col-12 col-lg-5').parent().addClass('justify-content-center');

			$('.col-md-6.offset-md-3').removeClass('col-md-6 offset-md-3').addClass('col-md-8 offset-md-2');
			$('h4').parent().next().removeClass('d-lg-none').prev().remove();
		});

		//make the login area fullscreen
		$('#id-fullscreen').on('click', function(e) {
			e.preventDefault();
			if (window.navigator.msPointerEnabled) $('.body-container').addClass('h-100'); //for IE only

			$('.main-container').removeClass('container');
			$('.main-content').removeClass('justify-content-center minh-100').addClass('px-4 px-lg-0')
				.children().attr('class', 'my-3 m-lg-0 d-flex flex-column flex-lg-row flex-grow-1') //remove the padding classes
				.children().eq(0).addClass('flex-grow-1')
				.children().removeClass('shadow radius-1 col-lg-10 offset-lg-1').addClass('d-lg-flex')
				.children().addClass('flex-grow-1')
				.children().eq(0).removeClass('col-lg-5').addClass('col-lg-4').next().removeClass('col-lg-7 offset-2').addClass('col-lg-6 mx-auto d-flex align-items-center justify-content-center');
		});

	});
</script>
</body>

</html>
