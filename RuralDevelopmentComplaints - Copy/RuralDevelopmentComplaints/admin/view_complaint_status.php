
   
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
					<th>Title</th>
                    <th>Status</th>												
					<th>Fund Released</th>			
					
               </tr>
            </thead>
            <tbody >
                 <?php 	
				$ward_no=$_SESSION['ward_no'];
				$user_name=$_SESSION['id'];
				$res_po = mysqli_query($con, "select * from gen_std_complaints  where ward_no='$ward_no' and created_by='$user_name' order by complaint_id desc");
				$i=0;
               	while($row = mysqli_fetch_array($res_po))
               	{
					$i++;
               	$complaint_id=$row['complaint_id'];	
				$original_date=$row['created_on'];
				$new_date=date('d-m-Y',strtotime($original_date));
               	?>
              <tr>
                <td style="text-align:center;"><?php echo $i;?></td>
			    <td style="text-align:center;" id="menuid"><a href="fund_release.php?id=<?php echo $row['complaint_id'];?>"><?php echo $row['complaint_id'];?></a></td>
                	
                <td style="text-align:left;"><?php echo $row['complaint_title'];?></td>	
				<td style="text-align:left;"><?php echo $row['complaints_status'];?></td>	
		        <?php 
				$res_po1 = mysqli_query($con, "select * from fund_release  where complaint_id='$complaint_id'");
				$i=0;
               	while($row1 = mysqli_fetch_array($res_po1))
               	{
				?>
				<td style="text-align:left;"><?php echo $row1['funds'];?></td>	
				<?php } ?>
				
				
				
			
            </tr>
              <?php } ?>
            </tbody>
         </table>
      </div>
  
</div>
</div>
 