<?php include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
  echo $_SESSION['userid'];
	header("location:".DOMAIN."/"); 
}
?>
<html>
  <head>
  <link rel="icon" href="images/cow.jpg" type="image/x-icon" />

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="text/javascript" src="./js/main.js"></script>
 	<script type="text/javascript" src="./js/manage.js"></script>
  <script type="text/javascript" src = "js/getFamilyFormData.js"></script>
  <script type="text/javascript" src = "js/familyData.js"></script>

  <script>
	$(document).ready(function(){
		$('#cow_giving').load('num_rows.php').show();
	});
   </script>
    
  </head>

  <body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i><img style = "border-radius:8px" src = "images/girinka.jpg" height = 50" width = "50"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Girinka Munyarwanda</div>
      </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="dashboard.php">
    <i class="fas fa-fw fa-home">
</i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  <h6>Families</h6>
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFamily" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cogs"></i>
    <span>Add & Manage</span>
  </a>
  <div id="collapseFamily" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Families Management:</h6>
      <a class="collapse-item" href="#" data-toggle="modal" data-target="#form_family" class="btn btn-primary">Add New</a>

      <a class="collapse-item" href="manage_family.php" class="btn btn-primary">Manage</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  <h6>Donors</h6>
</div>

 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDonor" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cogs"></i>
    <span>Add & Manage</span>
  </a>
  <div id="collapseDonor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Donors Management:</h6>
      <a class="collapse-item" href="#" data-toggle="modal" data-target="#form_doner" class="btn btn-primary">Add New</a>

      <a class="collapse-item" href="manage_doner.php" class="btn btn-primary">Manage</a>
    </div>
  </div>
</li>





     <!-- Divider -->
     <hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
<h6>Cows</h6>
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCow" aria-expanded="true" aria-controls="collapseTwo">
<i class="fas fa-fw fa-cogs"></i>
<span>Add & Manage</span>
</a>
<div id="collapseCow" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
<h6 class="collapse-header">Cows Management:</h6>
<a class="collapse-item" href="#" data-toggle="modal" data-target="#form_cow" class="btn btn-primary">Add New</a>

<a class="collapse-item" href="manage_cow.php" class="btn btn-primary">Manage</a>
</div>
</div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">




<!-- Heading -->
<div class="sidebar-heading">
<h6>Giving Cows</h6>
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGivCow" aria-expanded="true" aria-controls="collapseTwo">
<i class="fas fa-fw fa-users"></i>
<span>Serving Families</span>
</a>
<div id="collapseGivCow" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
<h6 class="collapse-header">May you have a cow?</h6>
<div  id = "cow_giving"></div>
</div>
</div>
</li>
   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
    <!-- End of Sidebar -->  

 
	<?php

//Family form
include_once("./templates/family.php");
 
//Cow Form
include_once("./templates/cow.php");

//Doner Form
include_once("./templates/doner.php");

 ?>
<script type="text/javascript" src="js/Chart.min.js"></script>
<script type="text/javascript" src="js/graph.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>