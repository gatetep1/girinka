
<!-- Modal -->
<div class="modal fade" id="update_form_cow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Cow Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form id="update_cow_form" onsubmit="return false">
          <div class="form-group">

          <?php
          $user_id = $_SESSION['userid'];
          ?>

             <input type="hidden" class="form-control" name="userid" id="userid" value = "<?= $user_id; ?>">
            <!-- <label>Date & Time</label> -->
            <input type="hidden" class="form-control" name="update_date" id="update_date" aria-describedby="dateHelp" value="<?php echo date("Y-m-d h:m:s"); ?>" readonly/>
            <small id="date_error" class="form-text text-muted"></small>

            <input type="hidden" name="update_cow_id" id="update_cow_id" value=""/>
         </div>

         <div class="form-group">
            <label>Doner</label>

            <select class="form-control" name="update_don_id" id="update_select_doner" >
              

            </select>
            <small id="select_doner_error" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
		            <label for="cowSex">Type of the Cow</label>
		            <select name="update_ctype" class="form-control" id="update_ctype">
		              <option value="">Choose Type of a Cow</option>
		              <option value="Inflizone">Inflizone</option>
		              <option value="Ikimanyi">Ikimanyi</option>
                  <option value="Inyarwanda">Inyarwanda</option>
		            </select>
		            <small id="ctype_error" class="form-text text-muted"></small>

                <input type="hidden" class="form-control" name="update_cdate" id="update_date" value="<?php echo date("Y-m-d h:m:s"); ?>" readonly/>

		      </div>

         <div class="form-group">
		            <label for="cowSex">Sex of the Cow</label>
		            <select name="update_csex" class="form-control" id="update_csex">
		              <option value="">Choose sex of a cow</option>
		              <option value="Heifer">Heifer</option>
		              <option value="Bull">Bull</option>
		            </select>
		            <small id="csex_error" class="form-text text-muted"></small>

                <input type="hidden" class="form-control" name="update_cdate" id="update_date" value="<?php echo date("Y-m-d h:m:s"); ?>" readonly/>

		      </div>
         
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
