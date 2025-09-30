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
				
				
				<h2 style="color:#394780;font: normal normal normal 32px/38px Roboto;letter-spacing: 0px;padding:5px 50px;">
                 <a href="view_complaints.php" ><i class="fa fa-arrow-circle-left" style="font-weight:bold;color:black;font-size:25px;color:#3178C3 !important"></i><span class="headerspacing" style="font-weight:bold;font-size:25px;"></a>
				
				<span>RELEASE</span> FUND</h2>
  
					<form id="frmMaster" method="post" class="form-horizontal" action="#">
					<!---### Card 1 ###---->
				    <div class="card cardstyle " style="border-top:4px solid #0693FF;margin-left:23px !important;margin-right:23px !important;">
					<div class="card-body" style="padding:10px;">
					<div class="form-row">
														
							</div>
						
							<input type="hidden" name="slno" id="slno">
						<?php
                          $complaint_id=$_GET['id'];
						  $select=mysqli_query($con,"select * from gen_std_complaints where complaint_id='$complaint_id'");
						  $row=mysqli_fetch_array($select);
 						?>
							<div class="form-row">								
					
					              <div class="col-md-4">
									<div class="form-row">
										<div class="col-md-12 mb-3">
											<div class="form-group">
												<label class="col-lg-12 control-label labelstyle" style="">Complaint id</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="id" id="id" placeholder="Enter"  readonly value="<?php echo $row['complaint_id'];?>" >
												</div>
											</div>
										</div>
									</div>
								</div>
									<div class="col-md-4">
									<div class="form-row">
										<div class="col-md-12 mb-3">
											<div class="form-group">
												<label class="col-lg-12 control-label labelstyle" style="">Title</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="title" id="title" readonly value="<?php echo $row['complaint_title'];?>"  >
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
													<input type="text" class="form-control" name="type" id="type" readonly value="<?php echo $row['complaint_type'];?>"  >
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
													<textarea type="text" class="form-control textstyle" name="description" id="description" readonly value="<?php echo $row['complaint_desc'];?>" rows="2"><?php echo $row['complaint_desc'];?></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>	
								<?php
									 
									  $select1=mysqli_query($con,"select * from fund_release where complaint_id='$complaint_id'");
									 
									  $row1=mysqli_fetch_array($select1);
									
 						       ?>
							<div class="col-md-4">
									<div class="form-row">
										<div class="col-md-12 mb-3">
											<div class="form-group">
												<label class="col-lg-12 control-label labelstyle" style="">Fund Amount</label>
												<div class="col-lg-10">
													<input type="text" class="form-control" name="fund" id="fund" placeholder="Enter"  value="">
												</div>
											</div>
										</div>
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
					
				
					
					
					</div>
					
					
			</div>
	</div>
	</div>
	</div>
	<!-- end of gst div hide show -->


		
	<script>
         $(function(){
			
			 $("#fund").on('input', function (e) {
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
					url: "fund_add.php",
					method: "POST",
					data:formValues,
					dataType: "json",
					success: function(data) {
									
						window.location.href="view_complaints.php";
					}
				});
      
    });
})


</script>