
   
   <div class="wrapper">
  <?php 
   include"sidebar.php"
  ?>
   <div class="content">
   <?php 
   include"topbar.php"
  ?>
  <h2 style="text-align:center">Complaints</h2>

     <div class="card-body table-responsive">
         <table id="tbl" class="table table-hover dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
            <thead>
               <tr  style="border: 0px solid #999!important;box-shadow:0 2px 3px -1px rgba(0,0,0,0.1) !important;background-color:white;font-size:14px;padding:0px!important;text-align:center">
				    <th>Sl.</th>
				    <th>Complaint ID</th>
					<th>Village</th>						
					<th>Title</th>
					<th>Type</th>						
					<th>Description</th>
                    <th>Image</th>	
					<th>Action</th>										
					<th>Complaint Date</th>			
					<th>View</th>		
               </tr>
            </thead>
            <tbody >
                 <?php 	
				$ward_no=$_SESSION['ward_no'];
                $uid = $_SESSION['slno'];
				
				$res_po = mysqli_query($con, "SELECT * FROM gen_std_complaints tbl1 
                LEFT JOIN gen_std_users tbl2 ON tbl1.assigned_supervisior = tbl2.name
                WHERE tbl2.slno =$uid");
				$i=0;
               	while($row = mysqli_fetch_array($res_po))
               	{
					$i++;
               	$original_date=$row['created_on'];
				$new_date=date('d-m-Y',strtotime($original_date));
               	?>
              <tr>
                <td style="text-align:center;"><?php echo $i;?></td>
			    <td style="text-align:center;" id="menuid"><?php echo $row['complaint_id'];?></td>
                <td style="text-align:left;"><?php echo $row['village'];?></td>	
                <td style="text-align:left;"><?php echo $row['complaint_title'];?></td>	
				<td style="text-align:left;"><?php echo $row['complaint_type'];?></td>	
				<td style="text-align:left;"><?php echo $row['complaint_desc'];?></td>					
			    <td style="text-align:left;"><img src="<?php echo $row['image'];?>" style="border-radius:50%;height:50px; width:50px;"/></td>
				<td style="text-align:left;"><?php echo $row['complaints_status'];?></td>	
					
			
				
				<td style="text-align:center;"><?php echo $new_date;?></td>
				
				
				<td>
                    <!--<button type="button"  id="<?php echo $row['complaint_id']?> class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalCenter">ASSIGN SUPERVISIOR</button>-->
					<button type="button" style="top: 453px;center: 571px;width: 150px;height: 34px;background: #22D66B 0% 0% no-repeat padding-box;box-shadow: 0px 3px 6px #00000029;border-radius: 5px;opacity: 1;font: normal normal normal 13px/15px Lato;letter-spacing: 0.08px;color: #FFFFFF;text-align:center;"  class=" btn p-status1 assign_btn" id="<?php echo $row['complaint_id'];?>">ASSIGN WORKER</button>
                </td>
            </tr>
              <?php } ?>
            </tbody>
         </table>
      </div>
  
</div>
</div>
 <!------*****Receipt Entry Modal start*******--->
	  <div class="assignworker_div" id="assignworker_div">
 
	  </div>
      <!---*****Receipt Entry Modal start*******-----> 

	  <script>
	  /*To render receipt entry modal*/
	    $('.assign_btn').click(function(){
        
         var complaint_id = $(this).attr('id');
      
         $.ajax({
         url: "assign_worker_modal.php",
         method: "POST",
         data: {
         complaint_id: complaint_id
         },
         success: function(data) {
         
         $("#assignworker_div").html(data);
         
         $('#receiptentrymodal').modal('show')

         }
         });

         })
         /*To render receipt entry modal end */
	  </script>
 <script>
   
  $('table').dataTable({
		lengthMenu: [[500, -1], [500, "ALL"]],
	   "ordering": false
	});
	
	 $('.status').on('change', function () {
               // var action_status = $(this).val();
				  var action_status = $(this).closest('tr').find('.status').val();
				  
				var currentRow = $(this).closest("tr");

  var complaint_id = currentRow.find("#menuid").html();
               
			 $.ajax({
            url: "complaint_status.php",
            method: "POST",
            data: {
                id: complaint_id,
				action_status:action_status
            },
            //dataType: "json",
            success: function(data) {
				//alert(data);
				window.location.href = "view_complaints.php";
            }
			
			
                // window.location.href = "order_fetch.php";
        });
            
            })
        </script>


