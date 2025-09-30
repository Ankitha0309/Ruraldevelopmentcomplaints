<!doctype html>

<?php
   include "essential/database.php";
       include "session.php";
   
   if(session_status() === PHP_SESSION_NONE) {
   	session_start();
   }
   
   
   
   ?>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/bootadmin.min.css">
      <link rel="stylesheet" href="assets/css/bootstrapValidator.css">
      <link rel="stylesheet" href="assets/css/toastr.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
      <script src="assets/js/jquery.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/bootadmin.min.js"></script>	
      <script src="assets/js/toastr.js"></script>
      <script src="assets/js/bootstrapValidator.js"></script>
      <script src="assets/js/notify.min.js"></script>
      <script src="assets/js/sweetalert2@10.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>	
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
      <!--font-family lato cdn-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
      <title>Rural Development Management System</title>
   </head>
   <style>	
      .has-feedback.has-error .help-block{
      color: red;
      }
   </style>
   <body class="bg-white">
      
      <style>
         html, body {
         height: auto;
         }
         .col-md{
         margin-bottom:0px!important;
         }
         .btn-width{
         width:100px;
         }
         select option {
         font-weight:bold;
         }
         select{
         font-weight:bold;
         }
         input{
         font-weight:bold;
         }
         textarea{
         font-weight:bold;
         height:55px;
         }
         label{
         font-weight:normal!important;
         }
         .control-label{
         font-weight:normal!important;
         font-size:15px;
         }
         .mb-4{
         margin-bottom:5px!important;
         }
         .p-4{
         padding:8px!important;
         }
         .bg-dark {
         background-color: #4a4954!important;
         }
         .help-block{
         color: red;
         }
         /*loader button css*/
         #loader {
         display: none;
         position: fixed;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         width:20%;
         height:150px;
         background: rgba(0,0,0,0.75);
         z-index: 10000;
         }
         #divimage{
         background:url(../assets/load.gif) no-repeat center center;
         width:50px;
         height:50px;
         background-size:cover;
         }
         label{
         font-weight:bold!important;
         }
         ::placeholder{
         font-size:13px!important;
         }
         .col-md-3{
         margin-bottom:5px!important;
         }
         .btn-group i{
         padding-left:10px;
         padding-bottom:5px;
         }
         .btn-group a{
         text-decoration:none!important;
         color:black!important;
         }
         .red{
         color:red!important;
         }
         input{
         border:1px solid gray;
         }
         select{
         border:1px solid gray;
         }
         textarea{
         border:1px solid gray;
         }
      </style>
      <style>
         /* width */
         ::-webkit-scrollbar {
         width: 6px;
         }
         /* Track */
         ::-webkit-scrollbar-track {
         background: #efefef; 
         }
         /* Handle */
         ::-webkit-scrollbar-thumb {
         background: #888; 
         }
         /* Handle on hover */
         ::-webkit-scrollbar-thumb:hover {
         background: #555; 
         }
         .navbar-toggler{
            background-color:#43CEDE!important;
            color:white!important;
         }
      </style>
      <style> 
         .btn-primary{
         color:#000!important;
         font-weight:bold!important;
         background-color:#CCD0C4!important;
         border:1px solid #CCD0C4!important;
         }
         .p-edit{
         color: #43CEDE  !important;
         padding:0px!important;
         background:transparent;
         margin-right:20px!important;
         }
         @media screen and (max-width: 900px) {
         .mobile-hide{
         padding-right:0px!important;
         padding:0px!important;
         }
         }
         
		 
		 /*table testcases*/
         #tbltestcase {
         border-collapse: collapse;
         width: 100%;	
         }
         #tbltestcase td{
         padding:0px!important;
         height:25px!important;
         border: 1px solid  #43CEDE  !important;
         }
         #tbltestcase th{
         background-color: #43CEDE  !important;
         border: 1px solid  #43CEDE  !important;
         color:white;
         font-weight:normal!important;
         }
         #tbltestcase thead{
         border-top: 1px solid  #43CEDE  !important;
         }
		 
         /*table css*/
         #tbl {
         border-collapse: collapse;
         width: 100%;	
         }
         #tbl td{
         padding:0px!important;
         height:25px!important;
         border: 1px solid  #43CEDE  !important;
         }
         #tbl th{
         background-color: #43CEDE  !important;
         border: 1px solid  #43CEDE  !important;
         color:white;
         font-weight:normal!important;
         }
         #tbl thead{
         border-top: 1px solid  #43CEDE  !important;
         }
         .table tr{
         padding:0px!important;
         }
         .table tr th{
         padding:0px!important;
         border-top:none!important;
         }
         table .dataTable tbody td {
         padding: 0px!important;
         }
         .tablecard{
         padding-top:0px;
         }
         .delete_data{
         padding:0px!important;
         background-color:transparent;
         border-color:transparent;
         color:#C82333;
         }
         .delete_data:hover
         {
         background-color:transparent;
         border-color:transparent;
         color:#C82333;
         }
         .delete_data1{
         padding:0px!important;
         background-color:transparent;
         border-color:transparent;
         color:#C82333;
         }
         .btn-pill{
         padding:2px!important;
         }
         .font_style{
         font-weight:normal;
         }
         @media all and (min-width: 992px) {
         .dropdown-menu li{ position: relative; 	}
         .nav-item .submenu{ 
         display: none;
         position: absolute;
         left:100%; top:-7px;
         }
         .nav-item .submenu-left{ 
         right:100%; left:auto;
         }
         .dropdown-menu > li:hover{ background-color: #f1f1f1 }
         .dropdown-menu > li:hover > .submenu{ display: block; }
         .dropdown-item{ color:black!important; }
         .navbar-light .navbar-nav .nav-link {
         color:white;
         font-size:15px;
         font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
         }
         .dropdown-item {
         font-size:16px;
         }
         }	
         .tablecard{
         padding-top:5px;
         }
         .tdfont{
         font-weight:bold;
         color:#495057!important;
         }
         //css for zoom class for image zoom in brand
         * {
         box-sizing: border-box;
         }
         .zoom:hover {
         -ms-transform: scale(3.5); /* IE 9 */
         -webkit-transform: scale(3.5); /* Safari 3-8 */
         transform: scale(3.5); 
         }
         @media (max-width: 991px) {
         .dropdown-menu .dropdown-menu{
         margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
         }
         .dropdown-menu > li:hover{ background-color: #f1f1f1 }
         .dropdown-menu > li:hover > .submenu{ display: block; }
         }
         .anchor_style a{
         font-weight:bold;
         font-size:15px;
         color:#000;
         text-decoration:none;
         }
         .anchor_style a:hover{
         text-decoration:none;
         }
         .navbar li a .fa-trash{
         color:red;
         }
         .navbar li a .fa-eye{
         color:#169CE4;
         }
         .navbar li a .fa-edit{
         color:#A5CD39;
         }
         .navbar li a .fa-user{
         color:blue;
         }
         .navbar li a .fa-user-plus{
         color:blue;
         }
         .navbar li a .fa-file{
         color:purple;
         }
         .navbar li a .fa-money{
         color:#b6c491;
         }
         .navbar li a .fa-building{
         color:black;
         }
         .navbar li a .fa-map-marker{
         color:lightblue;
         }
         .navbar li a .fa-address-card{
         color:#f2ac26;
         }
         .navbar li a .fa-book{
         color:green;
         }
         .navbar li a .fa-dashcube{
         color:#ff8598;
         }
         .navbar li a .fa-image{
         color:#f7c56f;
         }
         .navbar li a .fa-list-alt{
         color:#005EAC;
         }
         .navbar li a .fa-question{
         color:red;
         }
         .navbar li a .fa-tag{
         color:red;
         }
         .navbar li a .fa-cogs{
         color:#238AE6;
         }
         .navbar li a .fa-sitemap{
         color:#DE6576;
         }
         .navbar li a .fa-building{
         color:#A185B9;
         }
         .navbar li a .fa-university{ 
         color:#581493;
         }
         .navbar li a .fa-credit-card-alt{
         color:#ED8917;
         }
         .navbar li a .fa-percent{
         color:#8602f9;
         }
         .navbar li a .fa-map-marker{
         color:#F92626;
         }
         .navbar li a .fa-thumb-tack{
         color:#F92626;
         }
         .navbar li a .fa-plane{
         color:#581493;
         }
         .navbar li a .fa-location-arrow{
         color:#44bbd6;
         }
         //css for zoom class for image zoom in brand
         * {
         box-sizing: border-box;
         }
         .zoom:hover {
         -ms-transform: scale(3.5); /* IE 9 */
         -webkit-transform: scale(3.5); /* Safari 3-8 */
         transform: scale(3.5); 
         }
         input[type="file"]
         {
         height: 36px;
         }
         .formcard{
         background-color:#eeeeee;
         }
         .fa-arrow-circle-left{
         color:#09B8AA!important;
         background-color:white;
         }
         .bg-dark{
         background: #43CEDE  !important;
         height:80px;
         }
      </style>
      <style>
         /* hover dropdown menus */
         @media only screen and (max-width: 991px) {
         .navbar-hover .show > .dropdown-toggle::after{
         transform: rotate(-90deg);
         }
         }
         @media only screen and (min-width: 992px) {
         .navbar-hover .collapse ul li{position:relative;}
         .navbar-hover .collapse ul li:hover> ul{display:block}
         .navbar-hover .collapse ul li:hover> .main{color:#43CEDE;}
         .navbar-hover .collapse ul ul{position:absolute;top:100%;left:0;min-width:250px;display:none}
         .navbar-hover .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:250px;display:none}
         }
         .navbar-hover .collapse ul li a{
         font-family: 'Lato', sans-serif;
         font-size:20px;
         letter-spacing: 0px;
         color: #1C3988;
         font-weight:bold;
         opacity: 1;
         padding-left:20px!important;
         padding-right:20px!important;
         }

         .navbar-hover .collapse ul li ul a{
         font-family: 'Lato', sans-serif;
         font-size:15px;
         letter-spacing: 0px;
         color: #1C3988!important;
         font-weight:bold;
         opacity: 1;
         padding-left:20px!important;
         padding-right:20px!important;
         }
         .navbar{
         background: #FFFFFF 0% 0% no-repeat padding-box;
         box-shadow: 0px 3px 6px #00000029;
         opacity: 1;
         padding-top:0px;
         padding-bottom:0px;
         }
      </style>
      <body>
         <nav class="navbar navbar-expand-md  navbar-hover">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHover" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHover">
               
            
            </div>
         </nav>
         <!-- Logout Modal-->
         <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header" style="background-color:#A8D1DF!important;color:white;">
                     <h5 class="modal-title" id="exampleModalLabel">Ready to Leave !</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true" style="color:white;font-weight:bold;"><i class="fa fa-times"></i></span>
                     </button>
                  </div>
                  <div class="modal-body">Are you sure,want to logout !</div>
                  <div class="modal-footer">
                     <a class="btn" style="background-color:#A5CD39;font-weight:bold;color:white;" href="logout.php">Logout</a>
                     <button class="btn btn-secondary" type="button" style="background-color:red;;font-weight:bold;color:white" data-dismiss="modal">Cancel</button>
                  </div>
               </div>
            </div>
         </div>
         <!--End Logout Modal-->
   </body>
</html>