<?php require("session.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard - Faculty Master</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php require("admin_header.php"); ?>

	<style>
	
		.card {
		  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		  transition: 0.3s;
		  width: 30%;
		}

		.card:hover {
		  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.card_container {
		  padding: 2px 16px;
		}
		
		
	</style>

</head>
<body>
	<?php require("navbar.php") ?>

	
<div class="container-fluid text-center">    
  <div class="row content">
    <?php  require("sidemenu.php") ?>
	
    <div class="col-sm-8 text-left"> 
      <h3>Faculty Master</h3>
	  <hr>

	  <div class="text-right">
		<button type="button" class="btn btn-primary" onClick='location.href="faculty.php"'>View All</button>
		<button type="button" class="btn btn-success" onClick='location.href="add.php?type=faculty"'>Add New</button>
	  </div>

		<?php
					require("connect.php");
					
					$where = "";
					if(isset($_GET['id'])) {
						$where = " id = ".$_GET['id']." and ";
					}
					
					$where .= " is_active = '1'";
					
					$sql = "select * from faculty_info where $where";
					$result = $conn->query($sql);
					$faculty_index = 0;
					if($result->num_rows === 1) {
						$row = mysqli_fetch_assoc($result);
						if(isset($_GET['action']) && $_GET['action']=="view"){
							echo '<div class="card">
							  <img src="images/img_avatar.png" alt="Avatar" style="width:100%">
							  <div class="card_container">
								<h4><b>'.$row["name"].' '.$row["surname"].'</b></h4>
								<p>Architect & Engineer</p>
							  </div>
							</div>';
						} else if(isset($_GET['action']) && $_GET['action']=="edit"){
							?>
						
						<div class="col-md-5">						
							<form action="process_faculty.php" method="post">
								<input type="hidden" name="action" value="<?php echo $_GET['action'];?>"/>
								<input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>
								<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" placeholder="Name" value="<?php echo $row['name']?>" name="name">
							  </div>
							  <div class="form-group">
								<label for="surname">Surname</label>
								<input type="text" class="form-control" id="surname" placeholder="Surname" value="<?php echo $row['surname']?>"  name="surname">
							  </div>
							  <div class="form-group">
								<label for="dob">Date</label>
								<input type="date" class="form-control" id="dob" placeholder="Date of Birth" value="<?php echo $row['dob']?>"  name="dob">
							  </div>
							 
							  <button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
							
							<?php
						}
					} else if($result->num_rows > 0) {
					
						echo '<table class="table">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Firstname</th>
								  <th scope="col">Lastname</th>
								  <th scope="col">Gender</th>
								  <th scope="col">DOB</th>
								  <th scope="col">City</th>
								  <th scope="col">Status</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead><tbody>';
					
						while($row = mysqli_fetch_assoc($result)){
							
								echo '<tr>';
								  echo '<th scope="row">'.++$faculty_index.'</th>';
								  echo '<td>'.$row["name"].'</td>';
								  echo '<td>'.$row["surname"].'</td>';
								  echo '<td>'.$row["gender"].'</td>';
								  echo '<td>'.$row["dob"].'</td>';
								  echo '<td>'.$row["city"].'</td>';
								  echo '<td>'.($row["is_active"]=="1"?'<i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px"></i>':'<i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px; color:red"></i>').'</td>';
								  echo '<td>';
								  	echo '<div class="btn-group">';
											echo '<a class="btn btn-primary" href="faculty.php?id='.$row["id"].'&action=view"><i class="fa fa-user fa-fw"></i> User</a>';
											echo '<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">';
												echo '<span class="fa fa-caret-down" title="Toggle dropdown menu"></span>';
											echo '</a>';
											echo '<ul class="dropdown-menu">';
												echo '<li><a href="faculty.php?id='.$row["id"].'&action=edit"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>';
												echo '<li><a href="process_faculty.php?id='.$row["id"].'&action=delete"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>';
											echo '</ul>';
										echo '</div>';
									// echo '<a href="faculty.php?id='.$row["id"].'&action=view">
									// 	<i class="fa fa-info-circle" aria-hidden="true"></i>
									// </a>';
									// echo '<a href="faculty.php?id='.$row["id"].'&action=edit">
									// 	<i class="fa fa-pencil" aria-hidden="true"></i>
									// </a>';
									// echo '<a href="process_faculty.php?id='.$row["id"].'&action=delete">
									// 	<i class="fa fa-trash" aria-hidden="true"></i>
									// </a>';
								  echo '</td>	';
								echo '</tr>';
								
						}
						
						
							  echo '</tbody>
							</table>';
					
					} else {
						echo "No faculty found in the system";						
					}
				
				?>

    </div>
    
	<?php require('rightmenu.php'); ?>
	
  </div>
</div>

<?php require("footer.php"); ?>



</body>
</html>