<?php
	ini_set("memory_limit","256M"); 
	//this sets it unlimited
	ini_set("max_execution_time",0);
	include('../config.php');
	session_start();
	if(isset($_POST['admin_login']))
	{
		
		$login['username'] = trim($_POST['username']);
		$login['password'] = base64_encode(base64_encode($_POST['password'])); 
		
		$log_sql = "select `admin_id`,`username` from `admin` where `username`='".$login['username']."' and `password` = '".$login['password']."'";
		
        $log_qr = mysqli_query($conn,$log_sql);
        $log_res = mysqli_num_rows($log_qr);
        if($log_res == 1)
        {           
			$log_fet = mysqli_fetch_array($log_qr);
            $_SESSION['admin_id'] = $log_fet['admin_id'];
            $_SESSION['admin_username'] = $log_fet['username'];
			header('location:../admindashboard.php');
		}
		else
		{
			$_SESSION['logerror']="Username and Password is Wrong";
			echo '<script type="text/javascript">window.location.href="../admin.php";</script>"';
		}
		
	}	
?>