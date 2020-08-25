<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "girinka";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$cell = $_POST['cell']; 
$village = $_POST['village'];
if(isset($_POST['cell'], $_POST['village']) && $_POST['cell'] != '' && $_POST['village'] != '')
{
	$sql = "SELECT cows.cow_id, cows.status,  families.id_no, families.fname, families.lname, families.cell, families.village, families.status FROM families, cows WHERE families.cell = '$cell' AND families.village = '$village' AND families.status = '1' AND cows.status = '1' LIMIT 1";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

	$data = array();
	while( $rows = mysqli_fetch_assoc($resultset) ) {

		$data = $rows;

		$cow_id = $rows['cow_id'];

        $cowId_arr[] = array("cow_id" => $cow_id);
	}	
	
	echo json_encode($data);
	}	
	 
else 
{
	echo 0;	
}

?>