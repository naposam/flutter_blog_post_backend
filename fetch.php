<?php
include 'connection.php';

$sql=$db->query("SELECT * FROM post_table ORDER BY id");
$res=array();

while($row=$sql->fetch_assoc()){
	$res[]=$row;
}
echo json_encode($res);
$db->close();
return;
?>