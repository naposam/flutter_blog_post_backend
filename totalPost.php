<?php

include ("connection.php");
$result = $db->query('SELECT id from post_table ');
$totalValue = mysqli_num_rows($result);
echo json_encode($totalValue);
?>