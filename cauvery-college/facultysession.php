<?php
@session_start();
if(isset($_SESSION['faculty_id']))
{
    
}
 else 
{
echo '<script type="text/javascript">window.location.href="index.php";</script>"';
}
?>
