<?php
session_start();
if(!isset($_SESSION["data_admin"])){
	header("Location:login.php");
}

;?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
<nav class="navbar navbar-default">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="">
			<span class="sr-only">Toggle</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="./index.php" class="navbar-brand">Restone</a>
	</div>
	<div class="logout-admin">
		<a href="./logout.php" class="btn btn-danger">Logout</a>
	</div>
</nav>
<nav class="navbar-default navbar-side">
	<div class="sidebar-collapse">
	<ul class="nav">
		<li class="text-center"><img src="assets/img/hero.jpg" class="avatar-admin"></li>
		<li><a href="./administrator.php">Dashboard</a></li>
		<li><a href="./list-reservation.php">Reservation</a></li>
	</ul>
	</div>
</nav>