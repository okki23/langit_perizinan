<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 11:01:45 GMT -->
<head>
	<meta charset="utf-8" />
	<title><?php echo $judul; ?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url('/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/css/animate.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/css/style.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/css/style-responsive.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/css/theme/default.css'); ?>" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->


		<link href="<?php echo base_url('/assets/plugins/bootstrap-datepicker/css/datepicker.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('/assets/plugins/bootstrap-datepicker/css/datepicker3.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('/assets/plugins/ionRangeSlider/css/ion.rangeSlider.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('/assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
	  <link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />
	  <link href="<?php echo base_url(''); ?>/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url(''); ?>/assets/plugins/DataTables/css/data-table.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(''); ?>/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login animated fadeInDown">
            <!-- begin brand -->

            <div class="login-header">
                <div class="brand" align="center">
                    
                <img src="<?php echo base_url('assets/img/langit.png');?>" style="width:300px; height:150px;">

                </div>

            </div>
            <br>
           
            <!-- end brand -->
            <div class="login-content">
                 <h4 align="center"> SISTEM APLIKASI IZIN DAN TUGAS BELAJAR KEMENTERIAN XXX  </h4>
                <form action="<?php echo base_url('login/forgot_pass_pro'); ?>" method="POST" class="margin-bottom-0">
                    <h6 align="center"> Please fill the field username and email to send new password</h6>
                    <div class="form-group m-b-20">
                        <input type="text" name="username" class="form-control input-lg" placeholder="Username" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="text" name="email" class="form-control input-lg" placeholder="Email" />
                    </div>
                   
                    <div class="login-buttons">
                        
                        <button type="submit" class="btn btn-success btn-block btn-lg">Send New Password</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->


	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(''); ?>/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<script src="<?php echo base_url(''); ?>/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url(''); ?>/assets/plugins/DataTables/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/js/table-manage-default.demo.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/js/apps.min.js"></script>

	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/js/bootstrap3-typeahead.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/masked-input/masked-input.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/password-indicator/js/password-indicator.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
  <script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-daterangepicker/moment.js"></script>
  <script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url(''); ?>/assets/plugins/select2/dist/js/select2.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/js/form-plugins.demo.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/js/apps.min.js"></script>


	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 11:01:45 GMT -->
</html>
