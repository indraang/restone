<?php

session_start();

if(!isset($_SESSION["data_admin"])){
	header("Location:login.php");
	exit;
}

$id = $_GET["id"];
