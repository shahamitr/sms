<?php 
require('../common/tableConst.php');
require(SESS);

require(STUM);
require(ADMIN);

if($_POST){
	$action = $_POST['action'];
	$id = $_POST['id'];
	if($action == 'edit') {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$dob = $_POST['dob'];
		$result = updateStudent($id,$name,$surname,$dob);
		header('Location: '.STU.'?message='.$nav['Student']." ".$message['update']);
		
	}
} else if($_GET){ 
	$action = $_GET['action'];
	$id = $_GET['id'];
	if($action == 'delete'){
		$result = deleteStudent($id);
		header('Location: '.STU.'?message='.$nav['Student']." ".$message['delete']);
	}
	else if($action == 'inactive' || $action == 'active'){
		$status = 0;
		if($action === 'active') $status = 1;
		$result = InactiveStudent($status, $id);
	}	
} else {
	header('Location: '.INDEX);
}