<?php 
require('tableConst.php');
require(CONNECT);

function getAllStudent(){
	global $conn;
	$stmt = $conn->prepare("select * from ".STUDENT);
	$stmt->execute();
	return $stmt;
}

function InactiveStudent($status,$total){
	global $conn;
	$sql="UPDATE `".STUDENT."` SET `current_status` = '".$status."' WHERE `".STUDENT."`.`id` IN(".$total.");";
	$result = $conn->query($sql);
	return $result;
}

function getStudentByCondition($where){
	global $conn;
	$stmt = $conn->prepare("select * from ".STUDENT." where $where");
	$stmt->execute();
	return $stmt;
}

function updateStudent($id,$name,$surname,$dob){
	global $conn;
	
	$stmt = $conn->prepare("update ".STUDENT." set name = :name, surname = :surname , dob = :dob where id = :id");
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':surname', $surname);
	$stmt->bindParam(':dob', $dob);
	$stmt->bindParam(':id', $id);
	$stmt->execute();
	
	return $stmt;
}

function deleteStudent($id){
	global $conn;

	$is_deleted = 1;
	$stmt = $conn->prepare("update ".STUDENT." set is_deleted = :is_deleted where id = :id");
	$stmt->bindParam(':is_deleted',$is_deleted);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	
	return $stmt;
}

function addStudent($name,$surname,$gender,$DOB,$city,$state){
	global $conn;
	// $sql= "INSERT INTO ".STUDENT." (name,surname,gender,dob,city,state,created_date,current_status) VALUES ('$name','$surname','$gender','$DOB','$city','$state',NOW(),'1')";
	// $result =mysqli_query($conn, $sql);
	$date = date('Y-m-d h:i:s');
	$current_status = '1';
	$stmt = $conn->prepare("INSERT INTO ".STUDENT."  (name,surname,gender,dob,city,state,created_date,current_status)
	  VALUES (:name,:surname,:gender,:dob,:city,:state,:created_date,:current_status)");
	  // $stmt->bindParam(':name', $name, PDO::PARAM_STR);
	  // $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
	  // $stmt->bindParam(':gender', $gender, PDO::PARAM_STR_CHAR);
	  // $stmt->bindParam(':dob', $DOB, PDO::PARAM_STR);
	  // $stmt->bindParam(':city', $city, PDO::PARAM_STR);
	  // $stmt->bindParam(':state', $state, PDO::PARAM_STR);
	  // $stmt->bindParam(':created_date', $date, PDO::PARAM_STR);
	  // $stmt->bindParam(':current_status', $current_status, PDO::PARAM_STR_CHAR);
	
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

function getAllFaculty(){
	global $conn;
	$stmt = $conn->prepare("select * from ".FACULTY);
	$stmt->execute();
	return $stmt;
}