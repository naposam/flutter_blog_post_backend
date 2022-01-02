<?php
include ('connection.php');
$id=$_POST['id'];
$result = $db->query("SELECT * FROM post_table WHERE id='$id'");
$data= mysqli_fetch_array($result);
if($data['image']){
	unlink('uploads/'.$data['image']);
}

$db->query("DELETE FROM post_table WHERE id='$id'");
?>