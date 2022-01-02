<?php
include "connection.php";
 $password=$_POST['password'];
 $username=$_POST['username'];
$password=sha1($password);
$userData=array();
$query="SELECT * FROM users WHERE username='$username' and password='$password'";
$result=mysqli_query($db,$query);
$count = mysqli_num_rows($result);
if($count==1){
$data=mysqli_fetch_array($result);
$userData=$data;
 echo json_encode($userData);

}else{
	echo json_encode("Error");
}


?>