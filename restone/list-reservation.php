<?php 
require 'functions.php';
$result = query("SELECT * FROM tOrders WHERE status = 0"); 
include("templates/admin/header.php");
;?>
<div class="main">
	<div class="content">
		<div class="row">
			<div class="col-md-12">
				<h1>List Reservation</h1>
			</div>
		</div>
		<hr>
		<div class="row">
			<?php foreach($result as $order):;?>
			<div class="col-md-4">
				<div class="order-detail">
					<div class="order-title text-center">
					<h4>Order <?= $order["idOrder"];?></h4>
					</div>
					<ul class="order-content">
						<li>Name : <?= $order["nameOrder"];?></li>
						<li>Address : <?= $order["address"];?></li>
						<li>Total Guest : <?= $order["totalGuest"];?></li>
						<li>Date : <?= $order["dateTime"];?></li>
						<li>Time : <?= $order["hours"];?></li>
					</ul>
					<div class="btn-order">
						<a href="delete-order.php?id=<?= $order["idOrder"];?>" class="btn btn-danger">Reject</a>
						<a href="create-reservation.php?id=<?= $order["idOrder"];?>" class="btn btn-success">Accept</a>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
</body>
</html>