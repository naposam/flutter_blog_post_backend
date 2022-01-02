<?php
require("conn.php");

$query="SELECT * FROM post_table";

$stm=$conn->prepare($query);
$stm->execute();
$userData=array();

while($row=$stm->fetch()){
	array_push(
		$userData,array(
			'id'=>$row["id"],
			'category_name'=>$row["category_name"],
			'comment'=>$row["comment"],
			'total_like'=>$row["total_like"],	
		)
	);
}

echo json_encode($userData);

?>




