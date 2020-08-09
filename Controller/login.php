<?php
	require('../common/tableConst.php');
	require(CONNECT);
	
	
	
	if($_POST){
		$username = $_POST['username'];
		$password = $_POST['pass'];
		
		if($username && $password) {
			
			$username = ($username);
			$password = ($password);
			
			$sql = "select * from user_master where username='".$username."' and password='".$password."' and is_active='1' limit 1";
			$result = $conn->query($sql);
			
			if($result->rowCount() > 0){
				
				session_start();
				$row = $result->fetch();
				$id = $row['id'];
				$_SESSION['username'] = $row['username'];
				
				$sql = "update ".USER." set last_login = NOW() where id=".$id." limit 1";
				$result = $conn->query($sql);
				if($row['type']==2){
					header('Location: ../View/Student_profile.php');
				}
				else if($row['type']==3){
					header('Location: ../View/faculty_profile.php');
				}
				else{
					//update will not return count
					if($result){
						
						header('Location: '.DASH.'');
						
					} else {
						header('Location: '.INDEX.'?error=contact your administrator');
					}
				}

			} else {
				header('Location: '.INDEX.'?error=Invalid credentials');
			}
			exit;
		} else {
			header('Location: '.INDEX.'.?error=Invalid credentials');
		}
	} else {
		header('Location: '.INDEX.'.?error=Invalid credentials');
	}
?>