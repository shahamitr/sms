<?php 
	require("session.php");
	require('tableConst.php');
	require(STUM);
	$stmt ="This dashboard will give you infromation about all students and faculty of Arena Animation.";
	$totalS="Total Students In System";
	$totalF="Total Faculties In System";
	$student1 = "Student";
	$faculty1 = "Faculty";
	$msg ="Click Here for More info";
	if(isset($_SESSION['lang'])){
		if($_SESSION['lang'] == "fr"){
			$stmt ="Ce tableau de bord vous donnera des informations sur tous les étudiants et la faculté d'animation d'arène.";
			$totalS="Nombre total d'étudiants dans le système";
			$totalF="Nombre total de facultés dans le système";
			$student1 = "d'étudiants";
			$faculty1 = "de facultés";
			$msg ="Cliquez ici pour plus d'informations";
		}
	}
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

<?php 
	require(NAVBAR);
	require(SIDEMENU);
?>
	
    <div class="col-sm-8 text-left"> 
      <p><?php echo $stmt?></p>
      <hr>
		<?php
			
			$student_count = 0;
			$students = getAllStudent();
			$student_count = $students->rowCount();
			
			$faculty_count = 0;
			$faculties = getAllFaculty();
			$faculty_count = $faculties->rowCount();
		
		?>
		
	  <br>
      <h3><?php echo $totalS?></h3>
      <p><?php echo $student_count;?> <?php echo $student1 ?>,  <a href="student.php"><?php echo $msg?></a></p>
	  <br>
	  <br>
	  <h3><?php echo $totalF?></h3>
      <p><?php echo $faculty_count;?> <?php echo $faculty1?>,  <a href="faculty.php"><?php echo $msg?></a></p>
    </div>
	
    <?php require(RIGHTMENU); ?>
	
  </div>
</div>

<?php require(FOOTER); ?>

</body>
</html>
