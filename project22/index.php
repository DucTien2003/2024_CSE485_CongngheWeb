<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
 <nav>
    </nav>
  <div class="card">
    <div>
    </div>

    <?php
    $user = [
        "id" => 1,
        "name" => "Nguyễn Thị Thu Thủy",
        "email" => "thuthuy2003@gmail.com",
        "phone" => "0123456789",
        "avatar" => "uploads/default_avatar.png" // Initial avatar URL
       ];
    ?>
<form action="upload_profile.php" method="post" enctype="multipart/form-data"  >

 <h1>Account Settings</h1>

 <p> Profile </p>
 <p> Password </p>
 <p> Integrations </p>
 <p> Biling</p>

 <br>
 <label for="name">Full Name:</label><br>
 <input type="text" name="name" value="<?php echo $user['name']; ?>" class="form-container">


 <br>
 <label for="email">Email:</label><br>
 <input type="email" name="email" value="<?php echo $user['email']; ?>" class="form-container">


 <br>
 <label for="phone">Phone number:</label><br>
 <input type="phone" name="phone" value="<?php echo $user['phone']; ?>" class="form-container">


 <br>
 <label for="avatar">Avatar:</label>
 <input type="file" name="avatar" accept="image/*">
 <br>
 <br>
 <button type="submit">Update Profile</button>
 
 <div class = "avt">
 <img src="../project22/img/anh.png" alt="" width="180px" height="180px" >
 <button type="change"  > Change My Avatar </button>
 </div>

</form>

</body>
</html>