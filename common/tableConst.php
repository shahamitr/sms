<?php
	//Table constants
	if (!defined('STUDENT')) define('STUDENT', 'student_info');
	if (!defined('FACULTY')) define('FACULTY', 'faculty_info');
	if (!defined('USER')) define('USER', 'user_master');

	
	//File constants
	if (!defined('HEADING')) define('HEADING', '../common/header.php');
	if (!defined('FOOTER')) define('FOOTER', '../common/footer.php');
	if (!defined('NAVBAR')) define('NAVBAR', '../common/navbar.php');
	if (!defined('ADMIN')) define('ADMIN', '../common/admin_header.php');
	if (!defined('STUM')) define('STUM', '../Model/student_model.php');
	if (!defined('FACM')) define('FACM', '../Model/faculty_model.php');
	if (!defined('USM')) define('USM', '../Model/user_model.php');
	if (!defined('SIDEMENU')) define('SIDEMENU', '../common/sidemenu.php');
	if (!defined('CONNECT')) define('CONNECT', '../common/connect.php');
	if (!defined('RIGHTMENU')) define('RIGHTMENU', '../common/rightmenu.php');
	if (!defined('FACUL')) define('FACUL', '../View/faculty.php');
	if (!defined('STU')) define('STU', '../View/student.php');
	if (!defined('US')) define('US', '../View/user.php');
	if (!defined('FACULPR')) define('FACULPR', 'process_faculty.php');
	if (!defined('STUPR')) define('STUPR', 'process_student.php');
	if (!defined('USPR')) define('USPR', 'process_user.php');
	if (!defined('ADD')) define('ADD', 'add.php');
	if (!defined('DASH')) define('DASH', '../View/dashboard.php');
	if (!defined('INDEX')) define('INDEX', '../index.php');
	if (!defined('LOGIN')) define('LOGIN', 'Controller/login.php');
	if (!defined('CONT')) define('CONT', 'tableConst.php');
	if (!defined('SESS')) define('SESS', '../common/session.php');
	if (!defined('LANG')) define('LANG', '../common/lang.php');
	if (!defined('ENG')) define('ENG', '../common/eng.php');
?>