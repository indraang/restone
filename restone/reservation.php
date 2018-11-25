<?php 

include("templates/header.php");

if(!isset($_SESSION["data_user"])){
	header("Location:login.php");
}
;?>
<div class="main-reservation">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
		<div class="form-reservation">
			<div class="header-form">
				<h1>Form Reservation</h1>
			</div>
			<form class="form-horizontal">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="username" class="form-control" value="<?= $_SESSION["data_user"]["username"]?>">
				</div>
				<div class="form-group">
					<label class="control-label">Address</label>
					<input type="email" class="form-control" name="email" value="<?= $_SESSION["data_user"]["address"]?>">
				</div>
				<div class="form-group">
					<label class="control-label">Phone</label>
					<input type="text" class="form-control" name="phone" value="<?= $_SESSION["data_user"]["phone"]?>">
				</div>
				<div class="form-group">
					<label class="control-label">Total Guest</label>
					<input type="number" class="form-control" name="total-guest">
				</div>
				<div class="form-group">
					<label class="control-label">Date</label>
					<input type="datetime-local" class="form-control" name="datetime">
				</div>
				<div class="form-group">
					<label class="control-label">Time</label>
					<input type="time" class="form-control" name="time">
				</div>
				<button type="button" class="btn btn-danger">Back</button>
				<button type="submit" name="submit" class="btn btn-primary btn-order">Order</button>
			</form>	
		</div>
	</div>	
		</div>
	</div>
</div>
<?php include("templates/footer.php");?>