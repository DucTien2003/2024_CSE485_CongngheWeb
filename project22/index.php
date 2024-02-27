<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./project22/style.css">
    <title>Project 22</title>
</head>

<body>
    <?php
    $user = [
        "id" => 1,
        "name" => "ThanhTu",
        "email" => "123@gmail.com",
        "avatar" => "uploads/default_avatar.png" // Initial avatar URL
    ];
    ?>

    <div class="wrapper">
        <form class="form" action="upload_profile.php" method="post" enctype="multipart/form-data">
            <h2>Account Settings</h2>
            <div class="avatar">
                <img src="./project22/a.png" alt="image">
            </div>
            <div class="item">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
            </div>
            <br>
            <div class="item">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $user['email']; ?>" disabled>
            </div>
            <br>
            <div class="item">
                <label for="avatar">Avatar:</label>
                <input type="file" name="avatar" accept="image/*">
            </div>
            <br>
            <button type="submit">UpLoad Profile</button>
        </form>
    </div>


</body>

</html>