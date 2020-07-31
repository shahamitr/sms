<?php
	if(isset($_SESSION['lang'])){
		if($_SESSION['lang']=='fr'){
			require('lang.php');
		}
		else{
			require('eng.php');
		}
	}else{
			require('eng.php');
		}
?>

<div class="col-sm-2 sidenav text-left">
  <p><a href="dashboard.php"><?php echo $nav['home']?></a></p>
  <p><a href="student.php"><?php echo $nav['Students']?></a></p>
  <p><a href="faculty.php"><?php echo $nav['Faculty']?></a></p>
  <p><a href="user.php"><?php echo $nav['User']?></a></p>
</div>