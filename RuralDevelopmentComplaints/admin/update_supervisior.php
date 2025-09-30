
<?php
require_once  "../essential/database.php";
require_once "../essential/session.php";

?>


<?php


	$name=$_POST["name"];
	$id=$_POST["id"];
	
	
    $query  = "update gen_std_complaints set assigned_supervisior='$name' where complaint_id='$id'";
    $result = mysqli_query($con, $query);
    echo json_encode($result);
?>