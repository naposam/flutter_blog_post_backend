<?php
include 'connection.php';
$uid=$_POST['uid'];
$sql=$db->query("SELECT * FROM usertbl where uid='$uid'");
$res=array();

while($row=$sql->fetch_assoc()){
	$res[]=$row;
}
echo json_encode($res);
$db->close();
return;
?>