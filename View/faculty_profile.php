<?php
require('../common/tableConst.php');
 require(SESS);
 ?>
<?php
	
	require(CONNECT);
?>
<?php 
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

<?php require("../common/navbar_profile.php") ?>
	<?php require("../common/sidemenu_profile.php"); ?>
	
		  <div class="col-sm-8 text-left"> 
      <p><?php echo $stmt?></p>
      <hr>
		<?php
			
			$student_count = 0;
			$sql = "select count(*) as student_count from student_info";
			$result = $conn->query($sql);
			$data = $result->fetch();
			$student_count = $data['student_count'];
		?>
		
	  <br>
     <h3><?php echo $totalS?></h3>
      <p><?php echo $student_count;?> <?php echo $student1 ?>,  <a href="student_record.php"><?php echo $msg?></a></p>
	  <br>
	  <br>
	  </div>
    <?php require(RIGHTMENU); ?>
	
  </div>
</div>

<?php require(FOOTER); ?>

</body>
</html>
