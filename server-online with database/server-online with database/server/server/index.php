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

    <table class="table table-striped">        
        <tr style="background-color: #ffffff">
            <th colspan="5"><h1 style="margin: 0">News</h1></th>
            <th><a href="form_input.php" class="btn btn-primary" style="width: 100%">Insert</a></th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Title</th>                    
            <th>Content</th>            
            <th>Picture</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
        <?php
        include "connection.php";
        $query="SELECT * FROM news, admin WHERE news.id_admin=admin.id_admin ORDER BY id_news";
        $display =mysqli_query($conn,$query) ;
        while($r=mysqli_fetch_array($display)) {
            $id_news   =$r['id_news'];
            $title     =$r['title'];            
            $picture   =$r['picture'];
            $content   =$r['content'];            
            $username  =$r['username'];
            $id_admin  =$r['id_admin'];
            echo "
            <tr>
        	<td>$id_news</td>
        	<td>$title</td>
        	<td><img src='images/$picture' height='100px'></td>        
        	<td>$content</td>
            <td>$username</td>
        	<td>
        		<a href='form_edit.php?id_news=$id_news' class='btn btn-success' style='width:100%'>
        			Update
        		</a>
                <br><br>
        		<a href='delete.php?id_news=$id_news' class='btn btn-danger' style='width:100%' onClick='return confirm(\" Wanna Delete? \")'>
        			Delete
        		</a>
        	</td>
        	</tr>";
        }
    
    ?>
    </table>
</div>

</body>
</html>
