<?php

require_once 'conn.php';
$username=strip_tags($_POST["username"]);		
$password=strip_tags($_POST["password"]);
$userData=array();			
$stmt=$conn->prepare("SELECT login.*,usertbl.* FROM `login` LEFT JOIN usertbl on usertbl.uid=login.uid WHERE username=:uname AND password=:password"); 
$stmt->execute(array(':uname'=>$username, ':password'=>$password));
		//$row=$stmt->fetch();
if($stmt->rowCount() > 0){
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	array_push(
		$userData,array(
			'lid'=>$row["lid"],
			'uid'=>$row["uid"],
			'fname'=>$row["fname"],
			'mname'=>$row["mname"],
			'lname'=>$row["lname"],
			'phone_number'=>$row["phone_number"],
			'jobcate'=>$row["jobcate"],
			'gender'=>$row["gender"],
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