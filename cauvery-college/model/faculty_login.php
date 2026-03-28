<?php
	ini_set("memory_limit","256M"); 
	//this sets it unlimited
	ini_set("max_execution_time",0);
	include('../config.php');
	session_start();
	if (isset($_POST['faculty_login'])) 
	{
    
		$login['username'] = $_POST['email'];
		$login['password'] = base64_encode($_POST['password']); 

		// Check if the email exists in the database
		$user_check_sql = "SELECT `faculty_id`, `faculty_name`, `password` FROM `faculty` WHERE `email` = '".$login['username']."'";
		$user_check_qr = mysqli_query($conn, $user_check_sql);
		$user_check_res = mysqli_num_rows($user_check_qr);

		if ($user_check_res == 1) {
			$user_data = mysqli_fetch_array($user_check_qr);

			// Check if password matches
			if ($user_data['password'] === $login['password']) {
				$_SESSION['faculty_id'] = $user_data['faculty_id'];
				$_SESSION['faculty_username'] = $user_data['faculty_name'];
				header('location:../facultydashboard.php');
				exit();
			} else {
				$_SESSION['error'] = "Incorrect password";
			}
		} else {
			$_SESSION['error'] = "Email not found";
		}
		
		echo '<script type="text/javascript">window.location.href="../faculty_login.php";</script>';
	}

?>