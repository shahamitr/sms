<?php 
require('tableConst.php');
require(CONNECT);



function InactiveFaculty($status,$total){
	global $conn;
	$sql="UPDATE `".FACULTY."` SET `is_active` = '".$status."' WHERE `".FACULTY."`.`id` IN(".$total.");";
	$result = $conn->query($sql);
	return $result;
}

function getFacultyByCondition($where){
	global $conn;
	$sql = "select * from ".FACULTY." where $where";
	$result = $conn->query($sql);
	return $result;
}

function updateFaculty($id,$name,$surname,$dob){
	global $conn;
	$sql = "update ".FACULTY." set name='$name', surname='$surname', dob='$dob' where id = ".$id;
		$result = $conn->query($sql);
		return $result;
}

function deleteFaculty($id){
	global $conn;
	$sql = "update ".FACULTY." set is_deleted='1' where id =".$id;
	$result = $conn->query($sql);
	return $result;
}

function addFaculty($name,$surname,$gender,$DOB,$city,$state){
	global $conn;
	$sql= "INSERT INTO ".FACULTY." (name,surname,gender,dob,city,state,date_created,is_active) VALUES ('$name','$surname','$gender','$DOB','$city','$state',NOW(),'1')";
	$result =mysqli_query($conn, $sql);
	return $result;
}