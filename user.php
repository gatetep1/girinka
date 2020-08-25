<?php

/*
	 User Class for account creation and login pupose
*/
class User
{
	
	private $con;

	function __construct()
	{
		include_once("../database/DBOperation.php");

	}

	//User is already registered or not
	private function emailExists($email){
		$pre_stmt = $this->con->prepare("SELECT user_id FROM users WHERE email = ? ");
		$pre_stmt->bind_param("s",$email);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		if($result->num_rows > 0){
			return 1;
		}else{
			return 0;
		}
	}

	public function createUserAccount($fullname,$email,$password,$usertype){
		//To protect your application from sql attack you can user 
		//prepares statment
		if ($this->emailExists($email)) {
			return "EMAIL_ALREADY_EXISTS";
		}else{
			$pass_hash = password_hash($password,PASSWORD_BCRYPT,["cost"=>8]);
			$date = date("Y-m-d");
			$pre_stmt = $this->con->prepare("INSERT INTO `users`(`fullname`, `email`, `password`, `usertype`, `register_date`, `last_login`)
			 VALUES (?,?,?,?,?,?)");
			$pre_stmt->bind_param("ssssss",$fullname,$email,$pass_hash,$usertype,$date,$date);
			$result = $pre_stmt->execute() or die($this->con->error);
			if ($result) {
				return $this->con->insert_id;
			}else{
				return "SOME_ERROR";
			}
		}
			
	}


}

?>