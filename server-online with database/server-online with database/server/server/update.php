<?php
include "connection.php";

$id_admin=$_GET['id'];
$id_news =$_POST['id_news'];
$title   =$_POST['title'];
$content =$_POST['content'];
$picture =$_FILES['file_upload']['name'];

if(empty($picture))
{
	$update1="update news set title='$title',content='$content', id_admin='$id_admin' where id_news='$id_news'";	
	$result1=mysqli_query($conn,$update1) or die(mysqli_error());


	if($result1){
	echo "<center><h1>Successfully...!</h1></center>";
	echo "<meta http-equiv='refresh' content='1;url=index.php'>";
	}
	else{
		echo "<center><h1>Failed...!</h1></center>";
	}

}
else
{
	$update2="update news set title='$title', content='$content', picture='$picture', id_admin='$id_admin' where id_news='$id_news'";	
	$result2=mysqli_query($conn,$update2) or die(mysqli_error());
	move_uploaded_file($_FILES['file_upload']['tmp_name'],"images/$picture"); 

	if($result2){
	echo "<center><h1>Successfully...!</h1></center>";
	echo "<meta http-equiv='refresh' content='1;url=index.php'>";
	}
	else{
		echo "<center><h1>Failed...!</h1></center>";
	}
}

mysqli_close($conn);

?>