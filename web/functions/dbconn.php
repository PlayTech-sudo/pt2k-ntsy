<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "form";
	$conn = mysqli_connect($servername, $username, $password, $db);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	date_default_timezone_set("Asia/Kolkata");

	function sanitize($conn, $str){
		return mysqli_real_escape_string($conn, $str);
	}

	function getsl($conn, $id, $table){
		$query = "SELECT max($id) FROM $table";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);
		$id = $row[0];
		if(!$id){
			$id = 1;
			return $id;
		}else{
			$id = $id + 1;
			return $id;
		}
	}

?>