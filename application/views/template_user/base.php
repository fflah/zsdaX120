<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title><?= $title ?></title>

	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<link href="<?= base_url(); ?>/logo.ico" rel="icon">

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/fonts.googleapis.com.css" />
	<!-- css chosen -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/chosen.min.css" />	

	<!-- ace styles -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ace-skins.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ace-rtl.min.css" />

	<!-- css for gritter -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery-ui.custom.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.gritter.min.css" />

	<!-- ace settings handler -->
	<script src="<?= base_url('assets/'); ?>js/ace-extra.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery-2.1.4.min.js"></script>

	<!-- js for griter -->
	<script src="<?= base_url('assets/'); ?>js/jquery.gritter.min.js"></script>

	<!-- js for datatable -->
	<script src="<?= base_url('assets/'); ?>js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery.dataTables.bootstrap.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/buttons.flash.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/buttons.html5.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/buttons.print.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/buttons.colVis.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/dataTables.select.min.js"></script>

	<!-- js  for ckeditor -->
	<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

	<!-- js for choosen -->
	<script src="<?=base_url()?>assets/js/chosen.jquery.min.js"></script>

	<!-- css and js for toastr -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />		
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<style>
		.toast {
			margin-top: 45px !important;
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
<body class="no-skin">
		<div style="background: #2087C5;" id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="ace-icon fa fa-cogs"></i>
							SIINas
						</small>
					</a>

					<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
						<span class="sr-only">Toggle user menu</span>

						<img src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
					</button>

					<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
						<span class="sr-only">Toggle sidebar</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>
					</button>
				</div>

				<div  class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal user-min">
							<a  data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?= base_url('assets/'); ?>images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?= $this->session->userdata('nama_user') ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li>
									<a href="<?=base_url('logout')?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="<?=base_url('/')?>">
								Home
							</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            	e-Reporting
	  							&nbsp;
								<i class="ace-icon fa fa-angle-down bigger-110"></i>
							</a>

							<ul class="dropdown-menu dropdown-light-blue dropdown-caret">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-eye bigger-110 blue"></i>
										Action
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-user bigger-110 blue"></i>
										Another Action
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog bigger-110 blue"></i>
										Something else here
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            	e-Services
	  							&nbsp;
								<i class="ace-icon fa fa-angle-down bigger-110"></i>
							</a>

							<ul class="dropdown-menu dropdown-light-blue dropdown-caret">
								<li>
									<a href="<?=base_url('services/licensing')?>">
										<i class="ace-icon fa fa-eye bigger-110 blue"></i>
										e-Licencing
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-user bigger-110 blue"></i>
										Another Action
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog bigger-110 blue"></i>
										Something else here
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            	Data & Informasi
	  							&nbsp;
								<i class="ace-icon fa fa-angle-down bigger-110"></i>
							</a>

							<ul class="dropdown-menu dropdown-light-blue dropdown-caret">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-eye bigger-110 blue"></i>
										Action
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-user bigger-110 blue"></i>
										Another Action
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog bigger-110 blue"></i>
										Something else here
									</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#">
								Kode Referensi
							</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Contact Us
								  &nbsp;
								<i class="ace-icon fa fa-angle-down bigger-110"></i>
							</a>

							<ul class="dropdown-menu dropdown-light-blue dropdown-caret">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-eye bigger-110 blue"></i>
										Action
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-user bigger-110 blue"></i>
										Another Action
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog bigger-110 blue"></i>
										Something else here
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								Data Perusahaan
							</a>
						</li>
					</ul>

					
				</nav>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			
			<?= $contents; ?>
			

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">SIINas</span>
							Application &copy; 2022
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	<script type="text/javascript">
		if ('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url('assets/'); ?>js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
	</script>
	<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>

	<!-- page specific plugin scripts -->
	<script src="<?= base_url('assets/'); ?>js/wizard.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery.validate.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery-additional-methods.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/bootbox.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery.maskedinput.min.js"></script>
	<!-- <script src="<?= base_url('assets/'); ?>js/select2.min.js"></script> -->

	<!-- ace scripts -->
	<script src="<?= base_url('assets/'); ?>js/ace-elements.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/ace.min.js"></script>



	<!-- inline scripts related to this page -->
</body>

</html>

<script>
	//cek aktif link sidebar
	$('.nav-list').each(function() {
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
								subMenu.parent('li').addClass("open active");
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