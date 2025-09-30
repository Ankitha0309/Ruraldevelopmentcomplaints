
<?php
require_once  "../essential/database.php";
require_once "../essential/session.php";

?>


<?php

$status=$_POST["action_status"];

	$complaint_id=$_POST["id"];
	
	
    $query  = "update gen_std_complaints set complaints_status='$status' where complaint_id='$complaint_id'";
	echo $query;
    $result = mysqli_query($con, $query);

?>