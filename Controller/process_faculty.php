<?php 
require('../common/tableConst.php');
require(SESS);

require(FACM);
require(ADMIN);
if($_POST){
	$action = $_POST['action'];
	$id = $_POST['id'];
	if($action == 'edit') {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$dob = $_POST['dob'];
		$result =updateFaculty($id,$name,$surname,$dob);
		header('Location: '.FACUL.'?message='.$nav['Faculty']." ".$message['update']);

	}
} else if($_GET){ 
	$action = $_GET['action'];
	$id = $_GET['id'];
	if($action == 'delete'){
		$where = "where id = ".$id;
		$result =deleteFaculty($id);
		header('Location: '.FACUL.'?message='.$nav['Faculty']." ".$message['delete']);	
	}
	else if($action == 'inactive' || $action == 'active'){
		$status = 0;
		if($action === 'active') $status = 1;
		$result = InactiveFaculty($status, $id);
	}
} else {
	header('Location: '.INDEX);
}