<?php require("session.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard - User Master</title>
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
      <h3>User Master</h3>
	  <hr>
	  <div style="float: left;"><script>function goBack() { window.history.back();}</script><button onclick="goBack()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button></div>
	  <div style="float: right;">
	  		<button type="button" class="btn btn-primary" onClick='location.href="user.php"'>View All</button>
			<button type="button" class="btn btn-success" onClick='location.href="add.php?type=user"'>Add New</button>
	  </div>


		<?php
					require("connect.php");
					
					$where = "";
					if(isset($_GET['id'])) {
						$where = " id = ".$_GET['id']." and ";
					}
					
					$where .= " is_deleted = 0";
					
					$sql = "select * from user_master where $where";
					$result = $conn->query($sql);
					$user_index = 0;
					
					if($result->num_rows === 1) {
						$row = mysqli_fetch_assoc($result);
						if(isset($_GET['action']) && $_GET['action']=="view"){
							echo '<div class="card">
							  <img src="images/img_avatar.png" alt="Avatar" style="width:100%">
							  <div class="card_container">
								<h4><b>'.$row["username"].'</b></h4>
								<p>Architect & Engineer</p>
							  </div>
							</div>';
						} else if(isset($_GET['action']) && $_GET['action']=="edit"){
							?>
						
						<div class="col-md-5">						
							<form action="process_user.php" method="post">
								<input type="hidden" name="action" value="<?php echo $_GET['action'];?>"/>
								<input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>
								<div class="form-group">
								<label for="name">Username</label>
								<input type="text" class="form-control" id="name" placeholder="Username" value="<?php echo $row['username']?>" name="name">
							  </div>
							  <div class="form-group">
								<label for="surname">Password</label>
								<input type="password" class="form-control" id="surname" placeholder="password" value="<?php echo $row['password']?>"  name="password">
							  </div>
							  <div class="form-group">
								<label for="dob">Type</label>
								<input type="text" class="form-control" id="date" placeholder="Date of Birth" value="<?php echo $row['type']?>"  name="type">
							  </div>
							 
							  <button type="submit" class="btn btn-primary" onclick="return Toast.show('User has been modified successfully.', 'success');">Submit</button>
							</form>
						</div>
							
							<?php
						}
					} else if($result->num_rows > 0) {
					
						echo '<table class="table">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Username</th>
								  <th scope="col">Password</th>
								  <th scope="col">Type</th>
								  <th scope="col">Created</th>
								  <th scope="col">Status</th>
								   
								  <th scope="col">Action</th>
								</tr>
							  </thead><tbody>';
					
						while($row = mysqli_fetch_assoc($result)){
								$password = hash('md5',$row["password"]);
								echo '<tr>';
								  echo '<th scope="row">'.++$user_index.'</th>';
								  echo '<td>'.$row["username"].'</td>';
								  echo '<td>'.$password.'</td>';
								  echo '<td>'.$row["type"].'</td>';
								  echo '<td>'.$row["date_created"].'</td>';
								  echo '<td>'.($row["is_active"]=="1"?'<i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px"></i>':'<i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px; color:red"></i>').'</td>';
								  	echo '<td>';
										echo '<div class="btn-group">';
											echo '<a class="btn btn-primary" href="user.php?id='.$row["id"].'&action=view"><i class="fa fa-user fa-fw"></i> User</a>';
											echo '<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">';
												echo '<span class="fa fa-caret-down" title="Toggle dropdown menu"></span>';
											echo '</a>';
											echo '<ul class="dropdown-menu">';
												echo '<li><a href="user.php?id='.$row["id"].'&action=edit"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>';
												echo '<li><a href="process_user.php?id='.$row["id"].'&action=delete"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>';
											echo '</ul>';
										echo '</div>';	
										// echo '<a href="user.php?id='.$row["id"].'&action=view">
										// 	<i class="fa fa-info-circle" aria-hidden="true"></i>
										// </a>';
										// echo '<a href="user.php?id='.$row["id"].'&action=edit">
										// 	<i class="fa fa-pencil" aria-hidden="true"></i>
										// </a>';
										// echo '<a href="process_user.php?id='.$row["id"].'&action=delete">
										// 	<i class="fa fa-trash" aria-hidden="true"></i>
										// </a>';
								 	echo '</td>';
								echo '</tr>';
								
						}
						
						
							  echo '</tbody>
							</table>';
					
					} else {
						echo "No students found in the system";						
					}
				
				?>

    </div>
    
	<?php require('rightmenu.php'); ?>
	
  </div>
</div>

<?php require("footer.php"); ?>



</body>
</html>