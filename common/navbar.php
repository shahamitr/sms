<?php
	require('tableConst.php');
?>
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
<nav id="navbar1" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" id="nav-head" href="#">SMS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	  <?php
		$home_class = $student_class = $faculty_class = $contact_class = $user_class= "";
		$basename = basename($_SERVER['SCRIPT_NAME']);
		if($basename == "dashboard.php"){
			$home_class = 'class="active"';
		}else if($basename == 'student.php' || basename($_SERVER['REQUEST_URI']) == ADD."?type=student"){
			$student_class = 'class="active"';
		}else if($basename == 'faculty.php' || basename($_SERVER['REQUEST_URI']) == ADD."?type=faculty"){
			$faculty_class = 'class="active"';
		}else if($basename == "contact.php"  ){
			$contact_class = 'class="active"';
		}else if($basename == 'user.php' || basename($_SERVER['REQUEST_URI']) == ADD."?type=user"){
				$user_class = 'class="active"';
		}
	  ?>	
      <ul id="navv"  class="nav navbar-nav">
        <li <?php echo $home_class; ?> ><a href="../View/dashboard.php"><?php echo $nav['home']?></a></li>
		
        <li <?php echo $student_class; ?>><a href="../View/student.php"><?php echo $nav['Students']?></a></li>
        <li <?php echo $faculty_class; ?>><a href="../View/faculty.php"><?php echo $nav['Faculty']?></a></li>
		<li <?php echo $user_class; ?>><a href="../View/user.php"><?php echo $nav['User']?></a></li>
        <li <?php echo $contact_class; ?>><a href="#">Contact</a></li>
      </ul>
      <ul  class="nav navbar-nav navbar-right">
        <li><a href="../common/logout.php">
			<?php 
			if(isset($_SESSION['username'])){
				echo $nav['Welcome']." , ".$_SESSION['username']; 
			}
			?>
			<span class="glyphicon glyphicon-log-in"></span> <?php echo $nav['Logout']?></a>
		</li>
      </ul>
    </div>
  </div>
</nav>