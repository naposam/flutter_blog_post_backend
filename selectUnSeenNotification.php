<?php
require("conn.php");

$query="SELECT * FROM comments WHERE is_seen=0";

$stm=$conn->prepare($query);
$stm->execute();
$userData=array();

while($row=$stm->fetch()){
	array_push(
		$userData,array(
			'id'=>$row["id"],
			'comment'=>$row["comment"],
			'username'=>$row["username"],
			'post_id'=>$row["post_id"],
			'comment_date'=>$row["comment_date"],
		)
	);
}

echo json_encode($userData);

?>




