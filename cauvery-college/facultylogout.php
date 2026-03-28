<?php
	session_start();
	unset($_SESSION["faculty_id"]);
	unset($_SESSION["faculty_username"]);
	header('location:faculty_login.php');
?>