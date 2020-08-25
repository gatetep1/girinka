
<?php
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
 
if(isset($_POST["sector_code"]) && !empty($_POST["sector_code"])){
    //Get all cells data
    $sector_code = $_POST["sector_code"];
    $query = $db->query("SELECT * FROM cells WHERE sector_code = '$sector_code' AND status = 1 ORDER BY cell_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cell list
    if($rowCount > 0){
        echo '<option value="">Select cell</option>';
        while($row = $query->fetch_assoc()){ 
            $cell_code = $row['cell_code'];
            ?>
            <option value="<?php echo $cell_code; ?>"><?php echo $row['cell_name']; ?></option>
            <?php
        }
     }else{
        echo '<option value="">Cell not available</option>';
    }
}
 
    if(isset($_POST["cell_code"]) && !empty($_POST["cell_code"])){
        //Get all cells data
        $cell_code = $_POST["cell_code"];
        $query = $db->query("SELECT * FROM villages WHERE cell_code = '$cell_code' AND status = 1 ORDER BY village_name ASC");
        
        //Count total number of rows
        $rowCount = $query->num_rows;
        
        //Display cells list
        if($rowCount > 0){
            echo '<option value="">Select Village</option>';
            while($row = $query->fetch_assoc()){ 
                $village_code = $row['village_code'];
                ?>
                <option value="<?php echo $village_code; ?>"><?php echo $row['village_name']; ?></option>
                <?php
            }
        }
         else{
            echo '<option value="">Village not available</option>';
        }
    }
?>