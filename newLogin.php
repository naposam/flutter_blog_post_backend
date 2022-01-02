<?php

require_once 'conn.php';
$username=strip_tags($_POST["username"]);		
$password=strip_tags($_POST["password"]);
$userData=array();			
$stmt=$conn->prepare("SELECT * FROM users WHERE username=:uname and password=:password"); 
$stmt->execute(array(':uname'=>$username, ':password'=>$password));
		//$row=$stmt->fetch();
if($stmt->rowCount() > 0){
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
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

			}else{
				echo json_encode("Error");
			}
?>