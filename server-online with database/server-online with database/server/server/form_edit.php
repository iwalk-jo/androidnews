<?php
session_start();
    if(empty($_SESSION['adminuser']))
    {  header("location:form_login.php");  }
    
    //get username
    include "connection.php";

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
            <input type="submit" name="Logout" value="Logout" style="margin-top: 10px;" class="btn btn-default">
        </form>
    </div>
</nav>

<br><br><br>

<div class="container">

    <?php    

    $id_news = $_GET['id_news'];
    $result  = mysqli_query($conn,"SELECT * FROM news,admin WHERE id_news='$id_news' AND news.id_admin=admin.id_admin") ;

    while($r=mysqli_fetch_array($result)){
        $id_news =$r['id_news'];
        $title   =$r['title'];    
        $picture =$r['picture'];    
        $content =$r['content']; 
        $username=$r['username'];
    ?>

    <form action="update.php?id=<?= $id_admin ?>" method="POST" enctype="multipart/form-data">
        <table align="center" class="table table-striped">            
            <tr>
                <th colspan="2">Update News</th> 
            </tr>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_news" value="<?php echo $id_news ?>" readonly></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" value="<?php echo $title ?>"></td>
            </tr>
            <tr>
                <td>Content</td>
                <td><textarea name="content" required cols="50" rows="3" class="ckeditor"><?php echo $content ?></textarea></td>
            </tr>                
            <tr>
                <td>Picture</td>
                <td><input type="file" name="file_upload"> <br>
                    <img src="images/<?php echo $picture ?>" width="9%">                    
                </td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input type="text" name="username" value="<?php echo $username; ?>" readonly></td>
            </tr>
            <tr>                
                <td colspan="2">
                    <input type="submit" name="submit" value="Update" class="btn btn-success">
                    <input type="reset" name="reset" value="Back" onclick="location.href='index.php'" class="btn btn-secondary">
                </td>
            </tr>
        </table>
    </form>

<?php
}
?>
    </div>

</body>
</html>
