<?php
	$conn = mysqli_connect('localhost', 'root', '', 'test');
	if (!$conn){
		die("Database connection failed".mysqli_error($conn));
	}
	$select_db = mysqli_select_db($conn, 'test');
	if (!$select_db){
		die("database selection failed".mysqli_error($conn));
	}
?>