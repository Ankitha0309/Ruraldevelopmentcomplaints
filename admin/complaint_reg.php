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
	width: 90px;
	height: 90px;
	
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
				
				
				<h2 style="color:#394780;font: normal normal normal 32px/38px Roboto;letter-spacing: 0px;padding:5px 50px;"><span>COMPLAINTS</span> REGISTRATION</h2>
  
					<form id="frmMaster" method="post" class="form-horizontal" action="#">
					<!---### Card 1 ###---->
				    <div class="card cardstyle " style="border-top:4px solid #0693FF;margin-left:23px !important;margin-right:23px !important;">
					<div class="card-body" style="padding:10px;">
					<div class="form-row">
														
							</div>
						
							<input type="hidden" name="slno" id="slno">
						
							<div class="form-row">								
								<div class="col-md-4">
									<div class="form-group">
										<label class="col-lg-12 control-label labelstyle" style="">Village</label>
										<div class="col-lg-10">
											<select class="form-control textstyle" name="village" id="village">
												<option value="" disabled selected>Select</option>
												<?php 
													$dept = mysqli_query($con,"select * from gen_std_village order by village asc");
													while($deptrow = mysqli_fetch_array($dept)){
												?>
													<option value="<?php echo $deptrow['village'];?>"><?php echo $deptrow['village'];?></option>
												<?php }?>
											</select>
										</div>
									</div>
								</div>
									<div class="col-md-4">
									<div class="form-row">
										<div class="col-md-12 mb-3">
											<div class="form-group">
												<label class="col-lg-12 control-label labelstyle" style="">Title</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="title" id="title" placeholder="Enter"  >
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-row">
										<div class="col-md-12 mb-3">
											<div class="form-group">
												<label class="col-lg-12 control-label labelstyle" style="">Complaint Type</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="type" id="type" placeholder="Enter "  >
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-row">
										<div class="col-md-12 mb-3">
											<div class="form-group">
												<label class="col-lg-12 control-label labelstyle" style="">Complaints Description</label>
												<div class="col-lg-10">
													<textarea type="text" class="form-control textstyle" name="description" id="description" placeholder="Enter Complete Address"  rows="2"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							   	<div class="col-md-4" >
										     <div class="row" >										
											 <div class="col-md-12 " style="padding-left:30px;">
												<div class="form-group">
												
												<div class="uploaddiv mt-3" ><img  src="../svgimages/Upload.svg" id="blah" alt="" style="width:90px;height:90px;"></div>
											   <div class="fileUpload btn btn-primary" style="">
                                               <i class="fas fa-image"></i><span> Browse</span>
                                               <input id="uploadBtn1" type="file" name="image" class="upload" accept=".png, .jmysqli,.jpeg,.jpg"  />
                                               </div>
												</div>
											</div>	
                                          	<script>
												uploadBtn1.onchange = evt => {
												const [file] = uploadBtn1.files
												if (file) {
												blah.src = URL.createObjectURL(file);
												}
												}
								          </script>							
										</div>
										</div>
							
								<div class="col-md-4" style="padding-top:25px;">
								<div class="col-lg-10 form-group">
									<input type="submit" class="btn savebtn" name="save1" id="save1" value="Save"/>
									<input name="save" id="save" type="hidden" value="Save">
									<input type="reset" class="btn clearbtn" name="clear" id="clear" value="Clear" style="float:right"/> 
								</div>
							</div>
						
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
							<th style="text-align:center;font-weight:normal;">Village</th>
							<th style="text-align:center;font-weight:normal;">Title</th>
							<th style="text-align:center;font-weight:normal;">Type</th>
							<th style="text-align:center;font-weight:normal;">Description</th>
							<th style="text-align:center;font-weight:normal;">Image</th>
							<!--<th style="text-align:center;font-weight:normal;">Action</th>-->
					   </tr>
					</thead>
					<tbody>	
						<?php	
							$select="select * from gen_std_complaints  order by complaint_id  desc";
							$query=mysqli_query($con, $select);
							if(mysqli_num_rows($query)){
								$slno=0;
								while($row=mysqli_fetch_array($query))
								{
									$slno++;
						?>					
						<tr>
							<td class="" style="text-align:center;"><?php echo $slno;?></td>
							<td class="" style="text-align:center;"><?php echo $row['village'];?></td>
							<td class="" style="text-align:center;"><?php echo $row['complaint_title'];?></td>
							<td class="" style="text-align:center;"><?php echo $row['complaint_type'];?></td>
							<td class="" style="text-align:center;"><?php echo $row['complaint_desc'];?></td>
							<td class="" style="text-align:center;"><img src="<?php echo $row['image'];?>" style="border-radius:50%;height:50px; width:50px;"/></td>
							
							<!---<td style="text-align:center">
								<button type="submit" class="btn btn-icon p-edit edit_data" data-toggle="tooltip"  id="<?php echo $row['complaint_id']?> " title="Edit" style="background: transparent;"><img src="../assets/images/Edit.svg" ></button>
								&nbsp;<a href="#" class="btn delete_data" data-toggle="tooltip"  id="<?php echo $row['complaint_id']?> " title="Delete"><img src="../assets/images/Delete.svg"> </a>
							</td>-->								  
						</tr>
						<?php } } ?>
					</tbody>
				</table>

			</div>
			<div class="col-md-1"></div>
		</div>
					
				
					
					
					</div>
					
					
			</div>
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
	$(document).ready(function() {				

		$('#frmMaster').bootstrapValidator({
			message: 'This value is not valid',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			
			fields: {	
          				
			}
		}).on('success.form.bv', function(e) {
			e.preventDefault();
			var conTxt = $("#save").val();
			Swal.fire({
				title: 'Are you sure?',
				text: "To " + conTxt,
				icon: '',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes'
			}).then((result) => {
				if(result.isConfirmed) {
					// ajax call goes after here
					$(".submit_btnplan").prop("disabled", true);
					var spinner = $('#loader');
					spinner.show();
					var formData = new FormData($(this)[0]);
					$.ajax({
						url: "complaints_add.php",
						type: 'POST',
						data: formData,
						processData: false,
						contentType: false,
						success: function(data) {
							var json = $.parseJSON(data);
							if(json.status == "success") {
								Swal.fire({
									icon: 'success',
									text: json.message
								});
								spinner.hide();
								setTimeout(function() {
									window.location.reload()
								}, 2000);
							} else {
								Swal.fire({
									icon: 'failure',
									text: json.message
								});
								spinner.hide();
							}
						},
						error: function() {
							spinner.hide();
							toastr.warning("Oops! something went wrong please try again", "", {
								positionClass: "toast-top-center"
							});							
						}
					});
				} else {
					$( "#save1" ).prop( "disabled", false );
					console.log('stop');
				}
			});
		});
	});
	
	$("input").on("keypress", function(e) {
		if(e.which === 32 && !this.value.length) e.preventDefault();
	});
	</script>
	<script>
 $('#tbldept').on("click", ".p-edit", function () {

   	var employee_id = $(this).attr("id");

   	$.ajax({
   		url: "complaint_edit.php",
   		method: "POST",
   		data: {
   			id: employee_id
   		},
   		dataType: "json",
   		success: function(data) {
   			$('#village').val(data.village);
            $('#title').val(data.complaint_title); 	
			$('#type').val(data.complaint_type); 	
			$('#description').val(data.complaint_desc); 	 	
            $('#uploadBtn1').val(data.image);			
   			$('#save').val("Update");
   			$('#save1').val("Update");
   			$('#slno').val(data.complaint_id );
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