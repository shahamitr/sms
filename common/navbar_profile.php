<?php
	require('tableConst.php');
?>
<?php
	require(ADMIN);
?>
<nav id="navbar1" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" id="nav-head" href="#">SMS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	  <?php
		$home_class = $student_class = $faculty_class = $contact_class = $user_class= $href = $href2 = $style = $style2 = "";
		$basename = basename($_SERVER['SCRIPT_NAME']);
		if($basename == "faculty_profile.php" || $basename == "Student_profile.php" ){
			$home_class = 'class="active"';
		}else if($basename == "student_record.php"){
			$student_class = 'class="active"';
		}else if($basename == "faculty_personal_profile.php"){
			$faculty_class = 'class="active"';
		}else if($basename == "contact.php"  ){
			$contact_class = 'class="active"';
		}else if($basename == "user.php" || basename($_SERVER['REQUEST_URI']) == "add.php?type=user"){
				$user_class = 'class="active"';
		}
	  ?>	
	  <?php if($basename == "dashboard.php"){
				$href="../View/dashboard.php";
			} 
			else if($basename == "faculty_profile.php" || $basename == "student_record.php" || $basename == "faculty_personal_profile.php" ){
				$href="faculty_profile.php";
				$href2="faculty_personal_profile.php";
				$style2 = "style='display:none'";
			}
			else{
				$href="Student_profile.php";
				$style = "style='display:none'";
			}
	  ?>
      <ul id="navv" class="nav navbar-nav">
        <li <?php echo $home_class; ?> ><a href="<?php echo $href?>"><?php echo $nav['home']?></a></li>
		
			<li <?php echo $style?> <?php echo $student_class; ?>><a href="../View/student_record.php"><?php echo $nav['Students']?></a></li>
			<li <?php echo $style?> <?php echo $faculty_class; ?>><a href="<?php echo $href2?>"><?php echo $nav['Faculty']?></a></li>
			<li <?php echo $contact_class; ?>><a href="#">Contact</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../common/logout.php">
			<?php 
			if(isset($_SESSION['username'])){
				echo $nav['Welcome']." , ".$_SESSION['username'];			}
			?>
			<span class="glyphicon glyphicon-log-in"></span> <?php echo $nav['Logout']?></a>
		</li>
      </ul>
    </div>
  </div>
</nav>