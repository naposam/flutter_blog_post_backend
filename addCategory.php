<?php
include ("connection.php");

$name=$_POST['name'];
$date= date('d/m/Y');

$db->query("INSERT INTO category(name,created_date)VALUES('$name','$date')");

?>