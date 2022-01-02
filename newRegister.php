<?php
require_once "conn.php";

	$username	= strip_tags($_POST['username']);	
	$fullname	= strip_tags($_POST['fullname']);		
	$password	= strip_tags($_POST['password']);
	$userData=array();	

$check=$conn->prepare("SELECT username FROM users WHERE username=:uname"); 
$check->execute(array(':uname'=>$username)); 
// $row=$ckeck->fetch(PDO::FETCH_ASSOC);	
	if($check->rowCount() < 1){		
$insert_stmt=$conn->prepare("INSERT INTO users(fullname,username,password) VALUES(:fullname,:username,:upassword)"); 						
if($insert_stmt->execute(
	array(
	':fullname'=>$fullname, 
	':username'	=>$username, 
	':upassword'=>$password))){
$stmt=$conn->prepare("SELECT * FROM users WHERE username=:uname"); 
$stmt->execute(array(':uname'=>$username));
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
					echo json_encode("failed");
				}
			}else{
				echo json_encode("Error");
			}
		
	

?>