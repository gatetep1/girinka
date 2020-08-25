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
       <!-- Begin Page Content -->
    <div class="container-fluid">
     <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
		    <h5 class="h5 mb-0 text-gray-800">Serving Operations</h5>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
      </div>
    </div>

      <!-- End of Topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid">

      <!-- DataTales -->
      <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Transactions Table</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Date</th>
                <th>ID No.</th>
                <th>First Name.</th>
                <th>Last Name.</th>
                <th>Cow Id</th>
                <th>Cow Type</th>
                <th>Cow Sex</th>
                <th>Trans. Id</th>
              </tr>
            </thead>
            <tbody id="">
            
            <?php
                
              include("dbConfig.php");                
              $sql = "SELECT c.cow_id AS cow_id, c.sex as sex, c.ctype AS ctype, t.trans_id AS trans_id, t.date AS date, t.cow_id AS cow_id, f.id_no AS id_no, t.nat_id_no AS nat_id_no, f.fname AS fname, f.lname AS lname FROM cows c, transactions t, families f  WHERE t.nat_id_no = f.id_no AND c.cow_id = t.cow_id ";
    
              $resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($conn));
    
              while( $row = mysqli_fetch_assoc($resultset) ) {
    
                ?>
                <tr>
                  <td><?php echo $row["date"]; ?></td>
                  <td><?php echo $row["nat_id_no"]; ?></td>
                  <td><?php echo $row["fname"]; ?></td>
                  <td><?php echo $row["lname"]; ?></td>
                  <td><?php echo $row["cow_id"]; ?></td>
                  <td><?php echo $row["ctype"]; ?></td>
                  <td><?php echo $row["sex"]; ?></td>
                  <td><?php echo $row["trans_id"]; ?></td>
                </tr>
                <?php

              }
            ?>
          </tbody>
		    </table>
	</div>

	<?php
    include_once("./templates/update_cow.php");
	?>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->

    <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->
	<?php
      include('footer.php');
    ?>
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
