   <!-- Page Content  -->
        <?php
 
       include  "../essential/database.php";
      include "../essential/session.php";

      if(!isset($_SESSION['id']))
      {
      	echo "<script>window.location.href='../index.php';</script>";
      }
      ?>

            <nav class="navbar navbar-expand-lg navbar-light pb-0" style="margin-bottom:1px !important;padding-top:4px !important">
                <div class="container-fluid" style="padding-left:0px!important;">

                    <button type="button" id="sidebarCollapse" class="btn text-sidebar" style="background-color:transparent!important;">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                  
					<div class="navbar-collapse collapse nav-content order-2">
            
        </div>
					<ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2">
            <li class="nav-item"><h2 style="margin-bottom:0px;"></h2></li>
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target=".nav-content" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </ul>
		<div class="ml-auto navbar-collapse collapse nav-content order-3 order-md-3">
              <ul class="ml-auto nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><strong><?php echo $_SESSION['id'];?></strong></a>
                            </li>
            </ul>
        </div>
                </div>
            </nav>

            
      