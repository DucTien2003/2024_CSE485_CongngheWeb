<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="process_login.php" method="post">
    Username: <input type="text" name="username" required>
    <br>
    Password: <input type="password" name="password" required>
    <br>
    Email: <input type="email" name="email" required>
    <br>
    Phone number: <input type="phone" name="phone" required>
    <button type="submit">Login</button>
    </form>

</body>
</html>