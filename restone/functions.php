<?php

$koneksi = mysqli_connect("localhost","root","@Septiana123","restone");

function query($query){
	global $koneksi;

	$result = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));
	$rows = [];

	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function insert($data){
	global $koneksi;

	$username = htmlspecialchars($data["username"]);
	$email = htmlspecialchars($data["email"]);
	$address = htmlspecialchars($data["address"]);
	$phone = htmlspecialchars($data["phone"]);
	$password = password_hash(htmlspecialchars($data["password"]),PASSWORD_DEFAULT);

	mysqli_query($koneksi,"INSERT INTO tUsers VALUES (NULL,'$username','$email','$password','$address','$phone')
		");

	return mysqli_affected_rows($koneksi);
}

function createReservation($data){
	global $koneksi;

	$idOrder = htmlspecialchars($data["id_order"]);
	$noBooking = htmlspecialchars($data["no_booking"]);
	$noTable = htmlspecialchars($data["no_table"]);
	$nameCustomer = htmlspecialchars($data["name_customer"]);
	$dateTime = htmlspecialchars($data["datetime"]);

	mysqli_query($koneksi,"INSERT INTO tReservation VALUES(
		NULL,'$idOrder','$noBooking','$nameCustomer','$noTable','$dateTime'
	)");

	return mysqli_affected_rows($koneksi);

}

function updateOrder($data){
	global $koneksi;
	$idOrder = htmlspecialchars($data["id"]);

	mysqli_query($koneksi,"UPDATE tOrders SET status = 1 WHERE idOrder = '$idOrder'");

	return mysqli_affected_rows($koneksi);
}

function deleteOrder($id){
	global $koneksi;
	$idOrder = htmlspecialchars($id["id"]);

	myqli_query($koneksi,"DELETE FROM tOrders WHERE idOrder ='$idOrder'");

	return mysqli_affected_rows($koneksi);
}