<?php require("session.php");?>
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
<?php 
require('tableConst.php');
require(CONNECT);
require(STUM);
require(FACM);
require(USM);
	if(isset($_POST['add'])){
		if($_GET){
			if($_GET['type']=="user"){
				$username= $_POST['username'];
				$password = $_POST['password'];
				$type = $_POST['type'];
				$result =addUser($username,$password,$type);
				header('Location: user.php?message='.$nav['User']." ".$message['added']);
				
			} elseif($_GET['type']=="faculty"){
				$name= $_POST['name'];
				$surname= $_POST['surname'];
				$DOB= $_POST['dob'];
				$gender= $_POST['gender'];
				$city= $_POST['city'];
				$state= $_POST['state'];
				$result = addFaculty($name,$surname,$gender,$DOB,$city,$state);
				header('Location: faculty.php?message='.$nav['Faculty']." ".$message['added']);
			} else if($_GET['type']=="student"){
				$name= $_POST['name'];
				$surname= $_POST['surname'];
				$DOB= $_POST['dob'];
				$city= $_POST['city'];
				$state= $_POST['state'];
				$gender = $_POST['gender'];
				$result = addStudent($name,$surname,$gender,$DOB,$city,$state);
				header('Location: student.php?message='.$nav['Student']." ".$message['added']);
			}
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard - Add</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/cities.js"></script>

	<?php require(ADMIN); ?>

	
</head>
<body>
	<?php require(NAVBAR) ?>

	
<div class="container-fluid text-center">    
  <div class="row content">
    <?php  require(SIDEMENU) ?>
	
    <div class="col-sm-8 text-left"> 
      <h3><?php echo $add['Add']?></h3>
	  <hr>

		<?php 




if($_GET){
	if($_GET['type']=="user"){ ?>
		<div class="col-md-5">						
							<form method="post">
								<div class="form-group">
								<label for="username"><?php echo $common['user']?></label>
								<input type="text" class="form-control" id="username" placeholder="<?php echo $common['user']?>" name="username">
							  </div>
							  <div class="form-group">
								<label for="password"><?php echo $common['pass']?></label>
								<input type="password" class="form-control" id="surname" placeholder="<?php echo $common['pass']?>"   name="password">
							  </div>
							  <div class="form-group">
								<label for="type">Type</label>
								<input type="text" class="form-control" id="date" placeholder="Type"   name="type">
							  </div>
							 
							  <button type="submit" name="add" class="btn btn-primary" ><?php echo $common['submit']?></button>
							</form>
						</div>
<?php	} else if ($_GET['type']=="faculty") { ?>
		<div class="col-md-5">
							<form method="post">
								<div class="form-group">
								<label for="name"><?php echo $table['Firstname']?></label>
								<input type="text" class="form-control" id="name" placeholder="<?php echo $table['Firstname']?>" name="name">
							  </div>
							  <div class="form-group">
								<label for="surname"><?php echo $table['Lastname']?></label>
								<input type="text" class="form-control" id="surname" placeholder="<?php echo $table['Lastname']?>" name="surname">
							  </div>
							  <div class="form-group">
								<label for="gender"><?php echo $table['Gender']?></label>
								<select id="gender" name="gender">
									<option Value="M"><?php echo $common['male']?></option>
									<option Value="F"><?php echo $common['female']?></option>
								</select>
							  </div>
							  <div class="form-group">
								<label for="dob"><?php echo $table['DOB']?></label>
								<input type="date" class="form-control" id="dob" placeholder="<?php echo $table['DOB']?>"   name="dob">
							  </div>
							  <div class="form-group">
								<label for="stt"><?php echo $common['state']?></label>
								<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>
								<label for="city"><?php echo $table['City']?></label>
								<select id ="state" class="form-control" name="city" required></select>
								<script language="javascript">print_state("sts");</script>
							</div>
							  
							  <button type="submit" name="add" class="btn btn-primary" ><?php echo $common['submit']?></button>
							</form>
						</div>


<?php	
} else if ($_GET['type']=="student") { ?>
		<div class="col-md-5">
							<form method="post">
								<div class="form-group">
								<label for="name"><?php echo $table['Firstname']?></label>
								<input type="text" class="form-control" id="name" placeholder="<?php echo $table['Firstname']?>" name="name">
							  </div>
							  <div class="form-group">
								<label for="surname"><?php echo $table['Lastname']?></label>
								<input type="text" class="form-control" id="surname" placeholder="<?php echo $table['Lastname']?>" name="surname">
							  </div>
							  <div class="form-group">
								<label for="gender"><?php echo $table['Gender']?></label>
								<select id="gender" name="gender">
									<option Value="M"><?php echo $common['male']?></option>
									<option Value="F"><?php echo $common['female']?></option>
								</select>
							  </div>
							  <div class="form-group">
								<label for="dob"><?php echo $table['DOB']?></label>
								<input type="date" class="form-control" id="dob" placeholder="<?php echo $table['DOB']?>"   name="dob">
							  </div>
							  <div class="form-group">
								<label for="stt"><?php echo $common['state']?></label>
								<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>
								<label for="city"><?php echo $table['City']?></label>
								<select id ="state" class="form-control" name="city" required></select>
								<script language="javascript">print_state("sts");</script>
							</div>
							  
							  <button type="submit" name="add" class="btn btn-primary" ><?php echo $common['submit']?></button>
							</form>
						</div>


<?php	
}


} 
 else {
	header('Location: index.php');
 }
?>
    
	<?php //require('rightmenu.php'); ?>
	
  </div>
</div>

<?php require(FOOTER); ?>


</body>
</html>