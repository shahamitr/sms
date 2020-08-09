<?php 
require('../common/tableConst.php');
require(SESS);

require(USM);
require(ADMIN);
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
	header('Location: '.INDEX);
}