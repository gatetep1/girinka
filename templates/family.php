<script type="text/javascript">
$(document).ready(function(){
    $('#sector').on('change',function(){
        var sectorCODE = $(this).val();
        if(sectorCODE){
            $.ajax({
                type:'POST',
                url:'famResidentInfo.php',
                data:'sector_code='+sectorCODE,
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
        var cellCODE = $(this).val();
        if(cellCODE){
            $.ajax({
                type:'POST',
                url:'famResidentInfo.php',
                data:'cell_code='+cellCODE,
                success:function(html){
                    $('#village').html(html);
                }
            }); 
        }else{
            $('#village').html('<option value="">Select cell first</option>'); 
        }
    });
});
</script>

<?php
    include("csv.php");
    $csv = new csv();
    if(isset($_POST['sub']))
    {
        $csv ->import($_FILES['file']['tmp_name']);
    }
?>

<!-- Modal -->
<div class="modal fade" id="form_family" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Family Registration Form</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
		      <label for="capture_family_info">Capture Family Info by:</label>
		      <select name="#" class="form-control" id="select_capture_family_form_info">
            <option value="">Choose the way of adding family Info</option>
            <option value="filling_form">Filling a Form</option>
		        <option value="csv_file">Loading CSV File</option>
		      </select>
		      <small id="select_donerSector_error" class="form-text text-muted"></small>
		    </div>
           



        <div id = 'new_family_form'>

          <form id="family_form" onsubmit="return false">

            <div class="form-group">
              <?php
              $user_id = $_SESSION['userid'];
              ?>

                <input type="hidden" class="form-control" name="userid" id="userid" value = "<?= $user_id; ?>">
                  <!-- <label>Date & Time</label> -->
                  <input type="hidden" class="form-control" name="date" id="date" aria-describedby="dateHelp" value="<?php echo date("Y-m-d h:m:s"); ?>" readonly/>
                  <small id="date_error" class="form-text text-muted"></small>
            </div>

              <div class="form-group">
                <label>Nat. ID No.: </label>
                <input type="text" class="form-control" name="id_no" id="id_no" aria-describedby="idNoHelp" placeholder="Enter Family Leader ID. No">
                <small id="id_no_error" class="form-text text-muted"></small>
              </div>

              <div class="form-group">
                <label>Firstname: </label>
                <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fnameHelp" placeholder="Enter Firstname">
                <small id="fname_error" class="form-text text-muted"></small>
              </div>

              <div class="form-group">
                <label>Lastname: </label>
                <input type="text" class="form-control" name="lname" id="lname" aria-describedby="fnameHelp" placeholder="Enter Lastname">
                <small id="lname_error" class="form-text text-muted"></small>
              </div>

              <div class="form-group">
                  <label for="donerSector">Sex</label>
                  <select name="sex" class="form-control" id="sex">
                    <option value="">Choose Sex</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                  </select>
                  <small id="sex_error" class="form-text text-muted"></small>
              </div>     

              <div class="form-group">
                <label for = "phone">Phone: </label>
                <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phoneHelp" placeholder="Enter Phone Number">
                <small id="phone_error" class="form-text text-muted"></small>
              </div>       
              
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
              $query = $db->query("SELECT * FROM sectors WHERE status = 1 ORDER BY sector_name ASC");
              
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
                          echo '<option value="'.$row['sector_code'].'">'.$row['sector_name'].'</option>';
                      }
                  }else{
                      echo '<option value="">Sector not available</option>';
                  }
              ?>
              </select>
              <small id="sector_error" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
              <label for = "cell">Cell: </label>
              <select name="cell" id="cell" class = "form-control">
                  <option value="">Select sector first</option>
              </select>
              <small id="cell_error" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
              <label for = "village">Village: </label>
              <select name="village" id="village" class = "form-control"> 
                  <option value="">Select cell first</option>
              </select>
              <small id="village_error" class="form-text text-muted"></small>
              </div>


              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div>
        <div id = "load_csv_file_form">
          <form method="post" enctype="multipart/form-data">
           <div class="form-group">   
             <label for="cell">CSV File: </label>
             <input type="file" class="form-control" name="file" id="fileToUpload">
             
            </div>
 
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name = "sub">Import</button>

            </div>      
          </form>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>          

    </div>
  </div>  
</div>