<?php
include ("connection.php");
$search = $_POST['search'];
$list = array();
$result = $db->query("SELECT * FROM post_table WHERE title LIKE '%".$search."%'");
$count=mysqli_num_rows($result);
if($count>0){
	while($row=$result->fetch_assoc()){
		$list[]=$row;
	}
	echo json_encode($list);
}

?>