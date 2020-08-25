<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'girinka');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli -> connect_error){
  die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = "SELECT sector, COUNT(*) AS sum FROM families  WHERE status = '0' GROUP BY sector";

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
while($row = $result->fetch_array()) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
?>