<?php
require_once  "../essential/database.php";
require_once "../essential/session.php";



    $action = trim($_POST["save"]);

    if ($action == 'Save' && $action != '')
    {
     
        $village = trim($_POST["village"]);
		$ward_no = trim($_POST["ward_no"]);

        $query = "SELECT * FROM gen_std_village where village='$village' and ward_no='$ward_no'";

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
                $string = "insert into gen_std_village(village,ward_no)VALUES('$village','$ward_no')";
			
                $result = mysqli_query($con, $string);

                if ($result)
                {
                    $out['status'] = "success";
                    $out['message'] = "Village Added Successsfully..";
                    
                }
                else
                {
					 $out['status'] = "Failure";
                    $out['message'] = "Failed To Add Village";
                   
                }
                mysqli_query($con, 'commit;');
            }
            catch(Exception $e)
            {
                mysqli_query($con, 'rollback;');

            }
        }
    }
    else if ($action == 'Update' && $action != '')
    {
		
     
       $village = trim($_POST["village"]);
		$ward_no = trim($_POST["ward_no"]);
        $id = $_POST["slno"];
        $uid = $_SESSION["id"];
		
		$query = "SELECT * FROM gen_std_village where village='$village' and ward_no='$ward_no' and  slno!='$id'";

        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
		
        if ($count>0)
        {
            $out['status'] = "failure";
            $out['message'] = "Data Already Exists!";
        }
        else
        {
		   mysqli_query($con, 'begin;');
			try
			{
				$string = "UPDATE gen_std_village SET village='$village',ward_no='$ward_no' where slno='$id'";
				$result = mysqli_query($con, $string);
				if ($result)
				{
					$out['status'] = "success";
					$out['message'] = "Village Updated Successfully";
					
				}
				else
				{
					$out['status'] = "failure";
					$out['message'] = "Error while update Village!";
					
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