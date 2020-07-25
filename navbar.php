<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">SMS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	  <?php
		$home_class = $student_class = $faculty_class = $contact_class = "";
		$basename = basename($_SERVER['SCRIPT_NAME']);
		if($basename == "dashboard.php"){
			$home_class = 'class="active"';
		}else if($basename == "student.php"){
			$student_class = 'class="active"';
		}else if($basename == "faculty.php"){
			$faculty_class = 'class="active"';
		}else if($basename == "contact.php"){
			$contact_class = 'class="active"';
		}
	  ?>	
      <ul class="nav navbar-nav">
        <li <?php echo $home_class; ?> ><a href="dashboard.php">Home</a></li>
        <li <?php echo $student_class; ?>><a href="student.php">Students</a></li>
        <li <?php echo $faculty_class; ?>><a href="faculty.php">Faculty</a></li>
        <li <?php echo $contact_class; ?>><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">
			<?php 
			if(isset($_SESSION['username'])){
				echo "Welcome, ".$_SESSION['username']; 
			}
			?>
			<span class="glyphicon glyphicon-log-in"></span> Logout</a>
		</li>
      </ul>
    </div>
  </div>
</nav>
