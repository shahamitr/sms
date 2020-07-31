<?php
	session_start();
	require('tableConst.php');
	$heading = "STUDENT LOGIN";
	$lang ="Language";
	$user ="User name";
	$pass = "Password";
	$footer = "Login";
	if(isset($_GET['lang'])){
		if($_GET['lang']=="fr"){
			$_SESSION['lang'] = "fr";
		}
		else if($_GET['lang'] == "en"){
			$_SESSION['lang'] = "";
		}
	}
		else{
			$_SESSION['lang'] = "";
		}
?>
<?php
	if(isset($_SESSION['lang'])){
		if($_SESSION['lang']=='fr'){
			$heading = "CONNEXION ÉTUDIANTE";
			$lang ="Langue";
			$user ="Nom d'utilisateur";
			$pass = "Mot de passe";
			$footer = "S'identifier";
		}
	}
?>
<?php
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php require(HEADING); ?>


</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					<?php echo $heading?>
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="login.php" method="post">

					<div style="color:red;font-size:14px;text-align:center;"><?php if(isset($_GET['error'])) echo $_GET['error']; ?></div>	
					 <div class="col-md-12 school-options-dropdown text-center">
						<div class="dropdown btn-group">

						  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $lang;?>
							<span class="caret"></span>
						  </button>

						  <ul class="dropdown-menu">
							<li><a href="index.php?lang=en">EN</a></li>
							<li><a href="index.php?lang=fr">FR</a></li>
						  </ul>

						</div>
					  </div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="<?php echo $user?>" value="" autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="<?php echo $pass?>" value="" autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							<?php echo $footer?>
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	<?php require(FOOTER); ?>

</body>
</html>