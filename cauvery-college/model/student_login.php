<?php
	ini_set("memory_limit","256M"); 
	//this sets it unlimited
	ini_set("max_execution_time",0);
	include('../config.php');
	session_start();
	
	if (isset($_POST['student_login'])) 
	{
		$login['username'] = $_POST['regno'];
		$login['password'] = $_POST['password'];

		// Check if username exists
		$user_check_sql = "SELECT `student_id`, `first_name`, `password` FROM `student` WHERE `regno` = '".$login['username']."'";
		$user_check_qr = mysqli_query($conn, $user_check_sql);
		$user_check_res = mysqli_num_rows($user_check_qr);

		if ($user_check_res == 1) {
			$user_data = mysqli_fetch_array($user_check_qr);

			// Check if password matches
			if ($user_data['password'] === $login['password']) {
				$_SESSION['student_id'] = $user_data['student_id'];
				$_SESSION['student_username'] = $user_data['first_name'];
				header('location:../student_update.php');
				exit();
			} else {
				$_SESSION['error'] = "Incorrect password";
			}
		} else {
			$_SESSION['error'] = "Username not found";
		}

		echo '<script type="text/javascript">window.location.href="../student_login.php";</script>';
	}

?>