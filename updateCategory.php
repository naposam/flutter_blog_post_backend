<?php
include ("connection.php");

$name=$_POST['name'];
$id=$_POST['id'];
$date= date('d/m/Y h:i');
$db->query("UPDATE  category SET name='$name',created_date='$date' WHERE id='$id'");

?>