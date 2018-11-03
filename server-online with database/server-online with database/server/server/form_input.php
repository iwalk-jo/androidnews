<?php
session_start();
    if(empty($_SESSION['adminuser']))
    {  header("location:form_login.php");  }

    //get username
    include 'connection.php';
    $user=$_SESSION['adminuser'];
    $qry ="SELECT*FROM admin WHERE username='$user'";
    $disp=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_array($disp)){
          $id_admin =$row['id_admin'];           
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Welcome <?php echo $user?></a>
        </div>
        <form method="POST" action="logout.php">
            <input type="submit" name="Logout" value="Logout" style="margin-top: 10px;"  class="btn btn-default">
        </form>
    </div>
</nav>

<br><br><br>

<div class="container">

<form method="POST" action="insert.php?id=<?= $id_admin;?>" enctype="multipart/form-data">
    <table class="table table-striped">     

        <tr>
            <th colspan="2">Input News</th>
        </tr> 
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" required></td>
        </tr>
        <tr>
            <td>Picture</td>
            <td><input type="file" name="picture" required></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="content" required cols="50" rows="3"></textarea></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" name="user" value="<?php echo $user?>" readonly></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Save" class="btn btn-primary">
                <input type="reset" name="reset" value="Back" onclick="location.href='index.php'" class="btn btn-secondary">
            </td>
        </tr>
    </table>
</form>

</div>

</body>
</html>
