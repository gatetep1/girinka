
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
 
 if(isset($_POST["sector"]) && !empty($_POST["sector"])){
    //Get all cells data
    $sector = $_POST["sector"];
    $query = $db->query("SELECT DISTINCT cell FROM families WHERE sector = '$sector'  AND status = 1 ORDER BY cell ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cell list
    if($rowCount > 0){
        echo '<option value="">Select cell</option>';
        while($row = $query->fetch_assoc()){ 
            $cell = $row['cell'];
            ?>
            <option value="<?php echo $cell; ?>"><?php echo  $cell ?></option>
            <?php
        }
     }else{
        echo '<option value="">Cell not available</option>';
    }
} 
 
    if(isset($_POST["cell"]) && !empty($_POST["cell"])){
        //Get all cells data
        $cell = $_POST["cell"];
        $query = $db->query("SELECT DISTINCT village FROM families WHERE cell = '$cell' AND status = 1 ORDER BY village ASC");
        
        //Count total number of rows
        $rowCount = $query->num_rows;
        
        //Display cells list
        if($rowCount > 0){
            echo '<option value="">Select Village</option>';
            while($row = $query->fetch_assoc()){ 
                $village = $row['village'];
                ?>
                <option value="<?php echo $village; ?>"><?php echo $village; ?></option>
                <?php
            }
        }
         else{
            echo '<option value="">Village not available</option>';
        }
    }
?>