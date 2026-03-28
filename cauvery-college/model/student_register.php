<?php
	@session_start();
	include '../config.php';
	
	//Insert Part
	if(isset($_POST['student_register']))
	{
		$regno=$_POST['regno'];
		$password=$_POST['password'];
		$sql = "INSERT INTO `student`( `regno`,`password`) 
		VALUES ('".$regno."','".$password."')";
		$query=mysqli_query($conn,$sql);
		
		    if($query==TRUE)
			{	
				$_SESSION['success']="Student Registered Successfully";
				echo '<script type="text/javascript">window.location.href="../student_register.php";</script>"';
			}
			else
			{
		        $_SESSION['error']="Student Inserted not Successfully";
				echo '<script type="text/javascript">window.location.href="../student_register.php";</script>';
				
			}
	
	}
	?>