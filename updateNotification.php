<?php
include ("connection.php");
$id=$_POST['id'];

$query=$db->query("UPDATE comments SET is_seen=1 WHERE id='$id'");


?>