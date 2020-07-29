<?php 
$href = $href2 = $style = $style2 = "";
			if($basename == "dashboard.php"){
				$href="dashboard.php";
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

<div class="col-sm-2 sidenav text-left">
  <p ><a href="<?php echo $href?>">Home</a></p>
  <p <?php echo $style?>><a href="student_record.php">Students</a></p>
  <p <?php echo $style?>><a href="<?php echo $href2?>">Faculty</a></p>
  <p <?php echo $style.$style2?>><a href="user.php">User</a></p>
</div>