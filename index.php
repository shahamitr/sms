<?php
require('common/tableConst.php');
	session_start();
	
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
	if(isset($_GET['mode'])){
		if($_GET['mode']=='dk'){
			$_SESSION['mode'] ='dk';
		}
		else{
			$_SESSION['mode'] = "lg";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php require('header.php'); ?>

<style>
	#active{
		background-color:black;
		border-radius:50%;
		width:30px;
	}
	#active a i{
		color:white;
	} 
</style>
</head>
<body>
	<?php
	$a=rand(1,10);
?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/<?php echo $a?>.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					<?php echo $heading?>
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="Controller/login.php" method="post">

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
						  	
						  <ul style="margin-left:25px;">
						  <?php 
								$class1=$class2="";
								if(isset($_SESSION['mode'])) {
									if($_SESSION['mode']=='dk'){
										$class1="id='active'";
									}
									else{
										$class2 = 'id="active"';
									}
								}else{
									$class2 = 'id="active"';
								}								
						  ?>
							<li <?php echo $class1?>><a href="index.php?mode=dk" style="font-size:20px;"><i class="fa fa-moon-o" aria-hidden="true"></i></a></li>
							<li <?php echo $class2?>><a href="index.php?mode=lg" style="font-size:20px;"><i class="fa fa-sun-o" aria-hidden="true"></i></a></li>
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

	<?php require('footer.php'); ?>

</body>
</html>