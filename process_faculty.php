<?php 
require("session.php");
require('tableConst.php');
require(FACM);

if($_POST){
	$action = $_POST['action'];
	$id = $_POST['id'];
	if($action == 'edit') {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$dob = $_POST['dob'];
		$result =updateFaculty($id,$name,$surname,$dob);
		header('Location: '.FACUL.'?message=Faculty Data Updated Sucessfully');

	}
} else if($_GET){ 
	$action = $_GET['action'];
	$id = $_GET['id'];
	if($action == 'delete'){
		$where = "where id = ".$id;
		$result =deleteFaculty($id);
		header('Location: '.FACUL.'?message=Faculty Data Deleted Sucessfully');	
	}
} else {
	header('Location: index.php');
}