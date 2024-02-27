<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    session_start();//DICH VU BAO VE
        if(!$_SESSION['isLogin']){
            header("Location:login.php");
        }

    // session_start();
    // if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    // header('Location: login.php'); 
    // }
    // $username = $_SESSION['user_id'];
    // $user = null;
    // foreach ($users as $u) {
    // if ($u['username'] === $username) {
    // $user = $u;
    // break;
    // }
    // }
    // if ($user) {
    // echo "Welcome, " . $user['name'] . "!";
    // echo "<br>Email: " . $user['email'];
    // } else {
    // echo "Error: User not found.";
    // }
?>

<h1>Homepage of Dashboard</h1>
<a href="logout.php">Logout</a>

</body>
</html>