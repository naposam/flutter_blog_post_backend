<?php

 $host='localhost';
 $user='root';
 $pass='';
 $db='flutterblog';
 try {
 	$conn = new PDO('mysql:host='.$host.';dbname='.$db,$user,$pass);
 	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 } catch (Exception $e) {
 	echo "Connection Error".$e->getMessage();
 	//die("Unable to connect");
 	
 }


?>