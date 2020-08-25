<?php
include('side_bar.php');
?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <?php
        include('nav_bar.php');
      ?>
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
		      <h5 class="h5 mb-0 text-gray-800">The Registered Families</h5>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
      </div>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Families Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nat. ID No.</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <!--  <th>Sex</th>
                      <th>Phone</th> -->
                      <th>Sector</th>
                      <th>Cell</th>
                      <th>Village</th>
                      <!-- <th>Date</th>  -->
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="">
                    <?php
                    
                    include("dbConfig.php");
                              
                    $sql = "SELECT * FROM families";
                    $resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($conn));

                    while( $row = mysqli_fetch_assoc($resultset) ) {

                      $status = $row["status"] ;
                      if($status == 0){
                        $status = "Served...";
                      }
                      else{

                        $status = "Pending";
                      }

                      ?>
                        <tr>
                          <td><?php echo $row["id_no"]; ?></td>
                          <td><?php echo $row["fname"]; ?></td>
                          <td><?php echo $row["lname"]; ?></td>
                          <td><?php echo $row["sector"]; ?></td>
                          <td><?php echo $row["cell"]; ?></td>
                          <td><?php echo $row["village"]; ?></td>
                          <!-- <td><?php // echo $row["date"]; ?></td>  -->
                          <td><?php echo $status; ?></td>
                          <td>
                            <a href="#" eid="<?php echo $row['id_no']; ?>" data-toggle="modal" data-target="#update_form_family" class="btn btn-info btn-sm edit_family">Edit</a>
                            <a href="#" did="<?php echo $row['id_no']; ?>" class="btn btn-danger btn-sm del_family">Delete</a>
                          </td>
                        </tr>
                      <?php
                    }
                    ?>
                  </tbody>
		            </table>
             </div>
            </div>
        </div>
  </div>
  <!-- Logout Modal-->
    <!-- Footer -->
    <?php
      include('footer.php');
    ?>
    <!-- End of Footer -->
    <?php
      include('logout_modal.php');

      include_once("./templates/update_family.php");
    
    ?>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->



  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->

<?php
  include('scroll_to_top.php');
?>



  <!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>


<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>