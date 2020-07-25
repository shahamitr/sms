<?php require("connect.php");
	if(isset($_POST['add'])){
		$name= $_POST['name'];
		$password = $_POST['password'];
		$type = $_POST['type'];
		echo $sql= "INSERT INTO user_master (username,password,type,is_active,date_created) VALUES ($name,$password,$type,1,NOW())";
		$result = $conn->query($sql);
		print_r($result);
		exit;
	}
?>
<?php require("session.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard - User Master</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php require("admin_header.php"); ?>

	
</head>
<body>
	<?php require("navbar.php") ?>

	
<div class="container-fluid text-center">    
  <div class="row content">
    <?php  require("sidemenu.php") ?>
	
    <div class="col-sm-8 text-left"> 
      <h3>User Master</h3>
	  <hr>

		<?php 




if($_GET){
	if($_GET['type']=="user"){ ?>
		<div class="col-md-5">						
							<form method="post">
								<div class="form-group">
								<label for="name">Username</label>
								<input type="text" class="form-control" id="name" placeholder="Username" name="name">
							  </div>
							  <div class="form-group">
								<label for="surname">Surname</label>
								<input type="password" class="form-control" id="surname" placeholder="password"   name="password">
							  </div>
							  <div class="form-group">
								<label for="dob">Type</label>
								<input type="text" class="form-control" id="date" placeholder="Type"   name="type">
							  </div>
							 
							  <button type="submit" name="add" class="btn btn-primary">Submit</button>
							</form>
						</div>
<?php	}
}
 else {
	header('Location: index.php');
 }
?>
    
	<?php //require('rightmenu.php'); ?>
	
  </div>
</div>

<?php require("footer.php"); ?>



</body>
</html>