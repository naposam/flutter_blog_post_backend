<?php
include ("connection.php");
$title=$_POST['title'];
$body=$_POST['body'];
$category_name=$_POST['category_name'];

$image = $_FILES['image']['name'];
$imagePath = "uploads/".$image;
$tmp_name= $_FILES['image']['tmp_name'];
$created_date = date('d/m/Y');
$author= $_POST['author'];
move_uploaded_file($tmp_name, $imagePath);

$db->query("INSERT INTO post_table(image,author,post_date,title,body,category_name,create_date)VALUES('$image','$author','$created_date','$title','$body','$category_name','$created_date')");


?>