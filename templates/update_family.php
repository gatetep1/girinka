
<script type="text/javascript">


$(document).ready(function(){


    $('#update_sector').on('change',function(){
        var sectorCODE = $(this).val();
        if(sectorCODE){
            $.ajax({
                type:'POST',
                url:'famResidentInfo.php',
                data:'sector_code='+sectorCODE,
                success:function(html){
                    $('#update_cell').html(html);
                    $('#update_village').html('<option value="">Select cell first</option>'); 
                }
            }); 
        }else{
            $('#update_cell').html('<option value="">Select sector first</option>');
            $('#update_village').html('<option value="">Select cell first</option>'); 
        }
    });
    
    $('#update_cell').on('change',function(){
        var cellCODE = $(this).val();
        if(cellCODE){
            $.ajax({
                type:'POST',
                url:'famResidentInfo.php',
                data:'cell_code='+cellCODE,
                success:function(html){
                    $('#update_village').html(html);
                }
            }); 
        }else{
            $('#update_village').html('<option value="">Select cell first</option>'); 
        }
    });
});
</script>

<!-- Modal -->
<div class="modal fade" id="update_form_family" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Update Family Info</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="update_family_form" name = "updateFamily" onsubmit="return false">

          <div class="form-group">

          <?php
          $user_id = $_SESSION['userid'];
          ?>

             <input type="hidden" class="form-control" name="userid" id="userid" value = "<?= $user_id; ?>">
              <!-- <label>Date & Time</label> -->
              <input type="hidden" class="form-control" name="update_date" id="date" aria-describedby="dateHelp" value="<?php echo date("Y-m-d h:m:s"); ?>" readonly/>
              <small id="date_error" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label>Nat. ID No.: </label>
            <input type="hidden" class="form-control" name="id" id="id" aria-describedby="idNoHelp" placeholder="Enter Family Leader ID. No">
            <input type="text" class="form-control" name="update_id_no" id="update_id_no" aria-describedby="idNoHelp" placeholder="Enter Family Leader ID. No">
            <small id="id_no_error" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
          <label>Firstname: </label>
            <input type="text" class="form-control" name="update_fname" id="update_fname" aria-describedby="fnameHelp" placeholder="Enter Firstname">
            <small id="fname_error" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for= "lastname">Lastname: </label>
            <input type="text" class="form-control" name="update_lname" id="update_lname" aria-describedby="fnameHelp" placeholder="Enter Lastname">
            <small id="lname_error" class="form-text text-muted"></small>
          </div>

 

          <div class="form-group">
		            <label for="fSex">Sex</label>
		            <select name="update_sex" class="form-control" id="update_sex">
		            <!-- <option value="">Choose Sex</option> -->
		              <option value="Female">Female</option>
		              <option value="Male">Male</option>
		            </select>
		            <small id="sex_error" class="form-text text-muted"></small>
		      </div>


          
          <div class="form-group">
            <label for= "phone">Phone: </label>
            <input type="text" class="form-control" name="update_phone" id="update_phone" aria-describedby="phoneHelp" placeholder="Enter Phone Number">
            <small id="phone_error" class="form-text text-muted"></small>
          </div>    

          <?php
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
              <select name="update_sector" id="update_sector" class = "form-control">
                  <!-- <option value="" >Select sector</option> -->
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
            <label for="cell">Cell</label>
            <select class="form-control" name="update_cell" id="update_cell" >
                
            </select>

          </div>

          <div class="form-group">
            <label for="village">Village</label>
            
            <select class="form-control" name="update_village" id="update_village" >
                
            </select> 

          </div>

          <div class="form-group">
            <button type="submit" name = "updateFamily" class="btn btn-primary">Save Changes</button>
          </div>
          </form>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>          
          </div>
        </div>
      <div>     
    </div>
  </div>
</div>