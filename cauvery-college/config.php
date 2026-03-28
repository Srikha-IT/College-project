<?php

   $db_host ="localhost";
   $db_name ="cauvery_college"; 
   $db_user ="root";
   $db_pass ="";
    
   //server config
	
   $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Connection failed: " . mysqli_connect_error());

?>