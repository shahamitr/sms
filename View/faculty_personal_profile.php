<?php 
require('../common/tableConst.php');
require(SESS);?>
<?php
	
	require(CONNECT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php require(ADMIN); ?>
  <style>
	
		.card {
		  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		  transition: 0.3s;
		  float:left;
		  width: 30%;
		}

		.card:hover {
		  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.card_container {
		  padding: 2px 16px;
		}
		
		
	</style>
</head>
<body>

<?php require('../common/navbar_profile.php') ?>
	<?php require("../common/sidemenu_profile.php"); ?>
	
    <div class="col-sm-8 text-left"> 
      <p>Your Profile</p>
      <hr>
		<?php
			if(isset($_SESSION['username'])){
				$name = $_SESSION['username']; 
			}
			echo '<div class="card">
					<img src="../images/img_avatar.png" alt="Avatar" style="width:100%">
						<div class="card_container">
							<h4><b>'.$name.'</b></h4>
							<p>Architect & Engineer</p>
						</div>
					</div>';
    ?>
			<div style="float:left;margin-left:20px;width:50%;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
  </div>
  <?php require(RIGHTMENU); ?>
</div>

<?php require(FOOTER); ?>

</body>
</html>
