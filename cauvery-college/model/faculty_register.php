<?php
	@session_start();
	include '../config.php';
	
	//Insert Part
	if(isset($_POST['faculty_register']))
	{
		$faculty_name=$_POST['faculty_name'];
		$dob=$_POST['dob'];
		$department=$_POST['department'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$password=base64_encode(trim($_POST['password']));
		$sql = "INSERT INTO `faculty`( `faculty_name`,`dob`,`department`,`email`,`mobile`,`password`) 
		VALUES ('".$faculty_name."','".$dob."','".$department."','".$email."','".$mobile."','".$password."')";
		$query=mysqli_query($conn,$sql);
		
		    if($query==TRUE)
			{	
				$_SESSION['success']="Faculty Registered Successfully";
				echo '<script type="text/javascript">window.location.href="../faculty_login.php";</script>"';
			}
			else
			{
		        $_SESSION['error']="Faculty Inserted not Successfully";
				echo '<script type="text/javascript">window.location.href="../faculty_register.php";</script>';
				
			}
	
	}
	?>