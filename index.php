<?php
class Post{
	private $conn;
	private $table ='users';

	public $id;
	public $fullname;
	public $username;
	public $status;
	public $password;

 public function __construct($db)
	{
		$this->conn = $db;
	}

	public function read(){
		$query="SELECT * from users";

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}


}
 
?>