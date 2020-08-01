<?php
	$host = "localhost";
	$username = "amit";
	$password = "amit";
	$db = "students";

	try {
		$conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
?>

