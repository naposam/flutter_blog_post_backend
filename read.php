<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once 'Database.php';
include_once 'index.php';

$database = new Database();
$db = $database->connect();
$post = new Post($db);

$result = $post->read();

$num = $result->rowCount();

if($num >0){
	$post_arr=array();
	$post_arr['data']=array();

	while($row= $result->fetch(PDO::FETCH_ASSOC)){
		extract($row);
		$post_item=array(
			'id'=>$id,
			'fullname'=>$fullname,
			'username'=>$username,
			'status'=>$status,
			'password'=>$password,
		);

		array_push($post_arr['data'], $post_item);

	}
	echo json_encode($post_arr);



}else{

}


?>