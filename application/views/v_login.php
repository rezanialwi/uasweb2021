<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistem Informasi BPJS Ketenagakerjaan | Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/dist/img/favicon.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url();
?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/fontawesome.
min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url();
?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600itali
c">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">

		</div>
		<!-- /.login-logo -->
		<?php
if(isset($_GET['alert'])){
if($_GET['alert']=="gagal"){
echo "<div class='alert alert-danger font-weight-bold text-center'>Maaf! Username & Password
Salah.<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button></div> ";
}else if($_GET['alert']=="belum_login"){
echo "<div class='alert alert-danger font-weight-bold text-center'>Anda Harus Login Terlebih
Dulu!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button></div>";
}else if($_GET['alert']=="logout"){
echo "<div class='alert alert-success font-weight-bold text-center'>Anda Telah Logout!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button></div>";
}
}
?>
		<div class="login-box-body">
			<div class="login-logo">
				<a href=""><img style="vertical-align: middle;margin-bottom: 15px;" width="150"
						src="<?php echo base_url(); ?>assets/dist/img/logo_bpjs.png"></a>
				<p style='font-size: 21px;'>Sistem Informasi<br>BPJS Ketenagakerjaan</p>
			</div>
			<p class="login-box-msg">Silahkan login admin
				<form action="<?php echo base_url().'login/aksi' ?>" method="post">
					<div class="form-group has-feedback">
						<input type="text" class="form-control" placeholder="Username" name="username">
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
					</div>
					<?php echo form_error('username'); ?>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" placeholder="Password" name="password">
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<?php echo form_error('password'); ?>
					<div class="row">
						<div class="col-xs-8">
							<div class="checkbox icheck">

							</div>
						</div>
						<!-- /.col -->
						<div class="col-xs-12">
							<button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in">
								</i>LOGIN</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->
	<!-- jQuery 3 -->
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>