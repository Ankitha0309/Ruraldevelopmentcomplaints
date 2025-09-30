<?php


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
				<?php 
   include"topbar.php"
  ?>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		
				
				<h2 style="color:#394780;font: normal normal normal 32px/38px Roboto;letter-spacing: 0px;padding:5px 50px;"><span>EMPLOYEE</span> REGISTRATION</h2>
  
					<form id="frmMaster" method="post" class="form-horizontal" action="#">
					<!---### Card 1 ###---->
				    <div class="card cardstyle " style="border-top:4px solid #0693FF;margin-left:23px !important;margin-right:23px !important;">
					<div class="card-body">
					<div class="form-row">
								<div class="col-md-12">
									<p class="" style="color:#394780;">Employee Details</p>
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
											<select class="form-control textstyle" name="designation" id="designation" >
												<option value="" selected disabled>Select</option>
												<option value="PDO">PDO</option>
												<option value="Supervisior">Supervisior</option>
												<option value="Complainer">Complainer</option>
												<option value="Worker">Worker</option>
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
							</div>
							
						<div class="col-md-4"></div>
							</div>
					
					
					</div>
					</div>
					</form>
					<!-- ####card 1 end ####--->
				<div class="row mt-5">
			<div class="col-md-1"></div>
			<div class="col-md-10 table-responsive tablecard">

				<table id="tbldept" class="table table-hover dataTable no-footer dtr-inline">
					<thead style="text-align:center;font-weight:normal;">
					   <tr style="text-align:center;font-weight:normal;">
							<th style="text-align:center;font-weight:normal;" >Sl. No</th>
							<th style="text-align:center;font-weight:normal;">Name</th>
							<th style="text-align:center;font-weight:normal;">Designation</th>
							<th style="text-align:center;font-weight:normal;">Ward No.</th>
							<th style="text-align:center;font-weight:normal;">Mobile No.</th>
							<th style="text-align:center;font-weight:normal;">User Name</th>
							<th style="text-align:center;font-weight:normal;">Password</th>
							<th style="text-align:center;font-weight:normal;">Action</th>
					   </tr>
					</thead>
					<tbody>	
						<?php	
							$select="select * from gen_std_users where designation!='' order by slno desc";
							$query=mysqli_query($con, $select);
							if(mysqli_num_rows($query)){
								$slno=0;
								while($row=mysqli_fetch_array($query))
								{
									$slno++;
						?>					
						<tr>
							<td class="" style="text-align:center;"><?php echo $slno;?></td>
							<td class="" style="text-align:center;"><?php echo $row['name'];?></td>
							<td class="" style="text-align:center;"><?php echo $row['designation'];?></td>
							<td class="" style="text-align:center;"><?php echo $row['ward_no'];?></td>
							<td class="" style="text-align:center;"><?php echo $row['mobile_no'];?></td>
							<td class="" style="text-align:center;"><?php echo $row['user_name'];?></td>
							<td class="" style="text-align:center;"><?php echo $row['password'];?></td>
							<td style="text-align:center">
								<button type="submit" class="btn btn-icon p-edit edit_data" data-toggle="tooltip"  id="<?php echo $row['slno']?> " title="Edit" style="background: transparent;"><img src="../assets/images/Edit.svg" ></button>
								&nbsp;<a href="#" class="btn delete_data" data-toggle="tooltip"  id="<?php echo $row['slno']?> " title="Delete"><img src="../assets/images/Delete.svg"> </a>
							</td>								  
						</tr>
						<?php } } ?>
					</tbody>
				</table>

			</div>
			<div class="col-md-1"></div>
		</div>
				
					
			
			</div>
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
    $("form").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
                 $.ajax({
					url: "employe_regadd.php",
					method: "POST",
					data:formValues,
					dataType: "json",
					success: function(data) {
									
						window.location.reload();
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
 
   
$('#tbldept').on('click', '.delete_data', function() {
	var employee_id = $(this).attr("id");

			$.ajax({
				url: "employe_delete.php",
				method: "POST",
				data: {
				id: employee_id
				},
				success: function(data) {
					var json = $.parseJSON(data);
					if(json.status=="success")
					{
						Swal.fire({
							icon: 'success',									 
							text: json.message
						});
						setTimeout(function () {
							window.location.reload();
						}, 2000);
					}else{
						Swal.fire({
							icon: 'failure',									  
							text: json.message
						});
						setTimeout(function () {
							window.location.reload();
						}, 2000);
					}
				}
			});
	
});


</script>