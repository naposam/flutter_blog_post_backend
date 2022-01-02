<?php
require("conn.php");

$query="SELECT * FROM users";

$stm=$conn->prepare($query);
$stm->execute();
$userData=array();

while($row=$stm->fetch()){
	array_push(
		$userData,array(
			'id'=>$row["id"],
			'fullname'=>$row["fullname"],
			'username'=>$row["username"],
			'status'=>$row["status"],
			'password'=>$row["password"],
		)
	);
}

echo json_encode($userData);

?>