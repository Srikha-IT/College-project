<?php
	@session_start();
	include '../config.php';
	
	//Insert Part
	if(isset($_POST['class_add']))
	{
		$class=$_POST['class'];
		$faculty_id=$_POST['faculty_id'];
		$strength=$_POST['strength'];
		$sql = "INSERT INTO `class`( `class`,`faculty_id`,`strength`) 
		VALUES ('".$class."','".$faculty_id."','".$strength."')";
		$query=mysqli_query($conn,$sql);
		
		    if($query==TRUE)
			{	
				$_SESSION['success']="Class Added Successfully";
				echo '<script type="text/javascript">window.location.href="../class_view.php";</script>"';
			}
			else
			{
		        $_SESSION['error']="Class Added not Successfully";
				echo '<script type="text/javascript">window.location.href="../class_add.php";</script>';
				
			}
	
	}
	?>