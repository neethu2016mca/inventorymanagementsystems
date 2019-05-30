
<?php
include 'dbconnection.php';
 session_start();
if(session_destroy())
{
	header("Location:index.php");
}
?>
