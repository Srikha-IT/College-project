<?php
	session_start();
	unset($_SESSION["student_id"]);
	unset($_SESSION["student_username"]);
	header('location:student_login.php');
?>