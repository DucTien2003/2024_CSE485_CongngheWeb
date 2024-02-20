<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./project12/style.css">
    <title>project12</title>
</head>

<body>
    <?php
    $navItems = [
        "GIỚI THIỆU" => ["Tổng quan","Nhân sự","Cơ sở vật chất"],
        "TIN TỨC & THÔNG BÁO" => ["Tin tức", "Thông báo"],
        "TUYỂN SINH" => [],
        "ĐÀO TẠO" => [],
        "NGHIÊN CỨU" => ["Nghiên cứu khoa học"],
        "ĐỐI NGOẠI" => [],
        "VĂN BẢN" => ["Văn bản hướng dẫn", "Văn bản đào tạo"],
        "SINH VIÊN" => [],
        "LIÊN HỆ" => []
    ];
    echo '<nav>
<img src="./project12/home-button.svg" alt="home">
<ul>';
    foreach ($navItems as $key => $value) {
        echo "<li class='item'>$key";
        if (count($value) > 0) {
            echo "<ul class='sub-menu'>";
            foreach ($value as $subItem) {
                echo "<li>$subItem</li>";
            }
            echo "</ul>";
        }
        echo "</li>";
    }
    echo '</ul></nav>';
    ?>
</body>

</html>