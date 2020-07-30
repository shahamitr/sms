<?php require("session.php");?>
<?php
	require('tableConst.php');
	require(CONNECT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php require(ADMIN); ?>
  
</head>
<body>

<?php require("navbar_profile.php") ?>
	<?php require("sidemenu_profile.php"); ?>
	
		  <div class="col-sm-8 text-left"> 
      <p>This dashboard will give you infromation about all students and faculty of Arena Animation.</p>
      <hr>
		<?php
			
			$student_count = 0;
			$sql = "select count(*) as student_count from student_info";
			$result = $conn->query($sql);
			$data = mysqli_fetch_assoc($result);
			$student_count = $data['student_count'];
		?>
		
	  <br>
      <h3>Total Students Assigned To You</h3>
      <p><?php echo $student_count;?> Students,  <a href="student_record.php">Click Here for More info</a></p>
	  <br>
	  <br>
	  </div>
    <?php require(RIGHTMENU); ?>
	
  </div>
</div>

<?php require(FOOTER); ?>

</body>
</html>
