<?php
require_once  "../essential/database.php";
require_once "../essential/session.php";



    $action = trim($_POST["save"]);

    if ($action == 'Save' && $action != '')
    {
     
        $id = trim($_POST["id"]);
		$fund = trim($_POST["fund"]);

        $query = "SELECT * FROM fund_release where complaint_id='$id'";

        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);

        if (mysqli_num_rows($result))
        {
            $out['status'] = "failure";
            $out['message'] = "Data Already Exists!";
        }
        else
        {
            $uid = $_SESSION['id'];
            mysqli_query($con, 'begin;');
            try
            {
                $string = "insert into fund_release(complaint_id,funds)VALUES('$id','$fund')";
                $result = mysqli_query($con, $string);

                if ($result)
                {
                    $out['status'] = "success";
                    $out['message'] = "Fund Added Successsfully..";
                    
                }
                else
                {
					 $out['status'] = "Failure";
                    $out['message'] = "Failed To Add Fund";
                   
                }
                mysqli_query($con, 'commit;');
            }
            catch(Exception $e)
            {
                mysqli_query($con, 'rollback;');

            }
        }
    }
    

echo json_encode($out);

?>