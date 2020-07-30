<?php 
require("connect.php");

function getAllFaculty(){
	global $conn;
	$sql = "select * from faculty_info";
	$result = $conn->query($sql);
	return $result;
}

function getFacultyById($id){
	global $conn;
	$sql = "select * from faculty_info where id = ".$id;
	$result = $conn->query($sql);
	return $result;
}

function getFacultyByCondition($where){
	global $conn;
	$sql = "select * from faculty_info where $where";
	$result = $conn->query($sql);
	return $result;
}

function updateFaculty(){
	
}

function deleteFaculty(){
	
}

function addFaculty(){
	
}