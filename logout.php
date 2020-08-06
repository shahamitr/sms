<?php
	session_start();
	
	if(isset($_SESSION['lang'])){
		if($_SESSION['lang']=='fr'){
			header('Location: index.php?lang=fr');
		}
		else{
			require('eng.php');
			header('Location: index.php?lang=en');
		}
	}else{
			require('eng.php');
			header('Location: index.php?lang=en');
	}
	unset($_SESSION["username"]);
?>