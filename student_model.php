<?php 
require('tableConst.php');
require(CONNECT);

function getAllStudent(){
	global $conn;
	$sql = "select * from ".STUDENT."";
	$result = $conn->query($sql);
	return $result;
}

function InactiveStudent($status,$total){
	global $conn;
	$sql="UPDATE `".STUDENT."` SET `current_status` = '".$status."' WHERE `".STUDENT."`.`id` IN(".$total.");";
	$result = $conn->query($sql);
	return $result;
}

function getStudentByCondition($where){
	global $conn;
	$sql = "select * from ".STUDENT." where $where";
	$result = $conn->query($sql);
	return $result;
}

function updateStudent($id,$name,$surname,$dob){
	global $conn;
	$sql = "update ".STUDENT." set name='$name', surname='$surname', dob='$dob' where id = ".$id;
	$result = $conn->query($sql);
	return $result;
}

function deleteStudent($id){
	global $conn;
	$sql = "update ".STUDENT." set is_deleted='1' where id =".$id;
	$result = $conn->query($sql);
	return $result;
}

function addStudent($name,$surname,$gender,$DOB,$city,$state){
	global $conn;
	$sql= "INSERT INTO ".STUDENT." (name,surname,gender,dob,city,state,created_date,current_status) VALUES ('$name','$surname','$gender','$DOB','$city','$state',NOW(),'1')";
	$result =mysqli_query($conn, $sql);
	return $result;
}
function getAllFaculty(){
	global $conn;
	$sql = "select * from ".FACULTY."";
	$result = $conn->query($sql);
	return $result;
}