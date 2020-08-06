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
	console.log("process_student.php?id=" + id + "&action="+action);
    xmlhttp.open("GET", "process_student.php?id=" + id + "&action="+action, true);
    xmlhttp.send();
}
