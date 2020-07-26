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
		
		$sql = "update student_info set name='$name', surname='$surname', dob='$dob' $where";
		$result = $conn->query($sql);
		sleep(1);
		header('Location: student.php');
		
	}
} else if($_GET){ 
	$action = $_GET['action'];
	$id = $_GET['id'];
	if($action == 'delete'){
		$where = "where id = ".$id;
		
		//$sql = "delete from student_info $where";
		//$result = $conn->query($sql);
		
		
		$sql = "update student_info set is_deleted='1' $where";
		$result = $conn->query($sql);
		sleep(1);
		header('Location: student.php');	
	}
} else {
	header('Location: index.php');
}