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
  
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
  
            <!-- Content Row -->
            <div class="row">
  
              <!-- Doners Card  -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Registered Donors</div>
                        <div id = 'doners' class="h5 mb-0 font-weight-bold text-gray-800"><span id = 'all_dns'></span></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Given Cows</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><span id = 'given_cws'> </span> of <span id = 'all_cws'></span></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Family Card  -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Served Families</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span id = 'served_fmly'> </span> of
                            <span id = 'all_fmly'></span></div>
                          </div>

                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Users Card  -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Active Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><span id = 'active_usrs'> </span> of <span id = 'all_usrs'></span></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Content Row -->
  
            <div class="row">
  
              <!-- Area Chart -->
              <div class="col-xl-9 col-lg-7">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Summary of Girinka program status per sector</h6>
                    <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="myAreaChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Pie Chart -->
                          <!-- Pie Chart -->
                <div class="col-xl-3 col-lg-5">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Time at Rulindo</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <div class="time pt-4 pb-2">
                    <div class="col-sm-6">
							<iframe src="http://free.timeanddate.com/clock/i67nqfuy/n119/szw160/szh160/hoc900/hbw40/hfc000/cf100/hnce1ead6/hwc000/hccfff/hcw2/fiv0/fan2/fas20/facfff/fdi60/mqc0f9/mqs4/mql10/mqw8/mqd74/mhc9f9/mhs4/mhl30/mhw1/mhd90/mmc9f9/mml4/mmw2/mmd74/hwm2/hhcfff/hhs1/hhw4/hhr19/hmcfff/hms1/hmw3/hmr20/hscfff/hss2/hsw4/hsr15" frameborder="0" width="300" height="300"></iframe>
						</div>
                    </div>
                    <div class="mt-4 text-center small">
                      <span class="mr-2">
                        <i class="fas fa-circle text-information"></i> Rulindo Time
                      </span>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Content Row -->
            <div class="row">
  
              <!-- Content Column -->
              <div class="col-lg-6 mb-4">
  
                <!-- Project Card Example 

  
                <!-- Color System -->
  
          </div>
          <!-- /.container-fluid -->
  
        </div>
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
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/graph.js"></script>


    <script>
 $(document).ready(function(){
   $("#served_fmly").load( "dash_counts.php #served_families");
   $("#all_fmly").load( "dash_counts.php #all_families");

   $("#given_cws").load( "dash_counts.php #given_cows");
   $("#all_cws").load( "dash_counts.php #all_cows");

   $("#active_usrs").load( "dash_counts.php #active_users");
   $("#all_usrs").load( "dash_counts.php #all_users");

   $("#all_dns").load( "dash_counts.php #all_doners");
 });
</script>

  </body>
  
</html>
  
