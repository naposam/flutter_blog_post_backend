<?php

class Database 
{
	private $host='localhost';
	private $user='root';
	private $pass='';
	private $db='flutterblog';
	private $conn;

	public function connect()
	{
		$this->conn =null;
		try {
			$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db,$this->user,$this->pass);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			
		} catch (Exception $e) {
			echo "Connection Error".$e->getMessage();
			
		}
		return $this->conn;
		
	}
}

?>