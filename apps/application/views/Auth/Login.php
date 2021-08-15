<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?= ucwords($title); ?></title>

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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-bg-color">
	<div class="wrapper">
		<div class="form-body">
			<form class="col-form" action="<?= base_url('login/1'); ?>" method="POST">
				<header>Halaman Login</header>
				<fieldset>

					<section>
						<?php if ($this->session->flashdata('msg')) : ?>
							<div role="alert" class="alert alert-danger"><?= $this->session->flashdata('msg'); ?></div>
						<?php endif; ?>
					</section>

					<section>
						<div class="form-group has-feedback">
							<label class="control-label">E-mail</label>
							<input class="form-control" placeholder="E-mail" type="email" name="email" required />
							<span class="fa fa-envelope form-control-feedback" aria-hidden="true"></span> </div>
					</section>
					<section>
						<div class="form-group has-feedback">
							<label class="control-label">Password</label>
							<input class="form-control" placeholder="Password" type="password" name="password" required />
							<span class="fa fa-lock form-control-feedback" aria-hidden="true"></span> </div>
					</section>
					<section>
						<div class="row">
							<div class="col-sm-6"></div>
							<div class="col-sm-6 checkbox"> <a href="<?= base_url('forgot/0'); ?>" class="modal-opener">Forgot password?</a> </div>
						</div>
					</section>
				</fieldset>
				<footer class="text-right">
					<button type="submit" class="btn btn-info pull-right">Login</button>
					<a href="<?= base_url('register'); ?>" class="button button-secondary">Register</a> </footer>
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