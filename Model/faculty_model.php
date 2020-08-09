<?php 
require('../common/tableConst.php');
require(CONNECT);



function InactiveFaculty($status,$total){
	global $conn;
	$sql="UPDATE `".FACULTY."` SET `is_active` = '".$status."' WHERE `".FACULTY."`.`id` IN(".$total.");";
	$result = $conn->query($sql);
	return $result;
}

function getFacultyByCondition($where){
	global $conn;
	$stmt = $conn->prepare("select * from ".FACULTY." where $where");
	$stmt->execute();
	return $stmt;
}

function updateFaculty($id,$name,$surname,$dob){
	global $conn;
	$sql = "update ".FACULTY." set name=:name, surname=:surname, dob=:dob where id =:id";
	$result = $conn->prepare($sql);
	$result->execute(array(
		':name' => $name,
		':surname' => $surname,
		':dob' => $dob,
		':id' =>$id
	));
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
	$date = date('Y-m-d h:i:s');
	$current_status = '1';
	$sql= "INSERT INTO ".FACULTY." (name,surname,gender,dob,city,state,date_created,is_active) VALUES (:name,:surname,:gender,:dob,:city,:state,:created_date,:current_status)";
	$stmt = $conn->prepare($sql);
	$data = array(
		':name'=> $name,
		':surname'=> $surname,
		':gender'=> $gender,
		':dob'=> $DOB,
		':city'=> $city,
		':state'=> $state,
		':created_date'=> $date,
		':current_status'=> $current_status
		);
	
	$stmt->execute($data);
	return $stmt;
}