<?php
session_start();
include "connection.php";

if(isset($_POST['Login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sqlCommand = "SELECT * FROM admin";
    $query      = mysqli_query($conn, $sqlCommand);

    while($row = mysqli_fetch_array($query)) {
        $adminuser = $row['username'];
        $adminpass = $row['password'];
        if(($username != $adminuser) || ($password != $adminpass)) {
            echo "ID or Password is wrong!";
        }
        else {$_SESSION['adminuser'] = $username;
            echo "<meta http-equiv='refresh' content='0.1;url=index.php'>";
            exit();   }
    }
}
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>


<div class="container-fluid">
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
            <h2>Login</h2>
            <form role="form" action="form_login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input class="form-control" placeholder="Enter Username" type="text" name="username" pattern=".{5,10}" required title="5 to 10 characters">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input class="form-control" placeholder="Enter password" type="password" name="password">
                </div>
                <input type="submit" class="btn btn-primary" value="Login" name="Login">
            </form>
    </div>
    <div class="col-sm-4"></div>
</div>
</div>


</body>
</html>
