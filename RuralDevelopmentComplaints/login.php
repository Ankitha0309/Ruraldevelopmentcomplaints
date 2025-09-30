

<?php 
include "essential/database.php";
include "session.php";
	?>
<header>
	 <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
	<link href="assets/css/toastr.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
	
</header>
<?php

	if(session_status() === PHP_SESSION_NONE) {
		session_start();
		
	}

	$username= $_POST["user_name"];
	$password=  $_POST["password"];

	
	$insert="select * from gen_std_users where user_name='$username' and password ='$password'";

	  $result=mysqli_query($con,$insert);
	  $count=mysqli_num_rows($result);
	
		$row=mysqli_fetch_array($result);
		
		if($count){
		
		
		$_SESSION['slno']=$row['slno'];		
		$_SESSION['id']=$row['user_name'];
		$_SESSION['mobile']=$row['mobile_no'];
		$_SESSION['designation']=$row['designation'];
		$_SESSION['ward_no']=$row['ward_no'];
		
		
		echo"<script type='text/javascript'>toastr.success('Login Sucessfull..!');</script>";
		header( "refresh:2; url=admin/dashboard.php" );
		
		
	}
		else{
      
	   echo"<script type='text/javascript'>toastr.warning('Invalid Username or Password..!');</script>";
						header( "refresh:2; url=index.php" );
		}
			
					
	


?>
	







