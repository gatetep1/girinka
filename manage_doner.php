<?php

include_once('side_bar.php');
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
		      <h5 class="h5 mb-0 text-gray-800">The Registered Doners</h5>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        </div>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Doners Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>

                    <th>Name</th>
                    <th>Sector</th>
                    <th>Descritption</th>
                    <th>Added Date</th>
                    <th>Action</th>
                    </tr>
                  </thead>
		              <tbody>


                  <?php
                   include("dbConfig.php");
                   
                      $sql = "SELECT * FROM doners";
                      $resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($conn));

                      while( $row = mysqli_fetch_assoc($resultset) ) {

                        ?>
                        <tr>               
                              <td><?php echo $row["name"]; ?></td>
                              <td><?php echo $row["sector"]; ?></td>
                              <td><?php echo $row["description"]; ?></td>
                              <td><?php echo $row["date"]; ?></td>
                              <td>	
                            <a href="#" eid="<?php echo $row['don_id']; ?>" data-toggle="modal" data-target="#update_form_doner" class="btn btn-info btn-sm edit_doner">Edit</a>
                            <a href="#" did="<?php echo $row['don_id']; ?>" class="btn btn-danger btn-sm del_doner">Delete</a>
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
      </div>
<?php
      include('footer.php');
    ?>
	<?php
		include_once("./templates/update_doner.php");
	?>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->

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
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>


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

</body>

</html>
