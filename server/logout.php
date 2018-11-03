<?php
session_start();

if($_POST['Logout']) {
    session_destroy();
    header("location:form_login.php");
}
?>
