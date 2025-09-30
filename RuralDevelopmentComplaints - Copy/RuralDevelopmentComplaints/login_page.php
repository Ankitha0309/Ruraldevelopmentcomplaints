
   
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
border-radius: 25px;
opacity: 1; 
margin-top:58px;
}

.one{
background:transparent url('staticimages/rural1.jpg') 0% 0% no-repeat padding-box;
}
.two{
	background:transparent url('staticimages/rural2.jpg') 0% 0% no-repeat padding-box;
}
.three{
	background:transparent url('staticimages/rural3.jpg') 0% 0% no-repeat padding-box;
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
		 <form id="frmMaster" method="post" class="form-horizontal" action="login.php" enctype="multipart/form-data">
		  
			<div class="row">
			<div class="col-sm-8 login_img" >
                                   
             </div>
			  
              <div class="col-sm-4" style="margin-top:65px;">
			
			  <div class="row">
			   <h3 style="border-top:4px solid #0693FF;font-family: 'Asul', sans-serif !important;font-size:30px;" id="signIn">Sign In</h3>
			  </div>
			  <div class="row mt-3">
			  <div class="col-sm-12 mb-3 user-icon">
		
			   <input class="form-control " id="" name="user_name" placeholder="Enter User Name" required>
			  </div>
              <div class="col-sm-12 pass_show">

			   <input class="form-control " id="password" name="password"  type="password" placeholder="Enter Password" required>
			  </div>
			   <div class="col-sm-12 mt-3">
			   <button type="submit" class="btn btn-primary" style="background-color:#0693FF !important;color:white !important;width:100%;">Login</button>
			  </div>

			  <div class="col-sm-12 mt-3">
			   <a href='admin/employe_registration_unique.php' type="button" class="btn btn-primary signup" style="background-color:#0693FF !important;color:white !important;width:100%;">Sign Up</a>
			  </div>

			  <div class="col-sm-12 mt-3">
			   <a href='index.php' type="button" class="btn btn-primary" style="background-color:#0693FF !important;color:white !important;width:100%;">Back</a>
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
	var myParam = location.search.split('key=')[1]
	if(myParam == 'admin'){
		$("#signIn").text("Admin Sign In");
		$('.login_img').addClass("one");
		$(".signup").attr("href", "admin/employe_registration_unique.php?key=admin")
	}
	if(myParam == 'pdo'){
		$("#signIn").text("PDO Sign In");
		$('.login_img').addClass("two");
		$(".signup").attr("href", "admin/employe_registration_unique.php?key=pdo")
	}
	if(myParam == 'supervisor'){
		$("#signIn").text("Supervisor Sign In");
		$('.login_img').addClass("three");
		$(".signup").attr("href", "admin/employe_registration_unique.php?key=supervisor")
	}
	
	if(myParam == 'complainer'){
		$("#signIn").text("Complainer Sign In");
		$('.login_img').addClass("three");
		$(".signup").attr("href", "admin/employe_registration_unique.php?key=complainer")
	}
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