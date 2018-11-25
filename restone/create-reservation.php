<?php
require 'functions.php';

$no_booking = "BOOK".substr(uniqid(rand()),0,8);
$id = $_GET["id"];
$result = query("SELECT `tOrders`.`nameOrder`,`tOrders`.`dateTime`,`tOrders`.`hours` FROM tOrders WHERE idOrder='$id'");

if(isset($_POST["submit"])){
	if(createReservation($_POST) > 0){
		if(updateOrder($_GET["id"]) > 0){
			var_dump($_GET["id"]);
			header("Location:list-reservation.php");
		}
	}
}
include("templates/admin/header.php");
;?>
<div class="main">
	<div class="content">
	<div class="row">
		<div class="col-md-12">
			<h1>Create Reservation</h1>	
			<hr>
		</div>
		<div class="row">
			<?php foreach($result as $key):?>
			<div class="col-md-4">
				<form class="form-accept" action="" method="post">
					<input type="hidden" name="id_order" value="<?= $id;?>">
					<div class="form-group">
						<label class="control-label">No. Booking</label>
						<input type="text" class="form-control" name="no_booking" value="<?= $no_booking;?>" readonly="readonly">
					</div>
					<div class="form-group">
						<label class="control-label">No. Table</label>
						<input type="text" class="form-control" name="no_table" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label class="control-label">Customer Name</label>
						<input type="text" class="form-control" name="name_customer" autocomplete="off" value="<?= $key["nameOrder"];?>" required>
					</div>
					<div class="form-group">
						<label class="control-label">Date and Time</label>
						<input type="date" class="form-control" name="datetime" autocomplete="off" required>
					</div>
					<div class="btn-order">
					<a href="" class="btn btn-default">Back</a>
					<button type="submit" name="submit" class="btn btn-primary">Create</button>
				</div>
				</form>
			</div>
			<?php endforeach;?>
			<div class="col-md-6">
				<h2 class="text-center">List Tables</h2>
				<div class="all-table">
					<div class="table-dual">
						<div class="no-table-001">
							<h3>1</h3>
						</div>
						<div class="no-table-001">
							<h3>2</h3>
						</div>
						<div class="no-table-001">
							<h3>3</h3>
						</div>
						<div class="no-table-001">
							<h3>4</h3>
						</div>
						<div class="no-table-001">
							<h3>5</h3>
						</div>
					</div>
					<div class="table-single">
						<div class="no-table-001">
							<h3>6</h3>
						</div>
						<div class="no-table-001">
							<h3>7</h3>
						</div>
						<div class="no-table-001">
							<h3>8</h3>
						</div>
						<div class="no-table-001">
							<h3>9</h3>
						</div>
						<div class="no-table-001">
							<h3>10</h3>
						</div>
					</div>

					<div class="table-more">
						<span>11</span>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>
</div>