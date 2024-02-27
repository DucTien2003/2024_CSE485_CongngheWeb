<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // session_start(); // Start session
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    // // Check if username exists
    // $user = null;
    // foreach ($users as $u) {
    //  if ($u['username'] === $username) {
    //  $user = $u;
    //  break;
    //  }
    // }
    // if ($user && password_verify($password, $user['password'])) {
    //  // Login successful
    //  $_SESSION['user_id'] = $user['username']; // Store user ID in session
    //  setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // Set cookie for 30 days
    //  header('Location: profile.php'); // Redirect to profile page
    // } else {
    //  // Login failed
    //  echo "Invalid username or password.";
    // }

    //ktra csdl
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // lay ra du lieu tu form
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        //ktra csdl
        if ($user == 'thuy' && $pass == '123'){
            session_start();
            $_SESSION['isLogin'] = $user; //cap the
            header("Location:profile.php");
        }else{
            header("Location: https://www.youtube.com");
        }
    }
    
    ?>
</body>
</html>