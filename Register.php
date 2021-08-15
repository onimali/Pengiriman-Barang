<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?= $title; ?></title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= base_url('public/template/'); ?>bootstrap/css/bootstrap.min.css">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- Template style -->
	<link rel="stylesheet" href="<?= base_url('public/template/'); ?>dist/css/style.css">
	<link rel="stylesheet" href="<?= base_url('public/template/'); ?>pages/et-line-font/et-line-font.css">
	<link rel="stylesheet" href="<?= base_url('public/template/'); ?>pages/font-awesome/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="<?= base_url('public/template/'); ?>dist/weather/weather-icons.min.css">
	<link type="text/css" rel="stylesheet" href="<?= base_url('public/template/'); ?>dist/weather/weather-icons-wind.min.css">
<head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
</head>

<body class="body-bg-color">
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index2.php'); }
   require_once("koneksi.php");
?>
	<div class="wrapper">
		<div class="form-body">
			<form class="col-form" action="<?= base_url('register/1'); ?>" method="POST">
				<header>Halaman Register</header>
				<header>A.Admin</header>
				<header>B.Kurir</header>
				<header>C.Karyawan</header>
				<fieldset>

					<section>
						<?php if ($this->session->flashdata('msg')) : ?>
							<div role="alert" class="alert alert-danger"><?= $this->session->flashdata('msg'); ?></div>
						<?php endif; ?>
					</section>

					<section>
						<div class="form-group has-feedback">
							<label class="control-label">First Name</label>
							<input class="form-control" placeholder="First Name" type="text" name="first_name" required />
							<span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
					</section>

					<section>
						<div class="form-group has-feedback">
							<label class="control-label">Last Name</label>
							<input class="form-control" placeholder="Last Name" type="text" name="last_name" required />
							<span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
					</section>

					<section>
						<div class="form-group has-feedback">
							<label class="control-label">E-mail</label>
							<input class="form-control" placeholder="E-mail" type="email" name="email" required />
							<span class="fa fa-envelope form-control-feedback" aria-hidden="true"></span> </div>
					</section>

					<section>
						<!-- <div class="form-group has-feedback"> -->
						<div class="row">
							<div class="col-md-12">
								<select class="form-control" style="height: 40px;" name="gender" id="gender">
									<option value="default">--- SELECT GENDER ---</option>
									<option value="1">Male</option>
									<option value="2">Female</option>
								</select>
							</div>
						</div>
					</section>

					<section style="margin-top: 10px;">
						<div class="form-group has-feedback">
							<label class="control-label">Birthday</label>
							<input class="form-control" placeholder="birthday" type="date" name="birthday" required />
					</section>

					<section>
						<div class="form-group has-feedback">
							<label class="control-label">Password</label>
							<input class="form-control" placeholder="Password" type="password" name="password" required />
							<span class="fa fa-lock form-control-feedback" aria-hidden="true"></span> </div>
					</section>
				</fieldset>

				<footer class="text-right">
					<button type="submit" class="btn btn-info pull-right">Register</button>
					<a href="<?= base_url(); ?>" class="button button-secondary">Login</a>
				</footer>
			</form>
		</div>
	</div>
	<!-- wrapper -->

	<!-- jQuery -->
	<script src="<?= base_url('public/template/'); ?>dist/js/jquery.min.js"></script>
	<script src="<?= base_url('public/template/'); ?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url('public/template/'); ?>dist/js/ovio.js"></script>
</body>

</html>