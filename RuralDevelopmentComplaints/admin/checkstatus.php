<?php
 
 include  "../essential/database.php";

?>

<header>
	 <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/bootadmin.min.css">

      <link rel="stylesheet" href="assets/css/bootstrapValidator.css">
      <link rel="stylesheet" href="assets/css/toastr.css">
	
</header>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Complaints Registered</title>
    <div class="wrapper">
 
   <div class="content">
 <div class="row">
     <div class="col-md-12">
     <h2 style="text-align:center">Complaints</h2>

     </div>

     <div class="d-flex justify-content-end"><a href="\RuralDevelopmentComplaints\index.php" class="link-primary">Back To Admin</a></div>
 </div>
  <div class="ct-topbar">
  <div class="container">
	<ul class="list-unstyled list-inline ct-topbar__list">
	  <li class="ct-language" style="text-align:left">Language<i class="fa fa-arrow-down"></i>
		<ul class="list-unstyled ct-language__dropdown">
		  <li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en">English</a></li>
		  <li><a href="#googtrans(en|kn)" class="lang-es lang-select" data-lang="kn">Kannada</a></li>
		 </ul>
	  </li>
	</ul>
  </div>
</div>
     <div class="card-body table-responsive">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
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
                    <th>Status</th>					
												
					<th>Complaint Date</th>			
          <th>Assigned Worker</th>			
          <th>Funds Released</th>			
							
               </tr>
            </thead>
            <tbody >
                 <?php 	
				
				$res_po = mysqli_query($con, "SELECT tb1.*,tb2.assigned_worker,tb2.funds FROM gen_std_complaints tb1 
        LEFT JOIN fund_release tb2 on tb1.complaint_id = tb2.complaint_id;");
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

        <td style="text-align:center;"><?php echo $row['assigned_worker'];?></td>
        <td style="text-align:center;"><?php echo $row['funds'];?></td>
				
				
				
            </tr>
              <?php } ?>
            </tbody>
         </table>
                </div>
            </div>
        </div>
      </div>
  
</div>
</div>
  </head>
  <body>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
   
 
 <script>

	
	$(document).ready( function () {
    $('#tbl').DataTable();
} );

</script>
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

	function triggerHtmlEvent(element, eventName) {
	  var event;
	  if (document.createEvent) {
		event = document.createEvent('HTMLEvents');
		event.initEvent(eventName, true, true);
		element.dispatchEvent(event);
	  } else {
		event = document.createEventObject();
		event.eventType = eventName;
		element.fireEvent('on' + event.eventType, event);
	  }
	}

	jQuery('.lang-select').click(function() {
	  var theLang = jQuery(this).attr('data-lang');
	  jQuery('.goog-te-combo').val(theLang);

	  //alert(jQuery(this).attr('href'));
	  window.location = jQuery(this).attr('href');
	  location.reload();

	});
  </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<style>
    .ct-topbar {
  text-align: right;
  background: #eee;
}
.ct-topbar__list {
  margin-bottom: 0px;
}
.ct-language__dropdown{
	padding-top: 8px;
	max-height: 0;
	overflow: hidden;
	position: absolute;
	top: 110%;
	left: -3px;
	-webkit-transition: all 0.25s ease-in-out;
	transition: all 0.25s ease-in-out;
	width: 100px;
	text-align: center;
	padding-top: 0;
  z-index:200;
}
.ct-language__dropdown li{
	background: #222;
	padding: 5px;
}
.ct-language__dropdown li a{
	display: block;
}
.ct-language__dropdown li:first-child{
	padding-top: 10px;
	border-radius: 3px 3px 0 0;
}
.ct-language__dropdown li:last-child{
	padding-bottom: 10px;
	border-radius: 0 0 3px 3px;
}
.ct-language__dropdown li:hover{
	background: #444;
}
.ct-language__dropdown:before{
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	margin: auto;
	width: 8px;
	height: 0;
	border: 0 solid transparent;
	border-right-width: 8px;
	border-left-width: 8px;
	border-bottom: 8px solid #222;
}
.ct-language{
	position: relative;
  background: #00aced;
  color: #fff;
  padding: 10px 0;
}
.ct-language:hover .ct-language__dropdown{
	max-height: 200px;
	padding-top: 8px;
}
.list-unstyled {
    padding-left: 0;
    list-style: none;
}

.navbar-brand>img {
  padding-top: 11px;
  width: 130px;
  margin-left: 15px;
}
.navbar-brand {
    height: auto;
    margin: 0;
    padding: 0;
    margin-right: 20px;
}
.navbar {
  background-color: #000000;
}
.navbar-default .navbar-nav > .active > a {
  padding: 8px 19px 9px !important;
}
.navbar-nav > li.active {
  padding: 8px 0px 9px 0;
}
.navbar-right {
  padding-top: 0;
}
.navbar-default .navbar-nav > li > a::after {
  background-color: transparent;
  border-bottom: 3px solid #d2282e;
}
.navbar-default .navbar-nav>li {
  display: inline-block;
  text-align: center;
  float: none;
}
.navbar-default .navbar-nav>li>a {
    color: #fff;
}
.navbar-default .navbar-nav>li>a:hover {
    color: #fff;
    background-color: #0392CC;
}
</style>