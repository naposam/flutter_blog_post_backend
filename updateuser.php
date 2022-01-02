<?php
require ("connection.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$gender=$_POST['gender'];
$id=$_POST['uid'];

$db->query("UPDATE  usertbl SET fname='$fname',lname='$lname',mname='$mname',gender='$gender' WHERE uid='$id' ");



?>