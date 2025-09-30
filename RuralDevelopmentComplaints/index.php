
   
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Asul&display=swap" rel="stylesheet">
</head>
<style>
.login_img{
width: 521px;
height: 441px;
background: transparent url('staticimages/DEVIL.jpg') 0% 0% no-repeat padding-box;
border-radius: 25px;
opacity: 1; 
margin-top:85px;
}
.form-control{
	border-radius:20px !important;
}
.btn-primary{
	background-color: #0693FF !important;
}
.card{
	border-radius:25px !important;
}
/*
 .user-icon i {
            position: absolute;
			font-size:20px;
			margin-top: -3px;
        }
          
        .user-icon {
            width: 100%;
            margin-bottom: 10px;
        }
          
        .icon {
            padding: 10px;
            min-width: 40px;
        }
          
        .form-control {
            width: 100%;
            padding: 10px;
            text-align: center;
        }
*/
</style>
<body >
<?php
include('header.php');
?>
<div class="container mt-5">
     <div class="card" style="border-top:5px solid #0693FF">
    <div class="card-body">
    <div class="container">
	<div class="row">
	<div class="col-sm-12 p-0">
	<div class="row">
<div class="col-sm-1"></div>
	<div class="col-md-10">
		 <form class="form-horizontal" action="login.php" enctype="multipart/form-data">
		  
			<div class="row">
			<div class="col-sm-8 login_img" >
                                   
             </div>
			  
              <div class="col-sm-4" style="margin-top:100px;">
			
			  <div class="col-sm-12 mt-3">
			   <a href='login_page.php?key=admin' type="button" class="btn btn-primary" style="background-color:#0693FF !important;color:white !important;width:100%;">ADMIN</a>
			  </div>

			  <div class="col-sm-12 mt-3">
			   <a href='login_page.php?key=pdo' type="button" class="btn btn-primary" style="background-color:#0693FF !important;color:white !important;width:100%;">PDO</a>
			  </div>

			  <div class="col-sm-12 mt-3">
			   <a href='login_page.php?key=supervisor' type="button" class="btn btn-primary" style="background-color:#0693FF !important;color:white !important;width:100%;">SUPERVISOR</a>
			  </div>
			 

			  <div class="col-sm-12 mt-3">
			   <a href='login_page.php?key=complainer' type="button" class="btn btn-primary" style="background-color:#0693FF !important;color:white !important;width:100%;">COMPLAINER</a>
			  </div>

			  <div class="col-sm-12 mt-3">
			   <a href='admin/checkstatus.php' type="button" class="btn btn-primary" style="background-color:#0693FF !important;color:white !important;width:100%;">Check Complaint Status</a>
			  </div>

			  </div>
                			
             </div> 
			   </div>
		</form>
		</div>
		<div class="col-sm-1"></div>
		</div>
		</div>
		
		
		
	</div>
		</div>
		
		
		
		
		
		</div>		 
    </div>  
</div>
  </div>      
<style>
.pass_show{position: relative}

.pass_show .ptxt {

position: absolute;

top: 58%;

right: 29px;

z-index: 1;

color: black;


margin-top: -10px;

cursor: pointer;

transition: .3s ease all;

}

.pass_show .ptxt:hover{color: #333333;}
</style>
<style>
.user-icon{position: relative}

.user-icon .ptxt {

position: absolute;

top: 58%;

right: 29px;

z-index: 1;

color: black;


margin-top: -10px;

cursor: pointer;

transition: .3s ease all;

}

.user-icon .ptxt:hover{color: #333333;}
</style>
<script>

$(document).ready(function(){
$('.pass_show').append('<span class="ptxt fa fa-eye"></span>');
});


$(document).on('click','.pass_show .ptxt', function(){

//$(this).text($(this).text() == "Show" ? "Hide" : "Show");


$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; });

});
$(document).ready(function(){
$('.user-icon').append('<span class="ptxt fa fa-user"></span>');
});
</script>      
</body>

</html>