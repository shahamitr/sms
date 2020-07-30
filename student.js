function inactiveStudent(id) {
  if (id == "") {
    //alert("Please pass proper id");
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('status'+id).innerHTML = "inactive";
		//alert("Status successfully updated");
      }
    };
    xmlhttp.open("GET", "process_student.php?id=" + id, true);
    xmlhttp.send();
  }
}