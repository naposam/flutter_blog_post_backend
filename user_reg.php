<?php
require_once "conn.php";

	$username	= strip_tags($_POST['username']);	
	$phone_number	= strip_tags($_POST['phone_number']);		
	$password	= strip_tags($_POST['password']);
	$created_date = date('d/m/Y');
	$userData=array();	

$check=$conn->prepare("SELECT username FROM login WHERE username=:uname"); 
$check->execute(array(':uname'=>$username));

// $row=$ckeck->fetch(PDO::FETCH_ASSOC);	
	if($check->rowCount() < 1){	
	$insert_stmt1=$conn->prepare("INSERT INTO usertbl(phone_number,date_created) VALUES(:phone_number,:created_date)");
	$insert_stmt1->execute(array(':phone_number'=>$phone_number,':created_date'=>$created_date));
	$LAST_ID = $conn->lastInsertId();

$insert_stmt=$conn->prepare("INSERT INTO login(uid,username,password) VALUES(:uid,:username,:upassword)"); 						
if($insert_stmt->execute(
	array(
	':uid'=>$LAST_ID, 
	':username'	=>$username, 
	':upassword'=>$password))){
$stmt=$conn->prepare("SELECT login.*,usertbl.* FROM `login` LEFT JOIN usertbl on usertbl.uid=login.uid WHERE username=:uname"); 
$stmt->execute(array(':uname'=>$username));
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	array_push(
		$userData,array(
			'lid'=>$row["lid"],
			'uid'=>$row["uid"],
			'username'=>$row["username"],
			'status'=>$row["status"],
			'password'=>$row["password"],
		)
	);
}
  echo json_encode($userData);
													
				}else{
					echo json_encode("failed");
				}
			}else{
				echo json_encode("Error");
			}
		
	

?>