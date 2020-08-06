function inactiveStudent(id, action) {
  if (id == "") {
    //alert("Please pass proper id");
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
		if(action === 'active') {
			document.getElementById('status'+id).innerHTML = '<i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px;"></i>';
			document.getElementById('inner_status'+id).innerHTML = '<a onclick="inactiveStudent('+id+',\'inactive\')"><i class="fa fa-trash-o fa-fw"></i> Inactive</a>';
		} else {
			document.getElementById('status'+id).innerHTML = '<i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px; color:red"></i>';
			document.getElementById('inner_status'+id).innerHTML = '<a onclick="inactiveStudent('+id+',\'active\')"><i class="fa fa-trash-o fa-fw"></i> Active</a>';
		}
		document.getElementById('loader').style.display = 'none';  
		//alert("Status successfully updated");
      } else {
		document.getElementById('loader').style.display = 'block';  
	  }
    };
    xmlhttp.open("GET", "process_student.php?id=" + id + "&action="+action, true);
    xmlhttp.send();
  }
}
function inactiveFaculty(id, action) {
  if (id == "") {
    //alert("Please pass proper id");
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
		if(action === 'active') {
			document.getElementById('status'+id).innerHTML = '<i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px; "></i>';
			document.getElementById('inner_status'+id).innerHTML = '<a onclick="inactiveFaculty('+id+',\'inactive\')"><i class="fa fa-trash-o fa-fw"></i> Inactive</a>';
		} else {
			document.getElementById('status'+id).innerHTML = '<i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px; color:red"></i>';
			document.getElementById('inner_status'+id).innerHTML = '<a onclick="inactiveFaculty('+id+',\'active\')"><i class="fa fa-trash-o fa-fw"></i> Active</a>';
		}
		document.getElementById('loader').style.display = 'none';  
		//alert("Status successfully updated");
      } else {
		document.getElementById('loader').style.display = 'block';  
	  }
    };
    xmlhttp.open("GET", "process_faculty.php?id=" + id + "&action="+action, true);
    xmlhttp.send();
  }
}
function inactiveUser(id, action) {
  if (id == "") {
    //alert("Please pass proper id");
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
		if(action === 'active') {
			document.getElementById('status'+id).innerHTML = '<i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px; "></i>';
			document.getElementById('inner_status'+id).innerHTML = '<a onclick="inactiveUser('+id+',\'inactive\')"><i class="fa fa-trash-o fa-fw"></i> Inactive</a>';
		} else {
			document.getElementById('status'+id).innerHTML = '<i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px; color:red"></i>';
			document.getElementById('inner_status'+id).innerHTML = '<a onclick="inactiveUser('+id+',\'active\')"><i class="fa fa-trash-o fa-fw"></i> Active</a>';
		}
		document.getElementById('loader').style.display = 'none';  
		//alert("Status successfully updated");
      } else {
		document.getElementById('loader').style.display = 'block';  
	  }
    };
    xmlhttp.open("GET", "process_user.php?id=" + id + "&action="+action, true);
    xmlhttp.send();
  }
}
function AllFacultyStatus(id,action){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
		  for(var i =0;i<id.length;i++){
				if(action === 'active') {
					document.getElementById('status'+id[i]).innerHTML = '<i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px; "></i>';
					document.getElementById('inner_status'+id[i]).innerHTML = '<a onclick="inactiveFaculty('+id[i]+',\'inactive\')"><i class="fa fa-trash-o fa-fw"></i> Inactive</a>';
				} else {
					document.getElementById('status'+id[i]).innerHTML = '<i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px; color:red"></i>';
					document.getElementById('inner_status'+id[i]).innerHTML = '<a onclick="inactiveFaculty('+id[i]+',\'active\')"><i class="fa fa-trash-o fa-fw"></i> Active</a>';
				}
		  }
		document.getElementById('loader').style.display = 'none';  
		//alert("Status successfully updated");
      } else {
		document.getElementById('loader').style.display = 'block';  
	  }
    };
    xmlhttp.open("GET", "process_faculty.php?id=" + id + "&action="+action, true);
    xmlhttp.send();
}
function DeleteFaculty(id){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
		  document.getElementById('table_row'+id).style.display = 'none';
		document.getElementById('loader').style.display = 'none';  
		//alert("Status successfully updated");
      } else {
		document.getElementById('loader').style.display = 'block';  
	  }
    };
    xmlhttp.open("GET", "process_faculty.php?id=" + id + "&action=delete", true);
	//xmlhttp.open("GET","faculty.php?message=Faculty Data Deleted",true);
    xmlhttp.send();
}
function AllUserStatus(id,action){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
		  for(var j =0;j<id.length;j++){
			  console.log(document.getElementById('inner_status'+id[j]));
				if(action === 'active') {
					document.getElementById('status'+id[j]).innerHTML = '<i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px; "></i>';
			document.getElementById('inner_status'+id[j]).innerHTML = '<a onclick="inactiveUser('+id[j]+',\'inactive\')"><i class="fa fa-trash-o fa-fw"></i> Inactive</a>';
					//console.log(document.getElementById('inner_status'+id[i]).innerHTML);
				} else {
					document.getElementById('status'+id[j]).innerHTML = '<i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px; color:red"></i>';
					document.getElementById('inner_status'+id[j]).innerHTML = '<a onclick="inactiveUser('+id[j]+',\'active\')"><i class="fa fa-trash-o fa-fw"></i> Active</a>';
				}
		  }
		document.getElementById('loader').style.display = 'none';  
		//alert("Status successfully updated");
      } else {
		document.getElementById('loader').style.display = 'block';  
	  }
    };
    xmlhttp.open("GET", "process_user.php?id=" + id + "&action="+action, true);
    xmlhttp.send();
}
function DeleteUser(id){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
		  document.getElementById('table_row'+id).style.display = 'none';
		document.getElementById('loader').style.display = 'none';  
		//alert("Status successfully updated");
      } else {
		document.getElementById('loader').style.display = 'block';  
	  }
    };
    xmlhttp.open("GET", "process_user.php?id=" + id + "&action=delete", true);
    xmlhttp.send();
}
function updateStatusAll(id, action) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
		if(action === 'active') {
			console.log(id)
			for(var i=0;i<id.length;i++){
				document.getElementById('status'+id[i]).innerHTML = '<i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px;"></i>';
				document.getElementById('inner_status'+id[i]).innerHTML = '<a onclick="inactiveStudent('+id[i]+',\'inactive\')"><i class="fa fa-trash-o fa-fw"></i> Inactive</a>';
			}
		} else {
				for(var i=0;i<id.length;i++){
				document.getElementById('status'+id[i]).innerHTML = '<i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px; color:red"></i>';
				document.getElementById('inner_status'+id[i]).innerHTML = '<a onclick="inactiveStudent('+id[i]+',\'active\')"><i class="fa fa-trash-o fa-fw"></i> Active</a>';
			}
		}
		document.getElementById('loader').style.display = 'none';  
		//alert("Status successfully updated");
      } else {
		document.getElementById('loader').style.display = 'block';  
	  }
    };
    xmlhttp.open("GET", "process_student.php?id=" + id + "&action="+action, true);
    xmlhttp.send();
}
function DeleteStudent(id){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
		  document.getElementById('table_row'+id).style.display = 'none';
		document.getElementById('loader').style.display = 'none';  
		//alert("Status successfully updated");
      } else {
		document.getElementById('loader').style.display = 'block';  
	  }
    };
    xmlhttp.open("GET", "process_student.php?id=" + id + "&action=delete", true);
    xmlhttp.send();
}