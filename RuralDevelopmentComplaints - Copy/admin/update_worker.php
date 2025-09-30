
<?php
require_once  "../essential/database.php";
require_once "../essential/session.php";

?>


<?php


	$name=$_POST["name"];
	$id=$_POST["id"];
	
	
    $query  = "update fund_release set assigned_worker='$name' where complaint_id='$id'";
    $result = mysqli_query($con, $query);
	 echo json_encode($result);

?>