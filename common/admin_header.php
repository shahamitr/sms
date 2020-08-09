<?php
	if(isset($_SESSION['lang'])){
		if($_SESSION['lang']=='fr'){
			require(LANG);
		}
		else{
			require(ENG);	
		}
	}else{
			require(ENG);
		}
?>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/toast.css">

<!--===============================================================================================-->

<?php if(isset($_SESSION['mode'])) {
	if($_SESSION['mode']=='dk'){ ?>
		<style>
		#navbar1{
			color:white;
			background-color:#1D9E74;
		}
		#navbar1 li a,p{
				color:white;
		}
		#nav-head{
			color:white;
		}
		#navbar1 li a:hover{
			color:black;
		}
		#navbar1 li.active a:hover{
			color:white;
		}
		body{
			background-color:black;
			color:white;
		}
		hr{
			border-color:aqua;
		}
		#tbc tbody tr td,#tbc tbody tr th{
			border-bottom:1px solid aqua;
		}
		#tbc thead tr th{
			border-bottom:2px solid aqua;
		}
		#tbc>tbody>tr:hover{
			background-color:#222;
		}
		#pagin li a{
			background-color:#1D9E74;
			color:white;
			border-color:black;
		}
		#pagin li.active a{
			background-color:#2e6da4;
		}
		select{
			color:black;
		}
		</style>
<?php }
	}
?>
<?php require_once '../mobilw/mobiledetect/mobiledetectlib/Mobile_Detect.php';
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
 
 ?>

<style>
.btn{
	padding:6px 5px;
	font-size:11px;
}
body{
	font-size:11px;
}
input#se{
	width:71px;
	font-size:11px;
	margin-left:-42px;
}
 <?php
	if(isset($_SESSION['lang'])){
		if($_SESSION['lang']=='fr'){
			echo '.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
	padding:3px;
}';
		}
		else{
				echo '.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
	padding:4px;
}';
		}
	}else{
			echo '.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
	padding:4px;
}';
		}
?>

</style>
<?php } ?>