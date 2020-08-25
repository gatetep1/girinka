<?php
	
class DBOperation
{
	
	private $con;

	function __construct()
	{
		include_once("../database/db.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	//Inserting doner into database.
	public function addDoner($name,$sector,$description,$date)
	{
		
		$pre_stmt = $this->con->prepare("INSERT INTO `doners`(`name`, `sector`, `description`, `date`)
		 VALUES (?,?,?,?)");
		 
		$pre_stmt->bind_param("ssss",$name,$sector,$description,$date);
		$result = $pre_stmt->execute() or die($this->con->error);
		
		if ($result) {
			
			//Capture history on new doner registration
			$userid = $_POST['userid'];
			$data = $name. ' Doner Added';
			$issue_date = date("Y-m-d h:m:s");
			$pre_stmt = $this->con->prepare("INSERT INTO `history`(`user_id`, `data`, `date`)
			VALUES (?,?,?)");		
			$pre_stmt->bind_param("sss",$userid, $data, $issue_date);
			$pre_stmt->execute() or die($this->con->error);

			return "NEW_DONER_ADDED";
		}else{
			return 0;
		}

	}

	public function addCow($don_id,$ctype,$sex,$date)
	{
		$pre_stmt = $this->con->prepare("INSERT INTO `cows`(`don_id`, `ctype`, `sex`, `date`)
		 VALUES (?,?,?,?)");
		$status = 1;
		$pre_stmt->bind_param("isss",$don_id,$ctype,$sex,$date);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {

			//Capture history on new cow registration
			$userid = $_POST['userid'];
			$data = $sex. 'of '.$ctype.' as a New Cow Added';
			$issue_date = date("Y-m-d h:m:s");
			$pre_stmt = $this->con->prepare("INSERT INTO `history`(`user_id`, `data`, `date`)
			VALUES (?,?,?)");		
			$pre_stmt->bind_param("sss",$userid, $data, $issue_date);
			$pre_stmt->execute() or die($this->con->error);
			return "NEW_COW_ADDED";
		}
		else
		
		{
			return 0;
		}

	}
//--------------Adding new family function------------------

	public function addFamily($id_no, $fname, $lname, $sex, $phone, $sector, $cell, $village, $date)
	{
		$pre_stmt = $this->con->prepare("INSERT INTO `families`(`id_no`, `fname`, `lname`, `sex`, `phone`, `sector`, `cell`, `village`, `date`, `status`)
		VALUES (?,?,?,?,?,?,?,?,?,?)");
		$status = 1;
		$pre_stmt->bind_param("sssssssssi",$id_no, $fname, $lname, $sex, $phone, $sector, $cell, $village, $date, $status);
		$result = $pre_stmt->execute() or die($this->con->error);
		
		if ($result)
		{

			//Capture history on new family registration
			$userid = $_POST['userid'];
			$data = 'New family with ID No. of '. $id_no. ' Added';
			$issue_date = date("Y-m-d h:m:s");
			$pre_stmt = $this->con->prepare("INSERT INTO `history`(`user_id`, `data`, `date`)
			VALUES (?,?,?)");		
			$pre_stmt->bind_param("sss",$userid, $data, $issue_date);
			$pre_stmt->execute() or die($this->con->error);

			return "NEW_FAMILY_ADDED";
		}

		else
		
		{
			return 0;
		} 

	}



	public function getAllRecord($table){
		$pre_stmt = $this->con->prepare("SELECT * FROM ".$table);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		$rows = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}
		return "NO_DATA";
	}

//--------------Giving a cow to the new family function------------------

	public function serveFamily($id_no, $cow_id, $date)
	{
		$pre_stmt = $this->con->prepare("INSERT INTO `transactions`(`nat_id_no`, `cow_id`, `date`)
		VALUES (?,?,?)");
		$status = 1;
		$pre_stmt->bind_param("sis",$id_no, $cow_id, $date);
		$result = $pre_stmt->execute() or die($this->con->error);
		
		if ($result)
		{

			//Capture history on serving family data
			$userid = $_POST['userid'];
			$data = 'New family with ID No. of '. $id_no. ' Served Successfully';
			$issue_date = date("Y-m-d h:m:s");
			$pre_stmt = $this->con->prepare("INSERT INTO `history`(`user_id`, `data`, `date`)
			VALUES (?,?,?)");		
			$pre_stmt->bind_param("sss",$userid, $data, $issue_date);
			$pre_stmt->execute() or die($this->con->error);
			
			// ---------Updating family data ---------
			
			$m = new Manage();
			$result = $m->update_record("families",["id_no"=>$id_no],["status"=>"0"]);
			$result = $m->update_record("cows",["cow_id"=>$cow_id],["status"=>"0"]);

			return "NEW_FAMILY_SERVED";
		}

		else
		
		{
			return 0;
		} 

	}

}


?>