<?php
include ("connection.php");

$id=$_POST['id'];
$db->query("DELETE FROM category WHERE id='$id'");

?>