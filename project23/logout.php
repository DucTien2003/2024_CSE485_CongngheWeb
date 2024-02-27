<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start(); 
    if(!$_SESSION ['isLogin']){
        header("Location:login.php");
    } 
    // session_start();
    // if($_SESSION['isLogin']){
    // unset($_SESSION['isLogin']);
    // header("location:login.php");
    // }
    session_destroy(); // Destroy session
    setcookie('logged_in', "", 1, "/"); // Expire cookie
    header('Location: login.php'); // Redirect to login page
?>
</body>
</html>