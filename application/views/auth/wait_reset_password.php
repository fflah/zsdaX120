<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Send Reset Password</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ace.min.css" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ace-part2.min.css" />
		<![endif]-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ace-ie.min.css" />
		<![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="<?= base_url('assets/'); ?>js/html5shiv.min.js"></script>
		<script src="<?= base_url('assets/'); ?>js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="login-layout light-login" style="background-color: #f3f1f1 !important;">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container" style="width: 500px;">
                        <div class="center">
                            <h1>
                                <i class="ace-icon fa fa-lock green"></i>
                                <span class="blue">Auth Sistem SMP Muh 3 MLATI</span>
                            </h1>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">
                            <div id="signup-box" class="signup-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h3 class="header green lighter bigger center">
                                            <i class="ace-icon fa fa-envelope blue"></i>
                                            Please check your email
                                        </h3>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.signup-box -->
                        </div><!-- /.position-relative -->
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.main-content -->
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?= base_url('assets/'); ?>js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="<?= base_url('assets/'); ?>js/jquery-1.11.3.min.js"></script>
<![endif]-->
       
</body>
</html>