<?php
require ("connection.php");
$title=$_POST['title'];
$body=$_POST['body'];
$category_name=$_POST['category_name'];
$id=$_POST['id'];
$image = $_FILES['image']['name'];
$imagePath = "uploads/".$image;
$tmp_name= $_FILES['image']['tmp_name'];
$created_date = date('d/m/Y');
//$author= $_POST['author'];
move_uploaded_file($tmp_name, $imagePath);

$db->query("UPDATE  post_table SET image='$image',post_date='$created_date',title='$title',body='$body',category_name='$category_name' WHERE id='$id' ");



?>