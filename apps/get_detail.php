<?php
header('Acces-Control-Allow');
include'../server/connection.php';

$id=$_GET['id']; 

$select=mysqli_query($conn,"select * from news where id_news=$id");
while ($x=mysqli_fetch_assoc($select)) {
	# code...
	$arrayjson[]=$x;
}

echo json_encode($arrayjson);
?>