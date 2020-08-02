<?php require("session.php");?>
<?php
	require('tableConst.php');
	require(USM);
	$error=false;
	if(isset($_GET['IN'])||isset($_GET['Ac'])||isset($_GET['num'])){
		if(isset($_GET['num'])){
			$i=0;
			$total ="";
			for($i=0;$i<count($_GET['num']);$i++){
				$total .= $_GET['num'][$i].",";
			}
			$total =substr($total, 0, -1);
			if(isset($_GET['Ac'])){
				$status = 1;
			}
			else{
				$status = 0;
			}
			$result =InactiveUser($status,$total);
			header('Location: '.US);
			return;
		}else{
			$error = "Please Select Any Row";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard - User Master</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="student.js"></script>
	<?php require(ADMIN); ?>

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
		#snackbar {
			visibility: hidden;
		  min-width: 250px;
		  margin-left: -125px;
		  <?php
			$msg = $_GET['message'];
		 if((strpos($msg,'Deleted')>1)||(strpos($msg,'supprimées')>1)){
			  echo "background-color: #ff0000;";
		  }
		  else if((strpos($msg,'Updated')>1)||(strpos($msg,'jour')>1)){
			  echo "background-color: #E0D324;";
		  }
		  else{
			  echo " background-color: #4BB543;";
		  }?>
		 
		  color: #fff;
		  text-align: center;
		  border-radius: 2px;
		  padding: 16px;
		  position: fixed;
		  z-index: 1;
		  left: 50%;
		  bottom: 30px;
		  font-size: 17px;
		}

		#snackbar.show {
		  visibility: visible;
		  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
		  animation: fadein 0.5s, fadeout 0.5s 2.5s;
		}

		@-webkit-keyframes fadein {
		  from {bottom: 0; opacity: 0;} 
		  to {bottom: 30px; opacity: 1;}
		}

		@keyframes fadein {
		  from {bottom: 0; opacity: 0;}
		  to {bottom: 30px; opacity: 1;}
		}

		@-webkit-keyframes fadeout {
		  from {bottom: 30px; opacity: 1;} 
		  to {bottom: 0; opacity: 0;}
		}

		@keyframes fadeout {
		  from {bottom: 30px; opacity: 1;}
		  to {bottom: 0; opacity: 0;}
		}
		.loader {
		  border: 16px solid #f3f3f3; /* Light grey */
		  border-top: 16px solid #3498db; /* Blue */
		  border-radius: 50%;
		  width: 120px;
		  height: 120px;
		  animation: spin 2s linear infinite;
		  display: none;
		  top: 50%;
		  left: 50%;
		  position:absolute;
		}

		@keyframes spin {
		  0% { transform: rotate(0deg); }
		  100% { transform: rotate(360deg); }
		}
	</style>

</head>
<body>
<div id="loader" class="loader"></div>
	<?php require(NAVBAR) ?>
<?php 
	if(isset($_GET['message'])){
		
?>
<script> myFunction()</script>
<div id="snackbar"><?php echo $_GET['message']?></div>
	<?php } ?>
	
<div class="container-fluid text-center">    
  <div class="row content">
    <?php  require(SIDEMENU) ?>
	
    <div class="col-sm-8 text-left"> 
      <h3><?php echo $user['head']?></h3>
	  <hr>
	  <div>
		<?php if($error!==false){
			echo "<p style='color:red'>".$error."</p>";
		}
		?>
	  </div>
	  <div style="float: left;"><script>function goBack() { window.history.back();}</script><button onclick="goBack()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button></div>
	  <?php if(!isset($_GET['action'])){ ?>
	  <form>
			<div style="float: left;margin-left:25px">
			  <button type="submit" class="btn btn-primary" name="Ac"><?php echo $common['Active']?></button>
				<button type="submit" class="btn btn-primary" name ="IN"><?php echo $common['Inavtive']?></button></a>	
			</div>
			 <?php } ?>
	  <div style="float: right;">
	  		<button type="button" class="btn btn-primary" onClick='location.href="user.php"'><?php echo $common['View']?></button>
			<button type="button" class="btn btn-success" onClick='location.href="add.php?type=user"'><?php echo $common['Add']?></button>
	  </div>


		<?php
					
					$where = "";
					if(isset($_GET['id'])) {
						$where = " id = ".$_GET['id']." and ";
					}
					
					$where .= " is_deleted = 0";
					
					$result = getUserByCondition($where);
					$user_index = 0;
					
					if($result->rowCount() === 1) {
						$row = $result->fetch();
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
								<label for="name"><?php echo $common['user']?></label>
								<input type="text" class="form-control" id="name" placeholder="Username" value="<?php echo $row['username']?>" name="name">
							  </div>
							  <div class="form-group">
								<label for="surname"><?php echo $common['pass']?></label>
								<input type="password" class="form-control" id="surname" placeholder="password" value="<?php echo $row['password']?>"  name="password">
							  </div>
							  <div class="form-group">
								<label for="dob">Type</label>
								<input type="text" class="form-control" id="date" placeholder="Date of Birth" value="<?php echo $row['type']?>"  name="type">
							  </div>
							 
							  <button type="submit" class="btn btn-primary" >Submit</button>
							</form>
						</div>
							
							<?php
						}
					} else if($result->rowCount() > 0) {
					
						echo '<table id="tbc" class="table table-hover table-dark">
							  <thead>
								<tr>
								<th scope="col"><input id="checkAll" class="form-check-input" type="checkbox" name="check">&nbsp;&nbsp;&nbsp;'.$table['Check'].'</th>
								  <th scope="col">#</th>
								  <th scope="col">'.$common['user'].'</th>';
								  if (!$detect->isMobile() ) {
								  echo'<th scope="col">'.$common['pass'].'</th>
									<th scope="col">Type</th>
									<th scope="col">'.$common['created'].'</th>';
								  }
								  echo'<th scope="col">'.$table['Status'].'</th>
								  <th scope="col">'.$table['Action'].'</th>
								</tr>
							  </thead><tbody>';
					
						while($row = $result->fetch()){
								$password = hash('md5',$row["password"]);
								echo '<tr>';
								if($row['id']==1){
									$disable = 'disabled';
								}
								else{
									$disable ="";
								}
								 echo '<td>  <input class="check" type="checkbox" id="inlineCheckbox1" name="num[]"'.$disable.' value="'.$row['id'].'"></td>';
								 echo "</form>";
								  echo '<th scope="row">'.++$user_index.'</th>';
								  echo '<td>'.$row["username"].'</td>';
								   if (!$detect->isMobile() ) {
									  echo '<td>'.$password.'</td>';
									  echo '<td>'.$row["type"].'</td>';
									  echo '<td>'.$row["date_created"].'</td>';
								   }
								  echo '<td id="status'.$row["id"].'">'.($row["is_active"]=="1"?'<i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px"></i>':'<i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px; color:red"></i>').'</td>';
								  	echo '<td>';
										echo '<div class="btn-group">';
											echo '<a class="btn btn-primary" href="'.US.'?id='.$row["id"].'&action=view">'.$userss.$common['User'].'</a>';
											echo '<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">';
												echo '<span class="fa fa-caret-down" title="Toggle dropdown menu"></span>';
											echo '</a>';
											echo '<ul class="dropdown-menu">';
												echo '<li><a href="'.US.'?id='.$row["id"].'&action=edit"><i class="fa fa-pencil fa-fw"></i> '.$common['Edit'].'</a></li>';
												$action = "active";
												$text = "Active";
												if($row["is_active"] == 1){
													$action = "inactive";
													$text = 'Inavtive';
												}
												if($row['id']!=1){
													$id = $row['id'];		
													echo '<li id="status1'.$row["id"].'"><a  onclick="inactiveUser('.$id.',\''.$action.'\')"><i class="fa fa-trash-o fa-fw"></i> '.$text.'</a></li>';
												}
												if($row['id']!=1){
													echo '<li><a href="'.USPR.'?id='.$row["id"].'&action=delete"><i class="fa fa-trash-o fa-fw"></i> '.$common['Delete'].'</a></li>';
												}
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
    
	<?php require(RIGHTMENU); ?>
	
  </div>
</div>

<?php require(FOOTER); ?>



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
  setTimeout(function(){ location.href="user.php" }, 2000);
}
myFunction()
</script>
</html>