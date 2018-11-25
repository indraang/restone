<?php
require('functions.php');

if(isset($_POST["submit"])){
	if($_POST["password"] == $_POST["password2"]){

		if(insert($_POST) > 0){
			header("Location:login.php");
			exit;

		}else{
			echo "Register Failed";
		}

	}else{
		echo '<script type="text/javascript">';
		echo 'alert("Password doesnt match!")';
		echo '</script>';
	}
}

;?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
</head>
<body style="margin:0;">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="main-register">
				<div class="header-register text-center">
					<h1>Sign Up</h1>
				</div>
				<form action="" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="" class="form-control" name="address" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="" class="form-control" name="phone" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="form-group">
						<label>Re-type Password</label>
						<input type="password" class="form-control" name="password2">
					</div>
					<button type="button" class="btn btn-default">Back</button>
					<button type="submit" name="submit" class="btn btn-register">Sign Up</button>
				</form>
			</div>
		</div>
		<div class="col-md-6">
			<img src="assets/img/logo-register.png" alt="Register" class="logo-register">
			<h3>Create Cook with Love</h3>
		</div>
	</div>
</div>
</body>
</html>