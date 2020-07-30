<?php 
require("session.php");
require('tableConst.php');
require(STUM);

if($_POST){
	$action = $_POST['action'];
	$id = $_POST['id'];
	if($action == 'edit') {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$dob = $_POST['dob'];
		$result = updateStudent($id,$name,$surname,$dob);
		header('Location: '.STU.'?message=User Data Updated Sucessfully');
		
	}
} else if($_GET){ 
	$action = $_GET['action'];
	$id = $_GET['id'];
	if($action == 'delete'){
		$result = deleteStudent($id);
		header('Location: '.STU.'?message=User Data Deleted Sucessfully');
	} 	
} else {
	header('Location: index.php');
}