<?php 
require('tableConst.php');
require(CONNECT);

function InactiveUser($status,$total){
	global $conn;
	$sql="UPDATE `".USER."` SET `is_active` = '".$status."' WHERE `".USER."`.`id` IN(".$total.");";
	$result = $conn->query($sql);
	return $result;
}

function getUserByCondition($where){
	global $conn;
	$sql = "select * from ".USER." where $where";
	$result = $conn->query($sql);
	return $result;
}

function updateUser($id,$username,$password,$type){
	global $conn;
	$sql = "update ".USER." set username='$username', password='$password', type='$type' where id =".$id;
	$result = $conn->query($sql);
	return $result;
}

function deleteUser($id){
	global $conn;
	$sql = "update ".USER." set is_deleted='1' where id = ".$id;
	$result = $conn->query($sql);
	return $result;
}

function addUser($username,$password,$type){
	global $conn;
	$sql= "INSERT INTO ".USER." (username,password,type,is_active,date_created) VALUES ('$username','$password',$type,'1',NOW())";
	$result =mysqli_query($conn, $sql);
	return $result;
}