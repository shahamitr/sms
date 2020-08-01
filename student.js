function inactiveStudent(id, action) {
  if (id == "") {
    //alert("Please pass proper id");
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
		if(action === 'active') {
 document.getElementById('status'+id).innerHTML = '<i class="fa fa-check-square-o" aria-hidden="true" style="font-size:20px; color:red"></i>';
		} else {
 document.getElementById('status'+id).innerHTML = '<i class="fa fa-minus-square-o" aria-hidden="true" style="font-size:20px; color:black"></i>';
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