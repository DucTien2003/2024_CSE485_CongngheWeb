<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel = "stylesheet " href = "/project13/index.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

 <title>Danh sách khóa học</title>
 <style>
 /* Thêm các định kiểu CSS của bạn ở đây */
 
 </style>
</head>
<body>

 <?php

 $courses = [
  [
    'title' => '   LẬP TRÌNH VIÊN QUỐC TẾ',
    'img' => "../project13/img/anh1.png",
    'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
    'fee' => '15.000.000 VND',
    'start_date' => '2/2/24',
    'duration' => '2 - 2.5 năm'
    ],

  [  
  'title' => '   LẬP TRÌNH WEB FULLSTACK',
  'img' => "../project13/img/anh2.png",
  'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghê, xây dựng website hoàn chỉnh sau khóa học',
  'fee' => '10.000.000 VND',
  'start_date' => '2/2/24',
  'duration' => '2 - 2.5 năm'
  ],

  [  
    'title' => '   LẬP TRÌNH JAVA FULLTASK',
    'img' => "../project13/img/anh3.png",
    'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
    'fee' => '12.000.000 VND',
    'start_date' => '2/2/24',
    'duration' => '2 - 2.5 năm'
  ],
  [  
    'title' => '   LẬP TRÌNH SQL SERVER',
    'img' => "../project13/img/anh4.png",
    'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
    'fee' => '15.000.000 VND',
    'start_date' => '2/2/24',
    'duration' => '2 - 2.5 năm'
  ],
  [  
    'title' => '   KHÓA HỌC LẬP TRÌNH .NET',
    'img' => "../project13/img/anh5.png",
    'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
    'fee' => '10.000.000 VND',
    'start_date' => '2/2/24',
    'duration' => '2 - 2.5 năm'
  ],
  [  

    'title' => '   LẬP TRÌNH PHP & LARAVEL',
    'img' => "../project13/img/anh6.png",
    'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
   Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
   quốc tế.',
    'fee' => '9.000.000 VND',
    'start_date' => '2/2/24',
    'duration' => '2 - 2.5 năm'
  ],

  ];


 // Hiển thị danh sách khóa học
 echo ' <h2 class="red-title">  <span style="background-color: #8c0025; margin-right: 10px;">&nbsp;</span> KHÓA HỌC SẮP KHAI GIẢNG </h2>';

 foreach ($courses as $course) {
  echo '<div class="course">';

  echo'<img src= '. $course["img"] .' alt="" width="300px" height="120px" >';
  // echo '<img src="../project/img/anh1.png" alt="">';
  // echo '<img src="https://1.bp.blogspot.com/-K_GJkstgCq8/YEcwvkiXl0I/AAAAAAAAAE0/DlUVIO-D4hAEtrpeFZsPrtwNd7gJ3B_3gCLcBGAsYHQ/s1280/khoa-hoc-truc-tuyen-1.jpg" alt=""  width="300px" height="120px">';
  echo '<h3>' . $course['title'] . '</h3>';
  echo '<p>' . $course['description'] . '</p>';
  echo ' <p>Học phí: ' . $course['fee'] . '</p>';
  echo '<p>Khai giảng: ' . $course['start_date'] . '</p>';
  echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
  echo '</div>';
  }

 ?>
</body>

</html>