<?php
include_once("DBOperation.php");
include_once("user.php");
include_once("manage.php");


//For Registration Processsing
if (isset($_POST["fullname"]) AND isset($_POST["email"])) {
	$user = new User();
	$result = $user->createUserAccount($_POST["fullname"],$_POST["email"],$_POST["password1"],$_POST["usertype"]);
	echo $result;
	exit();
}

//For Login Processing
if (isset($_POST["log_email"]) AND isset($_POST["log_password"])) {
	$user = new User();
	$result = $user->userLogin($_POST["log_email"],$_POST["log_password"]);
	echo $result;
	exit();
}

//Add Doner
if (isset($_POST["name"]) AND isset($_POST["sector"])) {
	$obj = new DBOperation();
	$result = $obj->addDoner($_POST["name"], $_POST["sector"], $_POST["description"], $_POST["date"]);
	echo $result;
	exit();
}

//To get Doner
if (isset($_POST["getDoner"])) {
	$obj = new DBOperation();
	$rows = $obj->getAllRecord("doners");
	foreach ($rows as $row) {
		echo "<option value='".$row["don_id"]."'>".$row["name"]."</option>";
	}
	exit();
}

//Add Cow
if (isset($_POST["ctype"]) AND isset($_POST["don_id"])) {
	$obj = new DBOperation();
	$result = $obj->addCow($_POST["don_id"],$_POST["ctype"],$_POST["sex"], $_POST["date"]);
	echo $result;
	exit();
}

//Add Family
if (isset($_POST["id_no"]) AND isset($_POST["fname"])) {
	$obj = new DBOperation();


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
 

    //Get all cell data
	$sector_code = $_POST["sector"];
	$cell_code = $_POST["cell"];
	$village_code = $_POST["village"];

	$cell_name = '';
    //Get all cell data

    $query = $db->query("SELECT sectors.sector_code, sectors.sector_name, cells.cell_code, cells.cell_name,
	villages.village_code, villages.village_name
	FROM sectors, cells, villages WHERE sectors.sector_code = '$sector_code' AND cells.cell_code = '$cell_code' AND
	villages.village_code = '$village_code'");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){

        while($row = $query->fetch_assoc()){ 

			$sector_name = $row["sector_name"];
			$cell_name = $row['cell_name'];
			$village_name = $row["village_name"];

        }

     }else{
       
    }


	$result = $obj->addFamily($_POST["id_no"], $_POST["fname"], $_POST["lname"], $_POST["sex"], $_POST["phone"], $sector_name, $cell_name, $village_name, $_POST["date"]);
	echo $result;
	exit();
}

//To get Family to the Doner within by pass drop-down
if (isset($_POST["getFamily"])) {
	$obj = new DBOperation();
	$rows = $obj->getAllRecord("families");
	foreach ($rows as $row) {
		echo "<option value='".$row["id_no"]."'>".$row["id_no"]." ".$row["fname"]." ".$row["lname"]. "</option>";
	}
	exit();
}

//----------------------------Delete  family-------------------------------------
if (isset($_POST["deleteFamily"])) {
	$m = new Manage();
	$result = $m->deleteRecord("families","id_no",$_POST["id"]);
	echo $result;
}

//-------------Update family-------------------------
// Getting record into a form
if (isset($_POST["updateFamily"])) {	
	$m = new Manage();
	$result = $m->getSingleRecord("families","id_no",$_POST["id"]);
	echo json_encode($result);
	exit();
}
	
//Update Record after getting data
if (isset($_POST["update_id_no"])) {
	$m = new Manage();
	$id = $_POST["id"];
	$id_no = $_POST["update_id_no"];
	$fname = $_POST["update_fname"];
	$lname = $_POST["update_lname"];
	$sex= $_POST["update_sex"];
	$phone = $_POST["update_phone"];

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
	

	//Get all cell data
	$sector_code = $_POST["update_sector"];
	$cell_code = $_POST["update_cell"];
	$village_code = $_POST["update_village"];

	//Get all cell data

	$query = $db->query("SELECT sectors.sector_code, sectors.sector_name, cells.cell_code, cells.cell_name,
	villages.village_code, villages.village_name
	FROM sectors, cells, villages WHERE sectors.sector_code = '$sector_code' AND cells.cell_code = '$cell_code' AND
	villages.village_code = '$village_code'");
		
	//Count total number of rows
	$rowCount = $query->num_rows;
		
 	//Display states list
			$sector = $_POST["update_sector"];
			$cell =  $_POST['update_cell'];
			$village = $_POST["update_village"];
	if($rowCount > 0){

		while($row = $query->fetch_assoc()){ 

			$sector = $row["sector_name"];
			$cell =  $row['cell_name'];
			$village = $row["village_name"];

		}



	}

	$date = $_POST["update_date"];
	$result = $m->update_record("families",["id"=>$id],["id_no"=>$id_no,"fname"=>$fname,"lname"=>$lname,"sex"=>$sex,"phone"=>$phone,"sector"=>$sector,"cell"=>$cell,"village"=>$village,"date"=>$date]);
	echo $result;
}


//------------Delete  cow--------------------

if (isset($_POST["deleteCow"])) {
	$m = new Manage();
	$result = $m->deleteRecord("cows","cow_id",$_POST["id"]);
	echo $result;
}

//-------------Update cow-------------------------
	// Getting record into a form
	if (isset($_POST["updateCow"])) {
		$m = new Manage();
		$result = $m->getSingleRecord("cows","cow_id",$_POST["id"]);
		echo json_encode($result);
		exit();
	}
	
//Update Record after getting data
if (isset($_POST["update_ctype"])) {
	$m = new Manage();
	$id = $_POST["update_cow_id"];
	$don_id = $_POST["update_don_id"];
	$ctype = $_POST["update_ctype"];
	$sex = $_POST["update_csex"];
	$date = $_POST["update_cdate"];
	$result = $m->update_record("cows",["cow_id"=>$id],["ctype"=>$ctype,"sex"=>$sex,"don_id"=>$don_id, "date"=>$date]);

	echo $result;
}



//-------------Delete doner------------------------

if (isset($_POST["deleteDoner"])) {
	$m = new Manage();
	$result = $m->deleteRecord("doners","don_id",$_POST["id"]);
	echo $result;
}

//-------------Update doner-------------------------
	// Getting record into a form
if (isset($_POST["updateDoner"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("doners","don_id",$_POST["id"]);
	echo json_encode($result);
	exit();
}

//Update Record after getting data
if (isset($_POST["update_name"])) {
	$m = new Manage();
	$id = $_POST["don_id"];
	$name = $_POST["update_name"];
	$sector = $_POST["update_sector"];
	$description = $_POST["update_description"];
	$date = $_POST["update_date"];
	$result = $m->update_record("doners",["don_id"=>$id],["name"=>$name,"sector"=>$sector,"description"=>$description,"date"=>$date]);
	echo $result;
}

//Get ID number of a Family Holder

if (isset($_POST["getFamily"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("families","id_no",$_POST["id"]);
	echo json_encode($result);
	exit();
}




// --------- Serve a Family ---------

if (isset($_POST["serv_id_no"]) AND isset($_POST["cow_id"])) {
	$obj = new DBOperation();
	$result = $obj->serveFamily($_POST["serv_id_no"], $_POST["cow_id"], $_POST["date"]);
	echo $result;
	
	exit();
}


?>