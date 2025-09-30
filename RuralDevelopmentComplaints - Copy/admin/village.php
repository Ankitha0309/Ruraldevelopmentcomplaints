

<?php

?>
	<style>
table
{
	font-weight:normal;
}
td
{
    font-weight:normal;
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
  
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				
			</div>
			<div class="col-md-1"></div>
		</div>
		
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h2 class="mainheading" style="">Village Registration</h2>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="card cardstyle" style="border-top:4px solid #0693FF;">
					<form id="frmMaster" method="post" class="form-horizontal" action="#">
						<div class="card-body">
						
							<input type="hidden" name="slno" id="slno">
						
							<!--row 1-->
							<div class="form-row">
								<div class="col-md-4 mb-3">
									<div class="form-group">
										<label class="col-lg-12 control-label labelstyle" style="">Village</label>
										<div class="col-lg-10">
											<input type="text" class="form-control textstyle" name="village" id="village" placeholder="Enter" />
										</div>
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<div class="form-group">
										<label class="col-lg-12 control-label labelstyle" style="">Ward No.</label>
										<div class="col-lg-10">
											<input type="text" class="form-control textstyle" name="ward_no" id="ward_no" placeholder="Enter" />
										</div>
									</div>
								</div>
								<div class="col-md-4 " style="margin-top:27px;">
									<div class="col-lg-12 form-group d-flex">
										<input type="submit" class="btn savebtn" name="save1" id="save1" value="Save"/>
										<input name="save" id="save" type="hidden" value="Save">
									
										
										<input type="reset" class="btn clearbtn ml-5" name="clear" id="clear" value="Clear"/>
									</div>
								</div>
								
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		<div class="row mt-5">
			<div class="col-md-1"></div>
			<div class="col-md-10 table-responsive tablecard">

				<table id="tbldept" class="table table-hover dataTable no-footer dtr-inline">
					<thead style="text-align:center;font-weight:normal;">
					   <tr style="text-align:center;font-weight:normal;">
							<th style="text-align:center;font-weight:normal;" >Sl. No</th>
							<th style="text-align:center;font-weight:normal;">Village</th>
							<th style="text-align:center;font-weight:normal;">Ward No.</th>
							<th style="text-align:center;font-weight:normal;">Action</th>
					   </tr>
					</thead>
					<tbody>	
						<?php	
							$select="select * from gen_std_village order by slno desc";
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
							<td class="" style="text-align:center;"><?php echo $row['ward_no'];?></td>
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
</div>
</div>
	
<script type="text/javascript">
$("input").on("keypress", function(e) {
   	if (e.which === 32 && !this.value.length)
   	e.preventDefault();
});
    $(document).ready(function(){
    $("form").on("submit", function(event){
        event.preventDefault();
 
        var formValues= $(this).serialize();
                 $.ajax({
					url: "village_add.php",
					method: "POST",
					data:formValues,
					dataType: "json",
					success: function(data) {
									
						window.location.reload();
					}
				});
      
    });
})

$('#tbldept').on("click", ".p-edit", function () {
   	var employee_id = $(this).attr("id");
   	$.ajax({
   		url: "village_edit.php",
   		method: "POST",
   		data: {
   			id: employee_id
   		},
   		dataType: "json",
   		success: function(data) {
   			$('#village').val(data.village);
            $('#ward_no').val(data.ward_no); 		 			
   			$('#save').val("Update");
   			$('#save1').val("Update");
   			$('#slno').val(data.slno);
   			$( "#village" ).focus();   			
   		}
   	});
});
 
   
$('#tbldept').on('click', '.delete_data', function() {
	var employee_id = $(this).attr("id");

			$.ajax({
				url: "village_delete.php",
				method: "POST",
				data: {
				id: employee_id
				},
				success: function(data) {
					var json = $.parseJSON(data);
					if(json.status=="success")
					{
						
						setTimeout(function () {
							window.location.reload();
						}, 2000);
					}else{
						
						setTimeout(function () {
							window.location.reload();
						}, 2000);
					}
				}
			});
		
	;
});
</script>