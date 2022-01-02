<?php
include 'connection.php';

$sql=$db->query("SELECT * FROM gender ORDER BY gid");
$res=array();

while($row=$sql->fetch_assoc()){
	$res[]=$row;
}
echo json_encode($res);
$db->close();
return;
?>