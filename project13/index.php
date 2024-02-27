<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./project13/style.css">
   <title>Danh sách khóa học</title>
</head>

<body>
   <?php
    $title= "| KHÓA HỌC SẮP KHAI GIẢNG";
    echo '<h2>'.$title.'</h2>';
   // Dữ liệu khóa học lưu động trong mảng
   $courses = [
      [
         'img'=>'./project13/2.png',
         'title' => 'Học viên quốc tế',
         'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
      Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
      quốc tế.',
         'fee' => '15.000.000 VND',
         'start_date' => '2/2/24',
         'duration' => '2 - 2.5 năm'
      ],
      [
         'img'=>'./project13/3.png',
         'title' => 'Lập trình web fullstack',
         'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
         'fee' => '15.000.000 VND',
         'start_date' => '2/2/24',
         'duration' => '2 - 2.5 năm'
      ],
      [
         'img'=>'./project13/4.png',
         'title' => 'Lập trình java fullstack',
         'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
         'fee' => '15.000.000 VND',
         'start_date' => '2/2/24',
         'duration' => '2 - 2.5 năm'
      ],
      [
         'img'=>'./project13/2.png',
         'title' => 'Lập trình PHP & Laravel',
         'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
         'fee' => '15.000.000 VND',
         'start_date' => '2/2/24',
         'duration' => '2 - 2.5 năm'
      ],
      [
         'img'=>'./project13/3.png',
         'title' => 'Khóa học lập trình.net',
         'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
         'fee' => '15.000.000 VND',
         'start_date' => '2/2/24',
         'duration' => '2 - 2.5 năm'
      ],
      [
         'img'=>'./project13/4.png',
         'title' => 'Lập trình SQL Server',
         'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
         'fee' => '15.000.000 VND',
         'start_date' => '2/2/24',
         'duration' => '2 - 2.5 năm'
      ]
   ];
   echo "<div class='wrapper'>";
   // Hiển thị danh sách khóa học

   foreach ($courses as $course) {
      echo '<div class="course">';
      echo '<img src='.$course["img"].' alt="" width="160px" height="80px">';
      echo '<h3>' . $course['title'] . '</h3>';
      echo '<p class="description">' . $course['description'] . '</p>';
      echo '<div class="item"><img src="./project13/gift.svg" alt="image" /><p>Học phí: ' . $course['fee'] . '</p></div>';
      echo '<div class="item"><img src="./project13/time.svg" alt="image" /><p>Khải giảng: ' . $course['start_date'] . '</p></div>';
      echo '<div class="item"><img src="./project13/mark.svg" alt="image" /><p>Thời lượng: ' . $course['duration'] . '</p></div>';
      echo '</div>';
   }
   echo '</div>';
   ?>
</body>

</html>