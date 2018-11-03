<?php
include"connection.php";
$id_admin =$_GET['id'];
$title    =$_POST['title'];
$content  =$_POST['content'];
$picture  =$_FILES['picture']['name'];

$insert="insert into news(title,content,picture,id_admin)
values('$title','$content','$picture','$id_admin')";

$result=mysqli_query($conn,$insert) or die(mysqli_error());
move_uploaded_file($_FILES['picture']['tmp_name'],"images/".$picture); 

if($result){
	echo "<script>alert('Saved Successfully');location.href='index.php';</script>";
}
else {
	echo "<center><h1>Save Failed</h1></center>";
}

?>
