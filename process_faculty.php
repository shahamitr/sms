<?php 
require("session.php");
require("connect.php");

if($_POST){
	$action = $_POST['action'];
	$id = $_POST['id'];
	if($action == 'edit') {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$dob = $_POST['dob'];
		
		$where = "where id = ".$id;
		
		$sql = "update faculty_info set name='$name', surname='$surname', dob='$dob' $where";
		$result = $conn->query($sql);
		header('Location: faculty.php?message=Faculty Data Updated Sucessfully');

	}
} else if($_GET){ 
	$action = $_GET['action'];
	$id = $_GET['id'];
	if($action == 'delete'){
		$where = "where id = ".$id;
		
		//$sql = "delete from student_info $where";
		//$result = $conn->query($sql);
		
		
		$sql = "update faculty_info set is_active='0' $where";
		$result = $conn->query($sql);
		header('Location: faculty.php?message=Faculty Data Deleted Sucessfully');	
	}
} else {
	header('Location: index.php');
}