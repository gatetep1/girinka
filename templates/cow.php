<!-- Modal -->
<div class="modal fade" id="form_cow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cow registration form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form id="cow_form" onsubmit="return false">
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
            <label>Doner</label>
            <select class="form-control" id="select_doner" name="don_id" />
              

              
            </select>
            <small id="select_doner_error" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
		            <label for="CowType">Type of the Cow</label>
		            <select name="ctype" class="form-control" id="ctype">
		              <option value="">Choose type of a cow</option>
		              <option value="Inflizone">Inflizone</option>
		              <option value="Inyarwanda">Inyarwanda</option>
                  <option value="Ikimanyi">Ikimanyi</option>
		            </select>
		            <small id="ctype_error" class="form-text text-muted"></small>
		      </div>

         <div class="form-group">
		            <label for="donerSector">Sex of the Cow</label>
		            <select name="sex" class="form-control" id="csex">
		              <option value="">Choose sex of a cow</option>
		              <option value="Heifer">Heifer</option>
		              <option value="Bull">Bull</option>
		            </select>
		            <small id="csex_error" class="form-text text-muted"></small>
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