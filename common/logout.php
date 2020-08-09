<?php
	session_start();
	require('tableConst.php');
	if(isset($_SESSION['lang'])){
		if($_SESSION['lang']=='fr'){
			header('Location: '.INDEX.'?lang=fr');
		}
		else{
			require('eng.php');
			header('Location: '.INDEX.'?lang=en');
		}
	}else{
			require('eng.php');
			header('Location: '.INDEX.'?lang=en');
	}
	unset($_SESSION["username"]);
?>