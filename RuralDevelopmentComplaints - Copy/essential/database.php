
<?php 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$dbname = "ruraldevelop_system"; 
$con=mysqli_connect($host,$user,$pass,$dbname, "3306");
 if(!$con)
	{
		die(mysql_error($con));
	}
 ?>

