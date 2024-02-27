<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project23</title>
</head>
<body>
    <?php
    session_start();//DICH VU BAO VE
    if(!$_SESSION['isLogin']){
        header("Location:.project23/login.php");
    }
    $users = [
        [
        "username" => "johndoe",
        "password" => password_hash("123", PASSWORD_DEFAULT), // Store hashed password
        "name" => "John Doe",
        "email" => "johndoe@example.com"
        ],
        [
            "username" => "thanhtu",
            "password" => password_hash("456", PASSWORD_DEFAULT), // Store hashed password
            "name" => "Thanh Tu",
            "email" => "thanhtu@gmail.com"
            ],
       ];
    echo "<div class='wrapper'>";
    foreach ($users as $user) {
            echo '<div class="user">';            
            echo '<h3>' . $user['username'] . '</h3>';
            echo '<p class="pass">'. $user['password']. '</p>';
            echo '<p class="name">'. $user['name'].'</p>';
            echo '<p class="email">'. $user['email'].'</p>';

            echo '</div>';
        }
    echo '<a href=".project23/logout.php">Logout</a>';
    echo '</div>';
    ?>
   
</body>
</html>
