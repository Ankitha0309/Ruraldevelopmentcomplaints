<?php
require_once  "../essential/database.php";
require_once "../essential/session.php";



    $action = trim($_POST["save"]);

    if ($action == 'Save' && $action != '')
    {
     
        $emp_name = trim($_POST["emp_name"]);
		$designation = trim($_POST["designation"]);
		$mobileno = trim($_POST["mobileno"]);
		$user_name = trim($_POST["user_name"]);
		$pass = trim($_POST["pass"]);
		$ward_no = trim($_POST["ward_no"]);



        $query = "SELECT * FROM gen_std_users where mobile_no='$mobileno' and user_name='$user_name'";

        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);

        if (mysqli_num_rows($result))
        {
            $out['status'] = "failure";
            $out['message'] = "Data Already Exists!";
        }
        else
        {
          //  $uid = $_SESSION['id'];
            mysqli_query($con, 'begin;');
            try
            {
                $string = "insert into gen_std_users(name,user_name,password,mobile_no,user_type,designation,ward_no)VALUES('$emp_name','$user_name','$pass','$mobileno','designation','$designation','$ward_no')";
			
                $result = mysqli_query($con, $string);

                if ($result)
                {
                    $out['status'] = "success";
                    $out['message'] = "Employe Registered Successsfully..";
                    
                }
                else
                {
					 $out['status'] = "Failure";
                    $out['message'] = "Failed To Register Employe";
                   
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
		
     
        $emp_name = trim($_POST["emp_name"]);
		$designation = trim($_POST["designation"]);
		$mobileno = trim($_POST["mobileno"]);
		$user_name = trim($_POST["user_name"]);
		$pass = trim($_POST["pass"]);
		$ward_no = trim($_POST["ward_no"]);
        $id = $_POST["slno"];
//$uid = $_SESSION["id"];
		
		$query = "SELECT * FROM gen_std_users where mobile_no='$mobileno' and user_name='$user_name' and  slno!='$id'";

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
				$string = "UPDATE gen_std_users SET name='$emp_name',user_name='$user_name',password='$pass',mobile_no='$mobileno',designation='$designation',user_type='$designation',ward_no='$ward_no' where slno='$id'";
				$result = mysqli_query($con, $string);
				if ($result)
				{
					$out['status'] = "success";
					$out['message'] = "Employe Updated Successfully";
					
				}
				else
				{
					$out['status'] = "failure";
					$out['message'] = "Error while updating Employe!";
					
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