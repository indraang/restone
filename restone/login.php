<?php
session_start();
if(isset($_SESSION["data_user"])){
	header("Location:index.php");
	exit;
}else if(isset($_SESSION["data_admin"])){
	header("Location:administrator.php");
	exit;
}

require 'functions.php';

if(isset($_POST["submit"])){
	$username = $_POST["username"];
	$password = $_POST["password"];

	$cek_admin = mysqli_query($koneksi,"SELECT * FROM tAdmin WHERE username ='$username'");

	$cek_user = mysqli_query($koneksi,"SELECT * FROM tUsers WHERE username ='$username'");
	
	if(mysqli_num_rows($cek_admin) > 0){
		
		$row = mysqli_fetch_assoc($cek_admin);

		if(password_verify($password,$row["password"])){
			$_SESSION["data_admin"] = array(
				"username" => $row["username"]
			);
			
			header("Location:administrator.php");
			exit;
		}
	
	}else if(mysqli_num_rows($cek_user) > 0){

		$row = mysqli_fetch_assoc($cek_user);
		
		if(password_verify($password,$row["password"])){
			$_SESSION["data_user"] = array(
				"username" => $row["username"],
				"email" => $row["email"],
				"address" => $row["address"],
				"phone" => $row["phone"]
			);

			header("Location:index.php");
			exit;
		}

	}else{
		echo "Password Salah";
	}
}

;?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="main-login">
		<div class="header-login text-center">
		<h2>Sign In Now!</h2>
	</div>
		<form action="" method="post" class="form-login">
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="eg. aang16" autocomplete="off">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password">
			</div>
			<button type="submit" name="submit" class="btn btn-login">Sign In</button>
		</form>
		<span class="back-btn"><a href="index.php">Back</a></span>
		<span class="forgot-btn"><a href="">Forgot Password ?</a></span>
	</div>
</div>
</body>
</html>