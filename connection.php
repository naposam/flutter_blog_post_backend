<?php 
$host = "127.0.0.1";
$user ="root";
$password ="";
$DbName="flutterblog";
 $db=mysqli_connect($host,$user,$password,$DbName);
 if(!$db){
 	echo "Database Connection Failed";
 }

?>
