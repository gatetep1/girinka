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
          <!-- End of Topbar -->

                  <!-- Begin Page Content -->
                  <div class="container-fluid">

    <!-- DataTales -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Log Activities Table</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Date</th>
              <th>Log activity</th>
              <th>User</th>
              <th>Activity ID</th>
            </tr>
          </thead>
          <tbody>
        <?php
          include("dbConfig.php");
               
          $sql = "SELECT h.hist_id AS hist_id, h.user_id AS user_id, h.data AS activity_log, h.date AS activity_date, u.user_id AS user_id, u.fullname AS fullname FROM history h, users u WHERE h.user_id = u.user_id";

          $resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($conn));
        
          while( $row = mysqli_fetch_assoc($resultset) ) {

            ?>
              <tr>
                <td><?php echo $row["activity_date"]; ?></td>
                <td><?php echo $row["activity_log"]; ?></td>
                <td><?php echo $row["fullname"]; ?></td>
                <td><?php echo $row["hist_id"]; ?></td>
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
