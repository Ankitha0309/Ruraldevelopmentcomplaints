<!DOCTYPE html>
<html>

<?php
include  "../essential/database.php";
include "../essential/session.php";
?>

<!-- https://bootstrapious.com/p/bootstrap-sidebar -->
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="../assets/css/bootadmin.min.css">
      <link rel="stylesheet" href="../assets/css/bootstrapValidator.css">
      <link rel="stylesheet" href="../assets/css/toastr.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
      <script src="../assets/js/jquery.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
      <script src="../assets/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/bootadmin.min.js"></script>	
      <script src="../assets/js/toastr.js"></script>
      <script src="../assets/js/bootstrapValidator.js"></script>
      <script src="../assets/js/notify.min.js"></script>
      <script src="../assets/js/sweetalert2@10.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>	
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
	  
	  <!--link for font-->
	  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">



	  <!--link for date-->
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	  
	  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
      <title>RURAL DEVELOPMENT</title>
   </head>
   <style>


/*@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";*/
body {
  font-family: 'Lato', sans-serif;
   font-size:16px;
    background: white;
}
th
{
	font: normal normal medium 15px/18px Roboto;
}
.red{
	color:red;
}
.btn-pill{
	background-color:transparent!important;
}
a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 11px 5px;
    background:transparent;
	margin-left:4px;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: transparent linear-gradient(90deg, #2A6FBE 0%, #60B1E1 100%) 0% 0% no-repeat padding-box;
   box-shadow: 0px 3px 6px #FFFFFF1C;

    opacity: 1;
    color: black;
    transition: all 0.3s;
	min-height: 100vh;
	//border-right:2px solid gray;
	box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
	
	 height: 100%;
 // position: fixed;
  z-index: 1;
  overflow-x: hidden;

}

#sidebar.active {
	
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 10px ;
   background: transparent linear-gradient(90deg, #2673CB 0%, #60B1E1 100%) 0% 0% no-repeat padding-box;
   box-shadow: 0px 3px 6px #FFFFFF1C;
    opacity: 1;
	color:white!important;
	text-align:center!important;
	box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
	
}

#sidebar ul.components {
    padding: 0px!important;
   // border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}


#sidebar ul li a {
    padding: 10px;
    font-size: 21px;
    display: block;
	color:white;
	
	
	
}
#sidebar ul ul a {
    padding: 5px;
    font-size: 21px;
    display: block;
	color:white;

}

#sidebar ul li a:hover {
    color:white;
    //background: black;
}
ul ul a:hover {
    color:white!important;
    //background:black!important;
}
/* 
#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    
} */
a[data-toggle="collapse"] {
    position: relative;
}


ul ul a {
    font-size: 15px!important;
    padding-left: 30px !important;
    style=" background: #E1E1E135 0% 0% no-repeat padding-box;
    border-radius: 3px;
     opacity: 1;"
	 color:white !important;
	
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    //font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
.small, small {
	color:red!important;
}
#wrapper {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
.heading{
	color:white; 
	font-size:25px;
	font-family: 'Roboto Slab', serif;
	font-weight:bold;
}
.heading3{
	color:black; 
	font-size:25px;
	font-family: 'Roboto Slab', serif;
	font-weight:bold;
}
table.dataTable thead th, table.dataTable thead td {
    background:#3982C8 !important ;
    opacity: 1;
	color:white;
	padding:10px;
}
</style>

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 100px;
  height: 30px;
  margin-bottom:0px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color:#b2bac1;
  -webkit-transition: .4s;
  transition: .4s;
  
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 5px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input:checked + .slider {
  background-color: #2ab934;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(55px);
  -ms-transform: translateX(55px);
  transform: translateX(68px);
}
/*------ ADDED CSS ---------*/
.on
{
  display: none;
}

.on, .off
{
  color:white!important;
  position: absolute;
  transform: translate(-50%,-50%);
  top: 50%;
  left: 50%;
  font-size: 10px;
  font-family: Verdana, sans-serif;
   font-weight:bold;
}

input:checked+ .slider .on
{display: block;}

input:checked + .slider .off
{display: none;}

/*--------- END --------*/

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;}
  /*
	.btn-primary{
	color:white;
	background-color:green !important;
	border:1px solid green !important;
	border-radius:50px;
	padding:10px;
	width:150px;
	}
	*/
	table.dataTable tbody th, table.dataTable tbody td {
    padding:3px!important;
}
table.dataTable thead th, table.dataTable thead td {
    padding:3px!important;
    border-bottom: 1px solid #111;
}
.tdfont{
	font-weight:bold;
	color:#495057!important;
}

/*-------form control style-----*/
  input
   {
	background: #FFFFFF 0% 0% no-repeat padding-box;
	border: 1px solid #9E9E9E;
	border-radius: 5px;
	opacity: 1;
   }
   .submit_btn
   {
	
	border: 2px solid #00BF00;
	border-radius: 50px;
	opacity: 1;
	font: normal normal normal 20px/24px Roboto;
	letter-spacing: 0px;
	color: #00BF00;
	width: 139px;
	height: 43px;
	margin-right:10px;
   }
   .submit_btn:hover{
   background: #00BF00 0% 0% no-repeat padding-box !important;
   color:#fff;
   }
   .clear_btn
   {
	width: 148px;
	height: 43px;
	background: #FFFFFF 0% 0% no-repeat padding-box;
	border: 2px solid #9E9E9E !important;
	border-radius: 50px;
	font: normal normal normal 20px/24px Roboto;
	letter-spacing: 0px;
	color: #9E9E9E;
	opacity: 1;
	margin-left:10px;
   }
   .clear_btn:hover
   {
	   background: #9E9E9E 0% 0% no-repeat padding-box;
	     color:#fff;
   }
   
   .submit_btnplan
   {
	background-color: transparent !important;
	border: 2px solid #3080EC !important;
	border-radius: 50px;
	opacity: 1;
	font: normal normal normal 20px/24px Roboto;
	letter-spacing: 0px;
	color: #3080EC;
	width: 139px;
	height: 43px;
   }  
      .headingpage
   {
		font: normal normal normal 32px/38px Roboto;
		letter-spacing: 0px;
		color: #394780;
		opacity: 1;
		margin-top:20px;
   }
   .card
   {
	   border:1px solid #fff;
   }
    .heading
   {
	   font: normal normal normal 32px/38px Roboto;
letter-spacing: 0px;
color: #394780;
   opacity: 1;
   }
   small{
	   text-align: left;
font: normal normal 300 17px/20px Roboto;
letter-spacing: 0px;
color: #9E9E9E;
opacity: 1;
margin-bottom:10px;
   }
   
   .dropdown-toggle
   {
	  height: 42px;
       background: #E1E1E135 0% 0% no-repeat padding-box;
        border-radius: 3px;
     opacity: 1;
margin:8px 0px 8px 0px ;
   }
   .homeSubmenu
   {
	   margin-top:5px;
	  background: #E1E1E136 0% 0% no-repeat padding-box;
border-radius: 3px;
opacity: 1;
   }
   li:hover
   {
	  background: #E1E1E16B 0% 0% no-repeat padding-box;
border-radius: 3px;
opacity: 1;
   }
   .fa-arrow-right
   {
	   width: 16px;
height: 10px;
   }
   .logout
   {
	   height: 42px;
background: #E1E1E135 0% 0% no-repeat padding-box;
border-radius: 3px;
opacity: 1;
margin:8px 0px 8px 0px ;
   }
   .project
   {
	   text-align: left;
font: normal normal bold 29px Lato;
letter-spacing: 0px;
color: #FFFFFF;
opacity: 1; 
padding-top:5px;
   }
   
   
</style>

<style>
.cardstyle{
	background: #FFFFFF 0% 0% no-repeat padding-box;box-shadow: 0px 2px 4px #00000029;border-radius: 5px;opacity: 1;
}
.labelstyle{
	font: normal normal normal 17px/21px Lato;letter-spacing: 0px;color: #505050;opacity: 1;
}
.headingstyle{
	color:#8F8D8D;font: normal normal 300 17px/20px Roboto;letter-spacing: 0px;opacity: 1;height: 20px;padding-top:7px;padding-bottom:20px;
}
.mainheading{
	font: normal normal normal 32px/39px Lato;letter-spacing: 0px;color: #394780;opacity: 1;padding-top:7px;padding-bottom:10px;
}
.textstyle{
	height: 32px;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #9E9E9E;border-radius: 5px;opacity: 1;
}
.savebtn{	
	width: 116px;height: 36px;background: #43D443 0% 0% no-repeat padding-box;border-radius: 5px;opacity: 1;border-color:#43D443!important;color:white;font: normal normal normal 20px/24px Lato;letter-spacing: 0px;color: #FFFFFF;
}
.searchbtn{	
	width: 116px;height: 36px;background: #3080EC 0% 0% no-repeat padding-box;border-radius: 5px;opacity: 1;border-color:#3080EC!important;color:white;font: normal normal normal 20px/24px Lato;letter-spacing: 0px;color: #FFFFFF;
}
.clearbtn{
	width: 124px;height: 36px;background: #FFFFFF 0% 0% no-repeat padding-box;border: 2px solid #C2C2C2;border-radius: 5px;opacity: 1;
	font: normal normal normal 20px/24px Lato;letter-spacing: 0px;padding-bottom: 3px!important;padding-top: 3px!important;
	/* width: 124px;background: #FFFFFF 0% 0% no-repeat padding-box;border: 2px solid #C2C2C2;border-radius: 5px;opacity: 1;font: normal normal normal 20px/24px Lato;letter-spacing: 0px;color: #9E9E9E;opacity: 1; */
}
.theadstyle{
	height: 44px;background: #434343 0% 0% no-repeat padding-box!important;opacity: 1;text-align: center;font: normal normal normal 15px/18px Lato;letter-spacing: 0.02px;color: #FFFFFF;opacity: 1;
}
table.dataTable thead th, table.dataTable thead td {
    background: #434343 0% 0% no-repeat padding-box;opacity: 1;color: white;padding: 10px!important;
}
.card-body{
padding-bottom: 0px!important;
}
.tablecard{
	box-shadow: 0px 1px 6px #00000029;opacity: 1;padding-left: 0px;padding-right: 0px;
}
.subhead{
	width: 125px;height: 21px;text-align: left;font: normal normal bold 17px/21px Lato;letter-spacing: 0px;color: #394780;opacity: 1;
}
.viewsearchbtn{
	width: 116px;height: 36px;background: #4390D4 0% 0% no-repeat padding-box;border-radius: 5px;opacity: 1;
	text-align: center;font: normal normal normal 20px/24px Lato;letter-spacing: 0px;color: #FFFFFF;
	/* width: 95px;height: 32px;background: #4390D4 0% 0% no-repeat padding-box;border: 1px solid #707070;border-radius: 3px;opacity: 1;
	font: normal normal normal 16px/19px Lato;letter-spacing: 0px;color: #505050; */
}
.btnview{
	width: 100px;height: 32px;background: #3080EC 0% 0% no-repeat padding-box;border-radius: 3px;opacity: 1;
	font: normal normal normal 16px/19px Lato;letter-spacing: 0px;color: #FFFFFF;
}
.viewclearbtn{
	width: 95px;height: 32px;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #707070;border-radius: 3px;opacity: 1;
	font: normal normal normal 16px/19px Lato;letter-spacing: 0px;color: #505050;
}
.tblpfoot{
	height: 22px;text-align: right;font: normal normal bold 18px/30px Lato;letter-spacing: 0px;color: #141414;opacity: 1;
}
</style>


<body>
    <div >
	<?php
 
   
   	if(session_status() === PHP_SESSION_NONE) {
   		session_start();
   	}
   	
 
   	
   ?>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
            <h2><!--<img src="../assets/images/KVT Logo.png" style="width: 193px;
height: 35px;">-->RDCA</h2>
            </div>

            <ul class="list-unstyled components mt-4" style="margin:0px 5px 0px 5px;">
             <!---  <li>
                    <a href="dashboard.php"><i class="fa fa-tachometer"></i> Dashboard</a>
                </li>-->
				   <?php 
				   if($_SESSION['designation']=='Admin'){
				   ?> 
                <li style="">
				
                    <a href="village.php"  class=""  style="font-size:16px;">VILLAGE</a>
                    
                </li>
					
				 <li style="">
				
                    <a href="employe_registration.php" class=""  style="font-size:16px;">REGISTRATION</a>
					
                </li>
                <li style="">
				
                    <a type="button" id="getSumOfReleaseFunds" style="font-size:16px;">Get Sum of Released Funds</a>
					
                </li>
				
					<?php } ?>
					<?php 
				   if($_SESSION['designation']=='Complainer'){
					   
				   ?> 
				   <li style=" ">
				
                    <a href="complaint_reg.php" class=" "  style="font-size:16px;">COMPLAINTS REGISTRATION</a>
                   
                </li>
				<li style="">
				
                    <a href="view_complaint_status.php" class=""  style="font-size:16px;">VIEW COMPLAINT STATUS</a>
					
                </li>
				<?php } ?>
				<?php 
				   if($_SESSION['designation']=='PDO'){
					   
				   ?> 
					 <li style=" ">
				
                    <a href="view_complaints.php" class=" "  style="font-size:16px;">COMPLAINTS VIEWS</a>
                   
                </li>
				   <?php } ?>
				   <?php 
				   if($_SESSION['designation']=='Supervisior'){
					   
				   ?> 
					 <li style=" ">
				
                    <a href="supervisior_complaintview.php" class=" "  style="font-size:16px;">COMPLAINTS VIEWS</a>
                   
                </li>
				   <?php } ?>

                   <?php 
				   if($_SESSION['designation']!='none'){
					   
				   ?> 
						   <li >
                            <a href=""  style="font-size:16px;" data-toggle="modal" data-target="#logoutModal">LOGOUT</a>
                </li>
                   
				   <?php } ?>
                   
                   
				
				
            </ul>

        </nav>
     
    </div>

 <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header" style="background: transparent linear-gradient(90deg, #2673CB 0%, #60B1E1 100%) 0% 0% no-repeat padding-box;color:white">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave !</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color:white;font-weight:bold;">×</span>
                  </button>
               </div>
               <div class="modal-body">Are you sure,want to logout !</div>
               <div class="modal-footer">
                  <a class="btn " style="background: transparent linear-gradient(90deg, #2673CB 0%, #60B1E1 100%) 0% 0% no-repeat padding-box;font-weight:bold;color:white;" href="logout.php">Logout</a>
                  <button class="btn btn-secondary" type="button" style="background-color:red;;font-weight:bold;color:white" data-dismiss="modal">Cancel</button>
               </div>
            </div>
         </div>
      </div>
      <!--End Logout Modal-->

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
<script>
	  $('#getSumOfReleaseFunds').on('click', function () {
      
    	 $.ajax({
            url: "callstored_procedure.php",
            method: "POST",
            dataType: "json",
            success: function(data) {
                toastr.success('Total Sum of Funds Released:'+data.sum);
			   }

                });
			  }); 

</script>