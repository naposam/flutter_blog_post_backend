<?php
include 'connection.php';
$cate_name=$_POST['name'];

$sql=$db->query("SELECT * FROM post_table where category_name='".$cate_name."'");
$res=array();

while($row=$sql->fetch_assoc()){
	$res[]=$row;
}
echo json_encode($res);
$db->close();
return;
?>