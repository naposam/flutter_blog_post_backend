<?php

include ("connection.php");
$comment=$_POST['comment'];
$user_name=$_POST['username'];
$curDate= date('d/m/Y');
$post_id=$_POST['post_id'];
// $db->query("");

$sql= $db->query("SELECT * FROM post_table WHERE id='$post_id'");
//$count=mysqli_num_rows($sql);
if($sql){
	$data=mysqli_fetch_array($sql);
	$sum= $data['comment']+1;
	$db->query("INSERT INTO comments(comment,username,post_id,comment_date)VALUES('$comment','$user_name','$post_id','$curDate')");
	$db->query("UPDATE post_table SET comment='$sum' WHERE id ='$post_id'");
}
	


?>