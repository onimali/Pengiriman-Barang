<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
	
	<hr class="soft"/>
	<div class="well">
	
		
		<div class="control-group">
	<h4> Form pendaftaran kurir</h4>
		<div class="controls">
		
	
			
		
		</div>
		</div>
		<form method="post" name="pendaftaran" action="prosdaf1.php">
		<div class="control-group">
			<label class="control-label" for="inputFname">Id <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname" placeholder="Id">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Username<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLname" placeholder="Username">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Password<sup>*</sup></label>
		<div class="controls">
		  <input type="text" placeholder="Password">
		</div>
	  </div>
<div class="control-group">
		<label class="control-label" for="inputEmail">Email<sup>*</sup></label>
		<div class="controls">
		  <input type="text" placeholder="Email">
		</div>
	  </div>
<div class="control-group">
		<label class="control-label" for="inputEmail">Telephone<sup>*</sup></label>
		<div class="controls">
		  <input type="text" placeholder="Telepon">
		</div>
	  </div>		  
		<div class="control-group">
		<label class="control-label">First name <sup>*</sup></label>
		<div class="controls">
		  <input type="password" placeholder="Nama depan">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label">Last name <sup>*</sup></label>
		<div class="controls">
		  <input type="password" placeholder="Nama belakang">
		</div>
	  </div>

	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submitAccount" class="btn btn-success" value="Register" class="exclusive shopBtn">
		<input value="Batal" class="btn btn-danger" type="reset">
		</div>
	</div>
	</form>

</div>