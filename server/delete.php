<?php
include "connection.php";

$id_news = $_GET['id_news'];
$delete  = "DELETE FROM news WHERE id_news = '$id_news'";
$delete_query = mysqli_query($conn,$delete);

if($delete_query){
    echo "Deleted Successfully";
    echo "<meta http-equiv='refresh' content='1; url=index.php'>";
}
else{
    echo "Deleted Failed";
}

mysqli_close($conn);
?>
