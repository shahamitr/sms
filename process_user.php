<?php 
require("session.php");
require('tableConst.php');
require(USM);
if(isset($_SESSION['lang'])){
		if($_SESSION['lang']=='fr'){
			require('lang.php');
		}
		else{
			require('eng.php');
		}
	}else{
			require('eng.php');
		}
if($_POST){
	$action = $_POST['action'];
	$id = $_POST['id'];
	if($action == 'edit') {
		$username = $_POST['name'];
		$password = $_POST['password'];
		$type = $_POST['type'];
		$result =updateUser($id,$username,$password,$type);
		header('Location: '.US.'?message='.$nav['User']." ".$message['update']);
		
	}
} else if($_GET){ 
	$action = $_GET['action'];
	$id = $_GET['id'];
	if($action == 'delete'){
		$result =deleteUser($id);
		header('Location: '.US.'?message='.$nav['User']." ".$message['delete']);
	}
	else if($action == 'inactive' || $action == 'active'){
		$status = 0;
		if($action === 'active') $status = 1;
		$result = InactiveUser($status, $id);
	}
} else {
	header('Location: index.php');
}