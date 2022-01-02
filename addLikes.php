<?php

include ("connection.php");
$user_name=$_POST['username'];
$post_id=$_POST['post_id'];
$curDate= date('d/m/Y');

$result = $db->query("SELECT * FROM post_like WHERE username='$user_name' AND post_id='$post_id'");
$count=mysqli_num_rows($result);
if($count==1){
	$sql = $db->query("SELECT * FROM post_table WHERE id='$post_id'");
	$data=mysqli_fetch_array($sql);
	$sum = $data['total_like']-1;
	$db->query("UPDATE post_table SET total_like='$sum' WHERE id ='$post_id'");
	$db->query("DELETE FROM post_like WHERE post_id ='$post_id' AND username='$user_name'");
}else{
	$sql= $db->query("SELECT * FROM post_table WHERE id='$post_id'");
	$data=mysqli_fetch_array($sql);
	$sum= $data['total_like']+1;
	$db->query("INSERT INTO post_like(username,post_id,islike,cur_date)VALUES('$user_name','$post_id',1,'$curDate')");
	$db->query("UPDATE post_table SET total_like='$sum' WHERE id ='$post_id'");

}



?>