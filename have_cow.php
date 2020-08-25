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

  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
  <script type="text/javascript" src="./js/main.js"></script>
 	<script type="text/javascript" src="./js/manage.js"></script>
  <script type="text/javascript" src = "js/getFamilyFormData.js"></script>
  <script type="text/javascript" src = "js/familyData.js"></script>
  <script>
	$(document).ready(function(){
		$('#cow_giving').load('num_rows.php').show();
	});
$(document).ready(function(){
    $('#sector').on('change',function(){
        var sectorName = $(this).val();
        if(sectorName){
            $.ajax({
                type:'POST',
                url:'haveCow_FetchData.php',
                data:'sector='+sectorName,
                success:function(html){
                    $('#cell').html(html);
                    $('#village').html('<option value="">Select cell first</option>'); 
                }
            }); 
        }else{
            $('#cell').html('<option value="">Select sector first</option>');
            $('#village').html('<option value="">Select cell first</option>'); 
        }
    });
    
    $('#cell').on('change',function(){
        var cellName = $(this).val();
        if(cellName){
            $.ajax({
                type:'POST',
                url:'haveCow_FetchData.php',
                data:'cell='+cellName,
                success:function(html){
                    $('#village').html(html);

                }
            }); 
        }else{
            $('#village').html('<option value="">Select cell first</option>'); 
        }
    });

    $('#village').on('change',function(){
    $("#form_data").show();	
    $("#fname").val("") ;
		$("#lname").val("");
		$("#id_no").val("");
		$("#cow_id").val("");
		$("#form_data").show(); 

		var cell = $("#cell").val();
		var village = $("#village").val();

   		// var dataString = cell+village;    
    
    	//console.log(dataString);
		$.ajax({
			url: 'getFamilyFormData.php',
			dataType: "json",
			type:'POST',
			data:{
				cell:cell, village:village
			  }, 
			cache: false,
			success: function(fmlyFormData) {
			   if(fmlyFormData) {
					$("#form_data").show();		
					$("#id_no").val(fmlyFormData.id_no);
          $("#fname").val(fmlyFormData.fname);		
					$("#lname").val(fmlyFormData.lname);				
					$("#cow_id").val(fmlyFormData.cow_id);	
				} 
	
			} 
			
    });
  });
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
        <i><img style = "border-radius:8px" src = "images/girinka.jpg" height = "50" width = "50"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Girinka Munyarwanda</div>
      </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="dashboard.php">
    <i class="fas fa-fw fa-home"></i>
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
<h6 class="collapse-header">Families Management:</h6>
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

</ul>
    <!-- End of Sidebar -->

<?php

//include('side_bar.php');
?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <?php
        include('nav_bar.php');
      ?>
      <!-- End of Topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h5 class="h5 mb-0 text-gray-800">Make family having a cow form</h5>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->

        <div class="row">

          <!-- Area Chart -->
          <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
            <div class="container box">


   <br />
    <div class="row">
      <div class="col-md-12 mx-auto">
				<div class="card" style="box-shadow:0 0 25px 0 lightblue;">
				  <div class="card-header" style = "background-color:lightblue">
				   	<h5 style = "margin-left:5px; font-weight:bold">Filter Family Based on Residence</h5>
				  </div>
				  <div class="card-body" style = "margin-left:10px">
					  <div class="row"style = "justify-content:center">				  		
						  <div class="col-sm-3" style = "margin-left:10px">
              <form id="filter_form" onsubmit="return false">	
                        <?php
                        //Include database configuration file
                        //db details
                        $dbHost = 'localhost';
                        $dbUsername = 'root';
                        $dbPassword = '';
                        $dbName = 'girinka';
                        
                        //Connect and select the database
                        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
                        
                        if ($db->connect_error) {
                            die("Connection failed: " . $db->connect_error);
                        }
              
              
                        //Get all sector data
                        $query = $db->query("SELECT DISTINCT sector FROM  families WHERE status = 1 ORDER BY sector ASC");
                        
                        //Count total number of rows
                        $rowCount = $query->num_rows;
                        ?>
                        <div class="form-group">
                        <label for = "sector">Sector: </label>
                        <select name="sector" id="sector" class = "form-control">
                            <option value="">Select sector</option>
                        <?php
                            if($rowCount > 0){
                                while($row = $query->fetch_assoc()){ 
                                    echo '<option value="'.$row['sector'].'">'.$row['sector'].'</option>';
                                }
                            }else{
                                echo '<option value="">Sector not available</option>';
                            }
                        ?>
                        </select>
                        <small id="sector_error" class="form-text text-muted"></small>
                        </div>

                        </div>
                      
                        <div class="col-sm-3" style = "margin-left:10px">
                          <div class="form-group row">						 
                          <label for = "cell">Cell: </label>
                            <select  class="form-control" name = "cell" id = "cell">
                              <option value="" selected="selected">--Select Cell--</option>
                              <?php echo $cell; ?>	            
                            </select>								
                          </div>
                        </div>
                        <div class="col-sm-3" style = "margin-left:10px">
                          <div class="form-group row">						 
                          
                            
                            </select>	
                            <label for = "village">Village: </label>
                            <select  class="form-control" name = "village" id = "village">
                              <option value="" selected="selected">--Select Village--</option>
                            </select>
                      
                          <!--  <input type = "text" name = "id_no" id = "filter_village" class = "form-control" required readOnly>	-->
                          
                        </div>
                        </div>
                        <br>
                        <div class = "col-sm-2" style = "margin-left:10px">					 
                              <div class="form-group row">
                                <!-- <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button> -->
                      </form>
                    </div>
              </div>          
            </div>
            <br>
					</div>
        </div>
      </div>
    </div>
    <div id = "form_data" onsubmit="return false">

      <div class="row" >
        <div class="col-md-12 mx-auto"> 
          <form id="serve_form" onsubmit="return false">	
          <div class="card" style="box-shadow:0 0 25px 0 lightblue;">
            <div class="card-header" style = "background-color:lightblue">
              <h5 style = "margin-left:5px">Serving a family a cow</h5>
              </div>
              <div class="card-body" style = "margin-left:10px">
                      <div class="row"style = "justify-content:center">	 
                       		  		
                           
                              <?php
                                $user_id = $_SESSION['userid'];
                              ?>
                              <input type="hidden" class="form-control" name="userid" id="userid" value = "<?= $user_id; ?>">
                              <!-- <label>Date & Time</label> -->
                              <input type="hidden" class="form-control" name="date" id="date" aria-describedby="dateHelp" value="<?php echo date("Y-m-d h:m:s"); ?>" readonly/>
                              <small id="date_error" class="form-text text-muted"></small>

                            <div class="col-sm-3" style = "margin-left:10px">
                              <div class="form-group row">
                                <label for = "fname">ID No: </label>
                                <input type = "text" name="serv_id_no" id="id_no" class="form-control" required readOnly>	
                                <small id="id_no_error" class="form-text text-muted"></small>		
                              </div>
                            </div>

                            <div class="col-sm-3" style = "margin-left:10px">
                              <div class="form-group row">						 
                              <label for = "fname">Fname: </label>
                                <input type = "text" name="fname" id="fname" class="form-control"  required readOnly>		
                                <small id="fname_error" class="form-text text-muted"></small>								
                              </div>
                            </div>
                            <div class="col-sm-2" style = "margin-left:10px">
                              <div class="form-group row">						 
                                 <label for = "fname">Lname: </label>
                                <input type = "text" name="lname" id="lname" class="form-control" required readOnly>		
                                <small id="lname_error" class="form-text text-muted"></small>			
                              </div>
                            </div>

                          <div class="col-sm-1" style = "margin-left:10px">
                            <div class="form-group row">						 
                                <label for = "fname">Cow ID: </label>
                              <input type = "text" name="cow_id" id="cow_id" class="form-control" required readOnly>
                              <small id="c_id_error" class="form-text text-muted"></small>			
                            </div>
                          </div>

                          <div class="col-sm-2" style = "margin-left:10px">					 
                            <div class="form-group row"><br>
                             <button type="submit" class="btn btn-primary">Serve</button>
                            </div>
                          </div>
                        </form>          
                      </div>
                  <br>

              </div>

          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12"></div>
   </div>
<!--    <div class="table-responsive">
    <table id="family_data" class="table table-bordered table-striped">
     <thead>
      <tr>
      <th width="10%">ID. No.</th>
       <th width="20%">FirstName</th>
       <th width="15%">LastName</th>
       <th width="10%">Sex</th>
       <th width="5%">Contact</th>
       <th width="10%">Sector</th>
       <th width="15%">Cell</th>
       <th width="15%">Village</th>
       <th width="10%">Status</th>
      </tr>
     </thead>
    </table>
    </div> -->
  </div>
  </div>
  </div>

  </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php
      include('footer.php');
    ?>
    <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->

<?php
  include('scroll_to_top.php');
?>

<!-- Logout Modal-->

<?php
  include('logout_modal.php');
?>
 </body>

 <script src = "js/getFamilyFormData.js"></script>
	</div>

 
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<?php

//Family form
include_once("./templates/family.php");
 
//Cow Form
include_once("./templates/cow.php");

//Doner Form
include_once("./templates/doner.php");

 ?>
</body>

</html>
