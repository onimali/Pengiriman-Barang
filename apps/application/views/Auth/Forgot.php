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

</head>

<body class="body-bg-color">
	<div class="wrapper">
		<div class="form-body">
			<form class="col-form" action="<?= base_url('forgot/1'); ?>" method="POST">
				<header>Halaman Forgot Password</header>
				<fieldset>
					<div role="alert" class="alert alert-success">Password Akan Di Reset Ke Default : 12345678</div>
					<section>
						<div class="form-group has-feedback">
							<label class="control-label">E-mail</label>
							<input class="form-control" placeholder="Masukan Email" type="email" name="email" required />
							<span class="fa fa-envelope form-control-feedback" aria-hidden="true"></span> </div>
					</section>
				</fieldset>
				<footer class="text-right">
					<button type="submit" class="btn btn-info pull-right">Reset</button>
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