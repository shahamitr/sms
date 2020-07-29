<?php
	require("connect.php");
	
	if($_POST){
		$username = $_POST['username'];
		$password = $_POST['pass'];
		
		if($username && $password) {
			
			$username = ($username);
			$password = ($password);
			
			$sql = "select * from user_master where username='".$username."' and password='".$password."' and is_active='1' limit 1";
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				
				session_start();
				$row = mysqli_fetch_array($result);
				$id = $row['id'];
				$_SESSION['username'] = $row['username'];
				
				$sql = "update user_master set last_login = NOW() where id=".$id." limit 1";
				$result = $conn->query($sql);
				if($row['type']==2){
					header('Location: Student_profile.php');
				}
				else if($row['type']==3){
					header('Location: faculty_profile.php');
				}
				else{
					//update will not return count
					if($result){
						
						header('Location: dashboard.php');
						
					} else {
						header('Location: index.php?error=contact your administrator');
					}
				}

			} else {
				header('Location: index.php?error=Invalid credentials');
			}
			exit;
		} else {
			header('Location: index.php?error=Invalid credentials');
		}
	} else {
		header('Location: index.php?error=Invalid credentials');
	}
?>