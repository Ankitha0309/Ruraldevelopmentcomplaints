<?php
require_once  "../essential/database.php";
require_once "../essential/session.php";

$id=isset($_POST['id'])?$_POST['id']:0;
$id=is_numeric(trim($id))?trim($id):0;



    $qry = "delete from gen_std_users where slno=$id";

    $result = mysqli_query($con, $qry);

    if ($result)
    {
        $out['status'] = "success";
        $out['message'] = "Employe Deleted Successsfully..";
      
    }
    else
    {
        $out['status'] = "failure";
        $out['message'] = "Error while deleting Employe";
       
    }


echo json_encode($out);
?>
