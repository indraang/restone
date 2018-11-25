<?php
session_start();
;?>
<!DOCTYPE html>
<html>
<head>
	<title>Restone</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="header-top">
	<div class="container">
		<ul>
			<li><a href="">restone@gmail.com</a></li>
			<li><a href="">Call me 082339869156</a></li>
			<?php if(isset($_SESSION["data_user"])):;?>
				<?php 
					echo '<li style="width:33%"><a href=""><i class="fa fa-user"></i> '; 
					echo $_SESSION["data_user"]["username"];
					echo '</a></li>';
					echo '<li style="width:10%"><a href="./logout.php">Logout</a></li>';
					echo '</ul>';
				;?>	
			<?php elseif(isset($_SESSION["data_admin"])):;?>
				<?php 
					echo '<li style="width:33%"><a href=""><i class="fa fa-user"></i> ';
					echo $_SESSION["data_admin"]["username"];
					echo '</a></li>';
					echo '<li style="width:10%"><a href="./logout.php">Logout</a></li>';
					echo '</ul>';
				;?>	
			<?php else:?>	
				<?php echo '<li><a href="register.php">Sign Up</a></li>';
					  echo '<li><a href="login.php">Sign In</a></li>';
				  	  echo '</ul>';
				;?>  
			<?php endif;?>
	</div>
</div>	
<div class="header">
	<div class="row">
		<div class="col-md-8">
			<img src="./assets/img/header-restone.png" alt="Header Restone" class="header-img">
		</div>
		<div class="col-md-4">
			<h2>LOGIN</h2>
		</div>
	</div>
</div>
<nav class="navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-target="#navbar-navigation" data-toggle="collapsed">Home
			<span class="sr-only">Toggle</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand nav-scroll"><i class="fa fa-home"></i> Home</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left menu-list">
				<li><a href="">Menu</a></li>
				<li><a href="reservation.php">Reservations</a></li>
				<li><a href="event.php">Gallery</a>
				<li><a href="">Event</a></li>
				<li><a href="">Contact Us</a></li>	
			</ul>
		</div>
	</div>
</nav>