<?php 
require("session.php");
require('tableConst.php');
require(USM);

if($_POST){
	$action = $_POST['action'];
	$id = $_POST['id'];
	if($action == 'edit') {
		$username = $_POST['name'];
		$password = $_POST['password'];
		$type = $_POST['type'];
		$result =updateUser($id,$username,$password,$type);
		header('Location: '.US.'?message=User Data Updated Sucessfully');
		
	}
} else if($_GET){ 
	$action = $_GET['action'];
	$id = $_GET['id'];
	if($action == 'delete'){
		$result =deleteUser($id);
		header('Location: '.US.'?message=User Data Deleted Sucessfully');
	}
} else {
	header('Location: index.php');
}