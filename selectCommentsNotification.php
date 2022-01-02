<?php

include ("connection.php");
$result = $db->query('SELECT id from comments WHERE is_seen=0');
$totalValue = mysqli_num_rows($result);
echo json_encode($totalValue);
?>