<?php 
require("connect.php");

function getAllStudent(){
	global $conn;
	$sql = "select * from student_info";
	$result = $conn->query($sql);
	return $result;
}

function getStudentById($id){
	global $conn;
	$sql = "select * from student_info where id = ".$id;
	$result = $conn->query($sql);
	return $data;
}

function getStudentByCondition($where){
	global $conn;
	$sql = "select * from student_info where $where";
	$result = $conn->query($sql);
	return $data;
}

function updateStudent(){
	
}

function deleteStudent(){
	
}

function addStudent(){
	
}