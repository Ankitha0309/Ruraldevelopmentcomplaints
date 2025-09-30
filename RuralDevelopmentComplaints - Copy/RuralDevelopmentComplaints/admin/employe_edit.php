<?php
require_once  "../essential/database.php";
require_once "../essential/session.php";


$id=isset($_POST['id'])?$_POST['id']:0;
$id=is_numeric(trim($id))?trim($id):0;
$sql = "select * from gen_std_users where slno=$id";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);
echo json_encode($row);
?>
