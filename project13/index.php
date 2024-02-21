<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./style.css">
   <title>Danh sách khóa học</title>
</head>

<body>
   <?php
   // Dữ liệu khóa học lưu động trong mảng
   $courses = [
      [
         'title' => 'Học viên quốc tế',
         'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
      Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
      quốc tế.',
         'fee' => '15.000.000 VND',
         'start_date' => '2/2/24',
         'duration' => '2 - 2.5 năm'
      ],
      [
         'title' => 'Học viên quốc tế',
         'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
         'fee' => '15.000.000 VND',
         'start_date' => '2/2/24',
         'duration' => '2 - 2.5 năm'
      ],
      [
         'title' => 'Học viên quốc tế',
         'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
         'fee' => '15.000.000 VND',
         'start_date' => '2/2/24',
         'duration' => '2 - 2.5 năm'
      ],
      [
         'title' => 'Học viên quốc tế',
         'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
         'fee' => '15.000.000 VND',
         'start_date' => '2/2/24',
         'duration' => '2 - 2.5 năm'
      ],
      [
         'title' => 'Học viên quốc tế',
         'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
         'fee' => '15.000.000 VND',
         'start_date' => '2/2/24',
         'duration' => '2 - 2.5 năm'
      ],
      [
         'title' => 'Học viên quốc tế',
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
      echo '<img class="main-image" src="./image/stitch.jpg" alt="image" />';
      echo '<h2>' . $course['title'] . '</h2>';
      echo '<p class="description">' . $course['description'] . '</p>';
      echo '<div class="item"><img src="./image/gift.svg" alt="image" /><p>Học phí: ' . $course['fee'] . '</p></div>';
      echo '<div class="item"><img src="./image/time.svg" alt="image" /><p>Khải giảng: ' . $course['start_date'] . '</p></div>';
      echo '<div class="item"><img src="./image/mark.svg" alt="image" /><p>Thời lượng: ' . $course['duration'] . '</p></div>';
      echo '</div>';
   }
   echo '</div>';
   ?>
</body>

</html>