<?php 
	require("session.php");
	require("student_model.php");
	require("faculty_model.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php require("admin_header.php"); ?>
  
</head>
<body>

<?php 
	require("navbar.php");
	require("sidemenu.php");
?>
	
    <div class="col-sm-8 text-left"> 
      <p>This dashboard will give you infromation about all students and faculty of Arena Animation.</p>
      <hr>
		<?php
			
			$student_count = 0;
			$students = getAllStudent();
			$student_count = $students->num_rows;
			
			$faculty_count = 0;
			$faculties = getAllFaculty();
			$faculty_count = $faculties->num_rows;
		
		?>
		
	  <br>
      <h3>Total Students In System</h3>
      <p><?php echo $student_count;?> Students,  <a href="student.php">Click Here for More info</a></p>
	  <br>
	  <br>
	  <h3>Total Faculties In System</h3>
      <p><?php echo $faculty_count;?> Faculties,  <a href="faculty.php">Click Here for More info</a></p>
    </div>
	
    <?php require("rightmenu.php"); ?>
	
  </div>
</div>

<?php require("footer.php"); ?>

</body>
</html>
