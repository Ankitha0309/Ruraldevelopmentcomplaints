<?php
require_once  "../essential/database.php";
require_once "../essential/session.php";



    $action = trim($_POST["save"]);

    if ($action == 'Save' && $action != '')
    {
     
        $village = trim($_POST["village"]);
		$title = trim($_POST["title"]);
		$type = trim($_POST["type"]);
		$description = trim($_POST["description"]);
	
    $selectwardno=mysqli_query($con,"select * from gen_std_village where village='$village'");
	$wardnorow=mysqli_fetch_array($selectwardno);
	$ward_no=$wardnorow['ward_no'];
	
                $image=$_FILES["image"]["name"];
				$image1=$_FILES["image"]["tmp_name"];
				$path = "images/";
				$location = "images/";
				
				//$target_dir = "uploadedimages/";	
				$target_file = $location . basename($_FILES["image"]["name"]);		
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));	

        
                 $uid = $_SESSION['id'];
                     if (move_uploaded_file($image1, $target_file)) 
				 {
                $string = "insert into gen_std_complaints(village,ward_no,complaint_title,complaint_type,complaint_desc	,image,created_by,created_at,created_on)VALUES('$village','$ward_no','$title','$type','$description','$path$image','$uid ',CURRENT_TIME,CURRENT_DATE)";
			
		
                $result = mysqli_query($con, $string);

                if ($result)
                {
                    $out['status'] = "success";
                    $out['message'] = "Complaint Raised Successsfully..";
                    
                }
                else
                {
					 $out['status'] = "Failure";
                    $out['message'] = "Failed Raise Complaint";
                   
                }
				 }
				 else{
					$string = "insert into gen_std_complaints(village,complaint_title,complaint_type,complaint_desc,created_by,created_at,created_on)VALUES('$village','$title','$type','$description,'$uid ',CURRENT_TIME,CURRENT_DATE)";
			
                $result = mysqli_query($con, $string);

                if ($result)
                {
                    $out['status'] = "success";
                    $out['message'] = "Complaint Raised Successsfully..";
                    
                }
                else
                {
					 $out['status'] = "Failure";
                    $out['message'] = "Failed Raise Complaint";
                   
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
        $id = $_POST["slno"];
        $uid = $_SESSION["id"];
		
	$selectwardno=mysqli_query($con,"select * from gen_std_village where village='$village'");
	$wardnorow=mysqli_fetch_array($selectwardno);
	$ward_no=$wardnorow['ward_no'];
		
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
				$string = "UPDATE gen_std_users SET name='$emp_name',user_name='$user_name',password='$pass',mobile_no='$mobileno',designation='$designation',user_type='$designation' where slno='$id'";
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