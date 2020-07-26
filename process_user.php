<?php 
require("session.php");
require("connect.php");

if($_POST){
	$action = $_POST['action'];
	$id = $_POST['id'];
	if($action == 'edit') {
		$username = $_POST['name'];
		$password = $_POST['password'];
		$type = $_POST['type'];
		
		$where = "where id = ".$id;
		
		$sql = "update user_master set username='$username', password='$password', type='$type' $where";
		$result = $conn->query($sql);
		header('Location: user.php?message=User Data Updated Sucessfully');
		
	}
} else if($_GET){ 
	$action = $_GET['action'];
	$id = $_GET['id'];
	if($action == 'delete'){
		$where = "where id = ".$id;
		
		//$sql = "delete from student_info $where";
		//$result = $conn->query($sql);
		
		
		$sql = "update user_master set is_deleted='1' $where";
		$result = $conn->query($sql);
		header('Location: user.php?message=User Data Deleted Sucessfully');
	}
} else {
	header('Location: index.php');
}