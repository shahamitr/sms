<?php require("session.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php require("admin_header.php"); ?>
  
</head>
<body>

<?php require("navbar.php") ?>
	<?php require("sidemenu.php"); ?>
	
    <div class="col-sm-8 text-left"> 
      <p>This dashboard will give you infromation about all students and faculty of Arena Animation.</p>
      <hr>
		<?php
			require("connect.php");
			$student_count = 0;
			$sql = "select count(*) as student_count from student_info";
			$result = $conn->query($sql);
			$data = mysqli_fetch_assoc($result);
			$student_count = $data['student_count'];
			
			$faculty_count = 0;
			$sql = "select count(*) as faculty_count from faculty_info";
			$result = $conn->query($sql);
			$data = mysqli_fetch_assoc($result);
			$faculty_count = $data['faculty_count'];
		
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
