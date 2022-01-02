<?php
include "connection.php";
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$password=sha1($password);
$userData=array();

   $query="SELECT * FROM users where username='$username'";
  $res=mysqli_query($db,$query);
  $count = mysqli_num_rows($res);
  if($count==1){
   echo json_encode("Error");

  }else{

   $insert="INSERT INTO users(fullname,username,password)VALUES('".$fullname."','".$username."','".$password."')";
   $result=mysqli_query($db,$insert);
   if($result){
      $sql="SELECT * FROM users WHERE username='".$username."'";
      $qry=mysqli_query($db,$sql);
      $data = mysqli_fetch_array($qry);
      $userData=$data;

      
   }
   echo json_encode($userData);

  }


 
   

?>