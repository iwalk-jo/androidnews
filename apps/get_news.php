<?php
header('Access-Control-Allow-Origin:*');

include'../server/connection.php';

$select=mysqli_query($conn,"select * from news");
while ($x =mysqli_fetch_assoc($select)){
	$arrayjson[]=$x;
}

echo json_encode($arrayjson);

?>