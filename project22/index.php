<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./style.css">
    <title>Project 22</title>
</head>

<body>
    <?php
    $user = [
        "id" => 1,
        "name" => "John Doe",
        "email" => "johndoe@example.com",
        "avatar" => "./image/stitch.jpg" // Initial avatar URL
    ];
    $jsonData = $_GET['data'] ?? '';
    if (!empty($jsonData)) {
        $user['avatar'] = json_decode(urldecode($jsonData), true)['avatar'];
        $user['name'] = json_decode(urldecode($jsonData), true)['name'];
    }
    ?>

    <div class="wrapper">
        <form class="form" action="upload_profile.php" method="post" enctype="multipart/form-data">
            <h2>Profile Information</h2>
            <div class="avatar">
                <img src="<?php echo $user['avatar']; ?>" alt="avatar">
                <label for="avatar" class="custom-file-upload">Change my avatar</label>
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
            <input id="avatar" type="file" name="avatar" accept="image/*">
            <button type="submit">Update Profile</button>
        </form>
    </div>


</body>

</html>