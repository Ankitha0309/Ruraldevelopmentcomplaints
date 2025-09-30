<?php
 session_start();
$_SESSION['designation'] = "none";
?>
	<style>
	.col-md {
		margin-bottom: 0px!important;
	}
	label{
		font: normal normal 300 17px/20px Roboto;letter-spacing: 0px;color: #000000;height: 20px;
	}
	input{
		border: 1px solid #9E9E9E!important;
	}
	.viewbtn{
		width: 95px;height: 35px;border-radius: 3px;background-color:#3080EC!important;color:white;font-size:18px;padding:3px 10px 5px 10px;font: normal normal normal 16px/19px Roboto;
	}
	
	.bordertext{
		margin-top:-10px;margin-left:20px;background-color:white;padding-left:10px;padding-right:10px;
	}
	.rowpad{
		padding-left:30px;
		padding-right:30px;
	}
	.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.uploaddiv{
	background: #FFFFFF 0% 0% no-repeat padding-box; 
	border: 1px solid #707070;
	border-radius: 5px;opacity: 1;
	top: 1504px;
	left: 409px;
	width: 154px;
	height: 175px;
	
}

	</style>
	<div class="wrapper">
		<?php 
   include"sidebar.php"
  ?>
			<div class="content">

  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		
				
				<h2 style="color:#394780;font: normal normal normal 32px/38px Roboto;letter-spacing: 0px;padding:5px 50px;"><span class="signIn">EMPLOYEE</span> REGISTRATION</h2>
  
					<form id="frmMaster" method="post" class="form-horizontal" action="#">
					<!---### Card 1 ###---->
				    <div class="card cardstyle " style="border-top:4px solid #0693FF;margin-left:23px !important;margin-right:23px !important;">
					<div class="card-body">
					<div class="form-row">
								<div class="col-md-12">
									<p class="" style="color:#394780;">Registeration Details</p>
								</div>							
							</div>
						
							<input type="hidden" name="slno" id="slno">
						
							<div class="form-row">								
								<div class="col-md-4 ">
									<div class="form-group">
										<label class="col-lg-12 control-label labelstyle" style="">Name</label>
										<div class="col-lg-10">
											<input type="text" class="form-control textstyle" name="emp_name" id="emp_name" placeholder="Enter" />
										</div>
									</div>
								</div>
							
									<div class="col-md-4 ">
									<div class="form-group">
										<label class="col-lg-12 control-label labelstyle" style="">Designation</label>
										<div class="col-lg-10">
											<select class="form-control textstyle drop down dropdw" name="designation" id="designation" >
												
											</select>
										</div>
									</div>
								</div>
						
						      <div class="col-md-4">
									<div class="form-group">
										<label class="col-lg-12 control-label labelstyle" style="">Ward No.</label>
										<div class="col-lg-10">
											<select class="form-control textstyle" name="ward_no" id="ward_no">
												<option value="" disabled selected>Select</option>
												<?php 
													$dept = mysqli_query($con,"select * from gen_std_village order by ward_no asc");
													while($deptrow = mysqli_fetch_array($dept)){
												?>
													<option value="<?php echo $deptrow['ward_no'];?>"><?php echo $deptrow['ward_no'];?></option>
												<?php }?>
											</select>
										</div>
									</div>
								</div>
						       <div class="col-md-4">
									<div class="form-group">
										<label class="col-lg-12 control-label labelstyle" style="">Mobile Number</label>
										<div class="col-lg-10">
											<input type="text" class="form-control textstyle" name="mobileno" id="mobileno" placeholder="Enter" maxlength="10" />
										</div>
									</div>					
								</div>
							
								<div class="col-md-4">
									<div class="form-group">
										<label class="col-lg-12 control-label labelstyle" style="">User Name</label>
										<div class="col-lg-10">
											<input type="text" class="form-control textstyle" name="user_name" id="user_name" placeholder="Enter" />
										</div>
									</div>
								</div>
							
						
							<div class="col-md-4">
									<div class="form-group">
										<label class="col-lg-12 control-label labelstyle" style="">passsword</label>
										<div class="col-lg-10">
											<input type="text" class="form-control textstyle" name="pass" id="pass" placeholder="Enter" />
										</div>
									</div>
								</div>
								<div class="col-md-4"></div>
							<div class="col-md-4" style="padding-top:25px;">
								<div class="col-lg-10 form-group">
									<input type="submit" class="btn savebtn" name="save1" id="save1" value="Save"/>
									<input name="save" id="save" type="hidden" value="Save">
									<input type="reset" class="btn clearbtn" name="clear" id="clear" value="Clear" style="float:right"/> 
								
								</div>
								<a href='/RuralDevelopmentComplaints/index.php' type="button" class="btn btn-primary" style="background-color:#0693FF !important;color:white !important;width:100%;">Back</a>
							</div>
							
						<div class="col-md-4"></div>
							</div>
					
					
					</div>
					</div>
					</form>
					<!-- ####card 1 end ####--->
			
	</div>

	<!-- end of gst div hide show -->

	 <SCRIPT language=Javascript>
     function isNum(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
     function isNumber(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
    </SCRIPT>
		
	<script>
         $(function(){
			 $("#parent_mobileno").on('input', function (e) {
				$(this).val($(this).val().replace(/[^0-9]/g, ''));
			 });
			 $("#student_mobileno").on('input', function (e) {
				$(this).val($(this).val().replace(/[^0-9]/g, ''));
			 });
			 $("#aadhar").on('input', function (e) {
				$(this).val($(this).val().replace(/[^0-9]/g, ''));
			 });
			
         });
          
      </script>
	  

	<script type="text/javascript">
	 $(document).ready(function(){

		var myParam = location.search.split('key=')[1]
	if(myParam == 'admin'){
		$(".signIn").text("Admin Sign Up");
		$('.dropdw').append( new Option('Admin','Admin') );
	
	}
	if(myParam == 'pdo'){
		$(".signIn").text("PDO Sign Up");
		$('.dropdw').append( new Option('PDO','PDO') );
	
	}
	if(myParam == 'supervisor'){
		$(".signIn").text("Supervisor Sign Up");
		$('.dropdw').append( new Option('Supervisior','Supervisior') );

	}

	if(myParam == 'complainer'){
		$(".signIn").text("Complainer Sign Up");
		$('.dropdw').append( new Option('Complainer','Complainer') );

	}

    $("form").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
                 $.ajax({
					url: "employe_regadd.php",
					method: "POST",
					data:formValues,
					dataType: "json",
					success: function(data) {
									
						history.back();
					}
				});
      
    });
})
	
	
	$("input").on("keypress", function(e) {
		if(e.which === 32 && !this.value.length) e.preventDefault();
	});
	</script>
	<script>
	$('#tbldept').on("click", ".p-edit", function () {
   	var employee_id = $(this).attr("id");
   	$.ajax({
   		url: "employe_edit.php",
   		method: "POST",
   		data: {
   			id: employee_id
   		},
   		dataType: "json",
   		success: function(data) {
   			$('#emp_name').val(data.name);
            $('#designation').val(data.designation); 	
			$('#ward_no').val(data.ward_no); 	
			$('#mobileno').val(data.mobile_no); 	
			$('#user_name').val(data.user_name); 	
			$('#pass').val(data.password); 		 			
   			$('#save').val("Update");
   			$('#save1').val("Update");
   			$('#slno').val(data.slno);
   			$( "#emp_name" ).focus();   			
   		}
   	});
});
 
   



</script>