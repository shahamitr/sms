<?php require("session.php");?>
<?php
	require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Master</title>
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
	<?php require("navbar_profile.php") ?>
<div class="container-fluid text-center">    
  <div class="row content">
    <?php  require("sidemenu_profile.php") ?>
    <div class="col-sm-8 text-left"> 
      <h3>Student Info</h3>
	  
	  <hr><div style="float: left;"><script>function goBack() { window.history.back();}</script><button onclick="goBack()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button></div>
		<?php
					require("connect.php");
					
					$where = "";
					if(isset($_GET['id'])) {
						$where = " id = ".$_GET['id']." and ";
					}
					
					$where .= " is_deleted = 0";
					
					$sql = "select * from student_info where $where";
					$result = $conn->query($sql);
					$student_index = 0;
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
						} 
							?>
					
							
							<?php
						
					} else if($result->num_rows > 0) {
						
						echo '<table class="table table-hover record_table">
							  <thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Firstname</th>
								  <th scope="col">Lastname</th>
								  <th scope="col">Gender</th>
								  <th scope="col">DOB</th>
								  <th scope="col">City</th>
								  <th scope="col">Enroll Date</th>
								  <th scope="col">Status</th>
								  <th scope="col">Action</th>
								</tr>
							  </thead><tbody>';
					
						while($row = mysqli_fetch_assoc($result)){
							
								echo '<tr>';
								  echo '<th scope="row">'.++$student_index.'</th>';
								  echo '<td>'.$row["name"].'</td>';
								  echo '<td>'.$row["surname"].'</td>';
								  echo '<td>'.$row["gender"].'</td>';
								  echo '<td>'.$row["dob"].'</td>';
								  echo '<td>'.$row["city"].'</td>';
								  echo '<td>'.$row["created_date"].'</td>';
								  echo '<td>'.($row["current_status"]=="1"?'<i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px"></i>':'<i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px; color:red"></i>').'</td>';
								  echo '<td>';
								  	echo '<div class="btn-group">';
											echo '<a class="btn btn-primary" href="student_record.php?id='.$row["id"].'&action=view"><i class="fa fa-user fa-fw"></i> User</a>';	
										echo '</div>';
									// echo '<a href="student.php?id='.$row["id"].'&action=view">
									// 	<i class="fa fa-info-circle" aria-hidden="true"></i>
									// </a>';
									// echo '<a href="student.php?id='.$row["id"].'&action=edit">
									// 	<i class="fa fa-pencil" aria-hidden="true"></i>
									// </a>';
									// echo '<a href="process_student.php?id='.$row["id"].'&action=delete">
									// 	<i class="fa fa-trash" aria-hidden="true"></i>
									// </a>';
								  echo '</td>	';
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
<script>
$("#checkAll").click(function () {
    $(".check").prop('checked', $(this).prop('checked'));
});	
$(document).ready(function() {
    $('.record_table tr').click(function(event) {
        if (event.target.type !== 'checkbox') {
            $(':checkbox', this).trigger('click');
        }
    });
});
function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
  setTimeout(function(){ location.href="student.php" }, 2000);
}
myFunction()
</script>
</html>