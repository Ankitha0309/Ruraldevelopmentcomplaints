<?php
require_once  "../essential/database.php";
require_once "../essential/session.php";


$sql = "SELECT `GetsumofFundsReleased`() AS `sum`";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);
echo json_encode($row);
?>