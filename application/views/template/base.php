<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<base href="../" />
	<title><?=$title?></title>
	<!-- include common vendor stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>node_modules/@fortawesome/fontawesome-free/css/regular.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>node_modules/@fortawesome/fontawesome-free/css/brands.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>node_modules/@fortawesome/fontawesome-free/css/solid.css">

	<!-- include vendor stylesheets used in "DataTables" page. see "application/views/default/pages/partials/table-datatables/@vendor-stylesheets.hbs" -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>dist/css/ace-font.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>dist/css/ace.css">


	<link rel="icon" type="image/png" href="<?=base_url()?>assets_admin/favicon.png" />

	<!-- "Gallery" page styles specific to this page for demo purposes -->
	<link rel="stylesheet" type="text/css"
        href="<?=base_url()?>assets_admin/application/views/default/pages/partials/dashboard-3/@page-style.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>dist/css/ace-themes.css" />

	<script type="text/javascript" src="<?=base_url()?>node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="<?=base_url()?>node_modules/chart.js/dist/Chart.js"></script>
	<script type="text/javascript" src="<?=base_url()?>node_modules/sortablejs/Sortable.js"></script>

	<!-- script for datatabel -->
	<script type="text/javascript" src="<?=base_url()?>node_modules/datatables/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?=base_url()?>node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
	<script type="text/javascript" src="<?=base_url()?>node_modules/datatables.net-colreorder/js/dataTables.colReorder.js"></script>
	<script type="text/javascript" src="<?=base_url()?>node_modules/datatables.net-select/js/dataTables.select.js"></script>


	<script type="text/javascript" src="<?=base_url()?>node_modules/datatables.net-buttons/js/dataTables.buttons.js"></script>
	<script type="text/javascript" src="<?=base_url()?>node_modules/datatables.net-buttons-bs4/js/buttons.bootstrap4.js"></script>
	<script type="text/javascript" src="<?=base_url()?>node_modules/datatables.net-buttons/js/buttons.html5.js"></script>
	<script type="text/javascript" src="<?=base_url()?>node_modules/datatables.net-buttons/js/buttons.print.js"></script>
	<script type="text/javascript" src="<?=base_url()?>node_modules/datatables.net-buttons/js/buttons.colVis.js"></script>

	<!-- Script for wysiwyg -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>node_modules/summernote/dist/summernote-lite.css">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>node_modules/bootstrap-markdown/css/bootstrap-markdown.min.css">

	<script type="text/javascript" src="<?=base_url()?>node_modules/summernote/dist/summernote-lite.js"></script>

	<script type="text/javascript" src="<?=base_url()?>node_modules/jquery.hotkeys/jquery.hotkeys.js"></script>
	<script type="text/javascript" src="<?=base_url()?>node_modules/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>


	<script type="text/javascript" src="<?=base_url()?>node_modules/markdown/lib/markdown.js"></script>
	<script type="text/javascript" src="<?=base_url()?>node_modules/bootstrap-markdown/js/bootstrap-markdown.js"></script>

	<!-- css and js for toastr -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />		
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<style>
		.toast {
			margin-top: 65px !important;
		}
	</style>

	<script>
		toastr.options = {
			"debug": false,
			"positionClass": "toast-top-right",
			"onclick": null,
			"fadeIn": 300,
			"fadeOut": 1000,
			"timeOut": 5000,
			"extendedTimeOut": 1000
		}
	</script>

	

		
</head>

<body>
	<div class="body-container">
		<nav class="navbar navbar-expand-lg navbar-fixed navbar-default">
			<div class="navbar-inner">

				<div class="navbar-intro justify-content-xl-between">

					<button type="button" class="btn btn-burger burger-arrowed static collapsed ml-2 d-flex d-xl-none" data-toggle-mobile="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
						<span class="bars"></span>
					</button><!-- mobile sidebar toggler button -->

					<a class="navbar-brand text-white" href="#">
						<i class="ace-icon fa fa-cogs"></i>
						<span>SINNas</span>
					</a><!-- /.navbar-brand -->

					<button type="button" class="btn btn-burger mr-2 d-none d-xl-flex" data-toggle="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="true" aria-label="Toggle sidebar">
						<span class="bars"></span>
					</button><!-- sidebar toggler button -->

				</div><!-- /.navbar-intro -->


				<div class="navbar-content">

					

				</div><!-- .navbar-content -->


				<!-- mobile #navbarMenu toggler button -->
				<button class="navbar-toggler ml-1 mr-2 px-1" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navbar menu">
					<span class="pos-rel">
						<img class="border-2 brc-white-tp1 radius-round" width="36" src="<?=base_url()?>assets_admin/image/user.jpg" alt="Jason's Photo">
						<span class="bgc-warning radius-round border-2 brc-white p-1 position-tr mr-1px mt-1px"></span>
					</span>
				</button>


				<div class="navbar-menu collapse navbar-collapse navbar-backdrop" id="navbarMenu">

					<div class="navbar-nav">
						<ul class="nav">

							<li class="nav-item dropdown order-first order-lg-last">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
									<img id="id-navbar-user-image" class="d-none d-lg-inline-block radius-round border-2 brc-white-tp1 mr-2" src="<?=base_url()?>assets_admin/image/user.jpg" alt="Jason's Photo">
									<span class="d-inline-block d-lg-none d-xl-inline-block">
										<span class="text-90" id="id-user-welcome">Welcome,</span>
										<span class="nav-user-name"><?=$this->session->userdata('nama_user')?></span>
									</span>

									<i class="caret fa fa-angle-down d-none d-xl-block"></i>
									<i class="caret fa fa-angle-left d-block d-lg-none"></i>
								</a>

								<div class="dropdown-menu dropdown-caret dropdown-menu-right dropdown-animated brc-primary-m3">
									<div class="d-none d-lg-block d-xl-none">
										<div class="dropdown-header">
											Welcome, <?=$this->session->userdata('nama_user')?>
										</div>
										<div class="dropdown-divider"></div>
									</div>

									<div class="dropdown-divider brc-primary-l2"></div>

									<a class="dropdown-item btn btn-outline-grey btn-h-lighter-secondary btn-a-lighter-secondary" href="<?=base_url('logout')?>">
										<i class="fa fa-power-off text-warning-d1 text-105 mr-1"></i>
										Logout
									</a>
								</div>
							</li><!-- /.nav-item:last -->

						</ul><!-- /.navbar-nav menu -->
					</div><!-- /.navbar-nav -->

				</div><!-- /.navbar-menu.navbar-collapse -->

			</div><!-- /.navbar-inner -->
		</nav>
		<div class="main-container">

			<div id="sidebar" class="sidebar sidebar-fixed expandable sidebar-default d-none d-xl-block">
				<div class="sidebar-inner">

					<div class="ace-scroll flex-grow-1" ace-scroll>

						<div class="sidebar-section my-2">
							<div class="sidebar-section-item fadeable-left">

								<div class="fadeinable sidebar-shortcuts-mini">
									<span class="btn btn-success p-0"></span>
									<span class="btn btn-info p-0"></span>
									<span class="btn btn-warning p-0"></span>
									<span class="btn btn-danger p-0"></span>
								</div>

								<div class="fadeable">
									<div class="sub-arrow"></div>
									<div>
										<button class="btn btn-smd btn-success">
											<i class="fa fa-signal"></i>
										</button>

										<button class="btn btn-smd btn-info">
											<i class="fa fa-edit"></i>
										</button>

										<button class="btn btn-smd btn-warning">
											<i class="fa fa-users"></i>
										</button>

										<button class="btn btn-smd btn-danger">
											<i class="fa fa-cogs"></i>
										</button>
									</div>
								</div>

							</div>


						</div>

						<ul class="nav has-active-border" role="navigation" aria-label="Main">


							<li class="nav-item-caption">
								<span class="fadeable pl-3">MAIN</span>
								<span class="fadeinable mt-n2 text-125">&hellip;</span>
							</li>


							<li class="nav-item">

								<a href="<?= base_url('dashboard-admin') ?>" class="nav-link">
									<i class="nav-icon fa fa-tachometer-alt"></i>
									<span class="nav-text fadeable">
										<span>Home</span>
									</span>


								</a>

								<b class="sub-arrow"></b>
							</li>


							<li class="nav-item">

								<a href="#" class="nav-link dropdown-toggle">
									<i class="nav-icon fa fa-cube"></i>
									<span class="nav-text fadeable">
										<span>BM Master list</span>
									</span>

									<b class="caret fa fa-angle-left rt-n90"></b>

								</a>

								<div class="hideable submenu collapse">
									<ul class="submenu-inner">

										<li class="nav-item">

											<a href="<?= base_url('master-list/daftar-permohonan') ?>" class="nav-link">

												<span class="nav-text">
													<span>Daftar Permohonan</span>
												</span>
											</a>
										</li>

										<li class="nav-item">
											<a href="<?= base_url('master-list/status-proses') ?>" class="nav-link">
												<span class="nav-text">
													<span>Status Proses</span>
												</span>
											</a>
										</li>

										<li class="nav-item">
											<a href="<?= base_url('master-list/sudah-terbit') ?>" class="nav-link">
												<span class="nav-text">
													<span>Sudah Terbit</span>
												</span>
											</a>
										</li>
									</ul>
								</div>

								<b class="sub-arrow"></b>
							</li>
						</ul>

					</div><!-- /.sidebar scroll -->
				</div>
			</div><!-- /#sidebar -->

			<div role="main" class="main-content">
				<div class="d-none content-nav mb-1 bgc-grey-l4">
					<div class="d-flex justify-content-between align-items-center">
						<ol class="breadcrumb pl-2">
							<li class="breadcrumb-item active text-grey">
								<i class="fa fa-home text-dark-m3 mr-1"></i>
								<a class="text-blue" href="#">
									Home
								</a>
							</li>

							<li class="breadcrumb-item active text-grey-d1">Gallery</li>
						</ol>

						<div class="nav-search">
							<form class="form-search">
								<span class="d-inline-flex align-items-center">
									<input type="text" placeholder="Search ..." class="form-control pr-4 form-control-sm radius-1 brc-info-m2 text-grey" autocomplete="off" />
									<i class="fa fa-search text-info-m1 ml-n4"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
				</div><!-- breadcrumbs -->

				<?= $contents; ?>

				<footer class="footer d-none d-sm-block">
					<div class="footer-inner bgc-white-tp1">
						<div class="pt-3 border-none border-t-3 brc-grey-l1 border-double">
							<span class="text-primary-m2 font-bolder text-120">SIINas</span>
							<span class="text-muted">Application &copy; 2020</span>

							<span class="mx-3 action-buttons">
								<a href="#" class="text-blue2-m3 text-140"><i class="fab fa-twitter-square"></i></a>
								<a href="#" class="text-blue-d1 text-140"><i class="fab fa-facebook"></i></a>
								<a href="#" class="text-orange text-140"><i class="fa fa-rss-square"></i></a>
							</span>
						</div>
					</div><!-- .footer-inner -->

					<div class="footer-tools">
						<a id="btn-scroll-up" href="#" class="btn-scroll-up btn btn-dark btn-smd mb-2 mr-2">
							<i class="fa fa-angle-double-up mx-1"></i>
						</a>
					</div>
				</footer>



				<!-- footer toolbox for mobile view -->
				<footer class="d-sm-none footer footer-sm footer-fixed">
					<div class="footer-inner">
						<div class="btn-group d-flex h-100 mx-2 border-x-1 border-t-2 brc-primary-m3 bgc-default-l4 radius-t-1 shadow">
							<button class="btn btn-outline-primary btn-h-lighter-primary btn-a-lighter-primary border-0">
								<i class="fas fa-sliders-h text-blue-m1 text-120"></i>
							</button>

							<button class="btn btn-outline-purple btn-h-lighter-purple btn-a-lighter-purple border-0">
								<i class="fa fa-plus-circle text-purple-m2 text-120"></i>
							</button>

							<button class="btn btn-outline-warning btn-h-lighter-warning btn-a-lighter-warning border-0" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navbar search">
								<i class="fa fa-search text-warning text-120"></i>
							</button>

							<button class="btn btn-outline-brown btn-h-lighter-brown btn-a-lighter-brown border-0 mr-0">
								<i class="fa fa-bell text-brown-m1 text-120"></i>
							</button>
						</div>
					</div>
				</footer>
			</div><!-- /main -->
		</div><!-- /.main-container -->


		<!-- include common vendor scripts used in demo pages -->
		<script type="text/javascript" src="<?=base_url()?>node_modules/popper.js/dist/umd/popper.js"></script>
		<script type="text/javascript" src="<?=base_url()?>node_modules/bootstrap/dist/js/bootstrap.js"></script>

		<!-- include Ace script -->
		<script type="text/javascript" src="<?=base_url()?>dist/js/ace.js"></script>

		<script type="text/javascript" src="<?=base_url()?>assets_admin/js/demo.js"></script>
		<!-- this is only for Ace's demo and you don't need it -->

		<!-- "Gallery" page script to enable its demo functionality -->
		<!-- <script type="text/javascript" src="<?=base_url()?>assets_admin/application/views/default/pages/partials/dashboard-3/@page-script.js"></script> -->
	</div><!-- /.body-container -->
</body>

</html>


<script>
	//cek aktif link sidebar
	$('.nav').each(function() {
		const navItem = $(this);
		const li = navItem.find("li")
		const location_url = location.origin + location.pathname
		li.each(function() {
			const liItem = $(this)
			const url = liItem.find("a").attr("href")						
			if (url == location_url) {
				liItem.addClass('active');
			} else {
				if (url == '#') {
					$('.submenu').each(function() {
						const subMenu = $(this)
						const subLi = subMenu.find("li")
						subLi.each(function() {
							liSubItem = $(this)
							const urlSubItem = liSubItem.find("a").attr("href")
							if (urlSubItem == location_url) {
								liItem.addClass('active open');
								subMenu.addClass("show");
								liSubItem.addClass("active");
							}
						})

					})
				}
			}

		});
	})
	//end cek aktif link sidebar
</script>

<?php if($this->session->flashdata('success')): ?>
	<script type="text/javascript">
		toastr.success('<?= $this->session->flashdata('success') ?>')
	</script>
<?php endif?>
<?php if($this->session->flashdata('error')): ?>
	<script type="text/javascript">
		toastr.error('<?= $this->session->flashdata('error') ?>')
	</script>
<?php endif?>