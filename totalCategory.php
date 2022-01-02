<?php

include ("connection.php");
$result = $db->query('SELECT id from category');
$totalValue = mysqli_num_rows($result);
echo json_encode($totalValue);
?>