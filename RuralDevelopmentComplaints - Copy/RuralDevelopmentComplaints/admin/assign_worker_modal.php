<?php 
include "../essential/database.php";
include "../essential/session.php";

$complaint_id=trim($_POST['complaint_id']);

$select=mysqli_query($con,"select * from fund_release where complaint_id='$complaint_id'");
$row=mysqli_fetch_array($select);
$count=mysqli_num_rows($select);
?>

<div class="receiptentry_div" id="receiptentry_div">
 <div class="modal fade" id="receiptentrymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
         <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
               <div class="modal-header" style="background-color:#43CEDE;padding:15px;">
                  <h5 class="modal-title font-weight-bold" style="color:white;" id="exampleModalLabel">Assign Worker</h5>
                  <button onclick="mymodalFunction2()" class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="#" method="post"  id="myForm2" enctype="multipart/form-data">
                     <div class="col-sm-12">
					
                        <div class="row">
                        
                           <div class="col-md-2 mb-3">
                              <div class="form-group">
                                 
                              </div>
                           </div>
                           <div class="col-md-8 mb-3">
                              <div class="form-group">
                                 <label class="col-md-12 control-label pl-0">Assign Worker</label>
								 <?php 
								 $ward_no=$_SESSION['ward_no'];
								 if($count==0) {
									 
									 ?>
							      
									<select class="form-control delboydetails" name="name" id="name">
									<option value="" disabled selected>--Select Worker Name--</option>
									<?php
									$query =mysqli_query($con, "SELECT name From gen_std_users where designation='Worker' and  ward_no='$ward_no' order by name asc");
									while($data =mysqli_fetch_array($query))
									{
									echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>"; 
									}	
									?> 		
									</select>
								 <?php } else { 
								 if($row['assigned_worker']==null){
								 ?>
								 <select class="form-control delboydetails" name="name" id="name">
								 <option value="" disabled selected>--Select Worker Name--</option>
									
									<?php
									$query =mysqli_query($con, "SELECT name From gen_std_users where designation='Worker' and  ward_no='$ward_no' order by name asc");
									while($data =mysqli_fetch_array($query))
									{
									echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>"; 
									}	
									?> 		
									</select>
								 <?php } else  { ?>
								 <select class="form-control delboydetails" name="name" id="name">
								
									<option value="<?php echo $row['assigned_worker'] ?>"  selected><?php echo $row['assigned_worker'] ?></option>
									<?php
									$query =mysqli_query($con, "SELECT name From gen_std_users where designation='Worker' and  ward_no='$ward_no' order by name asc");
									while($data =mysqli_fetch_array($query))
									{
									echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>"; 
									}	
									?> 		
									</select>
								 <?php } }?>
                              </div>
                           </div>
						         <div class="col-md-2 ">
                             
                           </div>
                        </div>
                     </div>
                     <div class="input-group">
                        <input type="hidden" id="id" name="id" value="<?php echo $complaint_id;?>"/>
                     </div>
                     <div class="modal-footer">
                        <button type="submit" class="btn receipt_payment" id="receipt_payment"  style="background-color:#43CEDE;color:white!important;width:100px;font-size:12px;font-weight:bold;padding:10px 12px;height:40px!important">Update</button>
						<input name="save" id="save"  type="hidden" value="Add">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
</div>
<script>
 $(function(){
   		$("#amount").on('input', function (e) {
   			$(this).val($(this).val().replace(/[^0-9/.]/g, ''));
   		});	 
   	});
	
      $(document).ready(function(){
    $("form").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
                 $.ajax({
					url: "update_worker.php",
					method: "POST",
					data:formValues,
					dataType: "json",
					success: function(data) {
									
						 $('#receiptentrymodal').modal('hide')
					}
				});
      
    });
})
		

</script>
