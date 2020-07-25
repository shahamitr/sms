<?php
	$host = "localhost";
	$username = "amit";
	$password = "amit";
	$db = "students";

	$conn = mysqli_connect($host,$username,$password,$db);
	
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
?>