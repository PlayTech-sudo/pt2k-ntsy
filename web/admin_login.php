<?php
	session_start();
	if(!isset($_POST['submit'])){
		header('location:admin.php');
		exit;
	}
	require_once "dbconn.php";

	$name = trim($_POST['name']);
	$pass = trim($_POST['pass']);
	
	$name = sanitize($conn, $name);
	$pass = sanitize($conn, $pass);

	$pass = sha1($pass);

	// get from db
	$query = "SELECT * from admin_login where admin_name = '".$name."' and password = '".$pass."'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Empty data " . mysqli_error($conn);
		exit;
	}
	include "./template/displayadmin.php";
	
	if(!isset($conn)) {mysqli_close($conn);}
?>