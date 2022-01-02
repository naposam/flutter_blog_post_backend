<?php

include ("connection.php");
$user_name=$_POST['username'];
$post_id=$_POST['post_id'];
$curDate= date('d/m/Y');

$result = $db->query("SELECT * FROM post_like WHERE username='$user_name' AND post_id='$post_id'");
$count=mysqli_num_rows($result);
if($count == 1){
	echo json_encode("ONE");
}else{
	echo json_encode("ZERO");
}

?>