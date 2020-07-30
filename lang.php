<?php
	$heading = "STUDENT LOGIN";
	$lang ="Language";
	$user ="User name";
	$pass = "Password";
	$footer = "Login";
	if(isset($_GET['lang'])){
		if($_GET['lang']=="fr"){
			$heading = "CONNEXION ÉTUDIANTE";
			$lang ="Langue";
			$user ="Nom d'utilisateur";
			$pass = "Mot de passe";
			$footer = "S'identifier";
			$_SESSION['lang'] = "fr";
		}
		else if($_GET['lang'] == "en"){
			$_SESSION['lang'] = "";
		}
	}
?>