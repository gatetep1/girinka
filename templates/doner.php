<!-- Modal -->
<div class="modal fade" id="form_doner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Doner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="doner_form" onsubmit="return false">
          <div class="form-group">
          <?php
          $user_id = $_SESSION['userid'];
          ?>

             <input type="hidden" class="form-control" name="userid" id="userid" value = "<?= $user_id; ?>">

            <label>Doner Name</label>
            <input type="text" class="form-control" name="name" id="doner_name" placeholder="Enter Doner Name">
            <small id="doner_name_error" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
		            <label for="donerSector">Doner Sector</label>
		            <select name="sector" class="form-control" id="select_donerSector">
		              <option value="">Choose Doner Sector</option>
		              <option value="Public">Public</option>
		              <option value="Private">Private</option>
		            </select>
		            <small id="select_donerSector_error" class="form-text text-muted"></small>
		      </div>

          <div class="form-group">
            <label>Doner Description</label>
            <textarea  rows = "3" class = "form-control" name = "description" id = "doner_description" Placeholder = "Enter Doner Description"></textarea>
            <small id="doner_description_error" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
           <!--  <label>Date</label> -->
            <input type="hidden" class="form-control" name="date" id="date" value="<?php echo date("Y-m-d h:m:s"); ?>" readonly/>
            <small id="date_error" class="form-text text-muted"></small>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src = "js/by_pass_info.js"></script>