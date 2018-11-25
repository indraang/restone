<?php include('templates/header.php');?>
<div id="carousel-banner" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-banner" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-banner" data-slide-to="1"></li>
		<li data-target="#carousel-banner" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="assets/img/4.jpg" alt="Image Slider">
		</div>
		<div class="item item2">
			<img src="assets/img/5.jpg" alt="Image Slider">
		</div>
		<div class="item item3">
			<img src="assets/img/5.jpg" alt="Image Slider">
		</div>
	</div>
	<a href="#carousel-banner" class="left carousel-control" data-slide="prev" role="button">
		<span class="glyphicon glyphicon-chevron left"></span>
	</a>
	<a href="#carousel-banner" class="right carousel-control" data-slide="next" role="button">
		<span class="glyphicon glyphicon-chevron right"></span>
	</a>
</div>
<section class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="assets/img/5.jpg" width="100%">
			</div>
			<div class="col-md-6">
				<h1>Resto One</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</section>
<section id="menu-favorite" class="menu-favorite">

	<div class="container content-menu">
		<div class="row">
			<h1 class="text-center">Menu Favorite</h1>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="assets/img/10.png" class="img-thumbnail" width="100%">
			</div>
			<div class="col-md-4">
				<img src="assets/img/9.png" class="img-thumbnail" width="100%">
			</div>
			<div class="col-md-4">
				<img src="assets/img/8.png" class="img-thumbnail" width="100%">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="assets/img/10.png" class="img-thumbnail" width="100%">
			</div>
			<div class="col-md-4">
				<img src="assets/img/9.png" class="img-thumbnail" width="100%">
			</div>
			<div class="col-md-4">
				<img src="assets/img/8.png" class="img-thumbnail" width="100%">
			</div>
		</div>
	</div>
</section>
<section class="our-services text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">Why Restone?</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="card">
					<img src="./assets/img/served.svg" alt="Best Chef">
					<div class="card-title">
						<h4>Best Chef</h4>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="card">
					<img src="./assets/img/ice-cream.svg" alt="Anti-MSG">
					<div class="card-title">
						<h4>Anti-MSG</h4>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="card">
					<div class="card-title">
						<h4>Chef International</h4>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="card">
					<div class="card-title">
						<h4>Orchestra</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include("templates/footer.php");?>