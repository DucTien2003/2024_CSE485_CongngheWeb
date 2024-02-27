<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>
<body>
    
<div class = "nav ">
    <form action="process_login.php" method="post">
        <h2>Thông tin đăng nhập </h2>
    <div class = "name">
        <i class="material-icons">people</i>    
        Username: <input type="text" name="username" required>
    </div>
    <br>
    <i class="material-icons">clock</i>
    Password: <input type="password" name="password" required class = "input_pass">
    <br>
    <button type="submit">Login</button>
    </form>
</div>
    
</body>
</html>