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
				header('Location: user.php?message=User Data Added Sucessfully');
			} elseif($_GET['type']=="faculty"){
				$name= $_POST['name'];
				$surname= $_POST['surname'];
				$DOB= $_POST['dob'];
				$gender= $_POST['gender'];
				$city= $_POST['city'];
				$state= $_POST['state'];
				$result = addFaculty($name,$surname,$gender,$DOB,$city,$state);
				header('Location: faculty.php?message=Faculty Data Added Sucessfully');
			} else if($_GET['type']=="student"){
				$name= $_POST['name'];
				$surname= $_POST['surname'];
				$DOB= $_POST['dob'];
				$city= $_POST['city'];
				$state= $_POST['state'];
				$gender = $_POST['gender'];
				$result = addStudent($name,$surname,$gender,$DOB,$city,$state);
				header('Location: student.php?message=Student Data Added Sucessfully');
			}
		}
	}
?>
<?php require("session.php");?>
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
      <h3>Add</h3>
	  <hr>

		<?php 




if($_GET){
	if($_GET['type']=="user"){ ?>
		<div class="col-md-5">						
							<form method="post">
								<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" placeholder="Username" name="username">
							  </div>
							  <div class="form-group">
								<label for="password">Surname</label>
								<input type="password" class="form-control" id="surname" placeholder="password"   name="password">
							  </div>
							  <div class="form-group">
								<label for="type">Type</label>
								<input type="text" class="form-control" id="date" placeholder="Type"   name="type">
							  </div>
							 
							  <button type="submit" name="add" class="btn btn-primary" >Submit</button>
							</form>
						</div>
<?php	} else if ($_GET['type']=="faculty") { ?>
		<div class="col-md-5">
							<form method="post">
								<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" placeholder="Name" name="name">
							  </div>
							  <div class="form-group">
								<label for="surname">Surname</label>
								<input type="text" class="form-control" id="surname" placeholder="surname" name="surname">
							  </div>
							  <div class="form-group">
								<label for="gender">Gender</label>
								<select id="gender" name="gender">
									<option Value="M">Male</option>
									<option Value="F">Female</option>
								</select>
							  </div>
							  <div class="form-group">
								<label for="dob">DOB</label>
								<input type="date" class="form-control" id="dob" placeholder="Date of Birth"   name="dob">
							  </div>
							  <div class="form-group">
								<label for="stt">State</label>
								<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>
								<label for="city">City</label>
								<select id ="state" class="form-control" name="city" required></select>
								<script language="javascript">print_state("sts");</script>
							</div>
							  
							  <button type="submit" name="add" class="btn btn-primary" >Submit</button>
							</form>
						</div>


<?php	
} else if ($_GET['type']=="student") { ?>
		<div class="col-md-5">
							<form method="post">
								<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" placeholder="Name" name="name">
							  </div>
							  <div class="form-group">
								<label for="surname">Surname</label>
								<input type="text" class="form-control" id="surname" placeholder="surname" name="surname">
							  </div>
							  <div class="form-group">
								<label for="gender">Gender</label>
								<select id="gender" name="gender">
									<option Value="M">Male</option>
									<option Value="F">Female</option>
								</select>
							  </div>
							  <div class="form-group">
								<label for="dob">DOB</label>
								<input type="date" class="form-control" id="dob" placeholder="Date of Birth"   name="dob">
							  </div>
							  <div class="form-group">
								<label for="stt">State</label>
								<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>
								<label for="city">City</label>
								<select id ="state" class="form-control" name="city" required></select>
								<script language="javascript">print_state("sts");</script>
							</div>
							  
							  <button type="submit" name="add" class="btn btn-primary" >Submit</button>
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