<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="/project12/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        
    </style>
</head>
<body>

<?php

$navItems = [
[
 "GIỚI THIỆU",
 [
    "Tổng quan",
    "Cơ sở vật chất",
    "Công tác đoàn"
 ]
],

 "|",

 [
 "TIN TỨC & THÔNG BÁO",
    [
        "Tin tức",
        "Thông báo",
    ]
 ],

 "|",

 [
    "TUYỂN SINH",
    [
      "Tuyển sinh đại học",
      "Tuyển sinh thạc sĩ",
      "Tuyển sinh tiến sĩ",
    ],
  ],

  "|",

[
 "ĐÀO TẠO",
 [
    "Thạc sĩ",
    "Tiến sĩ",
    "Đại học chính quy",
 ]
],
 "|",

 ["NGHIÊN CỨU",
 [
    "Tin khoa học",
    "Hội nghị",
    "Hội thảo",
 ]
],"|",
 "ĐỐI NGOẠI","|",
 "VĂN BẢN","|",
 "SINH VIÊN","|",
 "LIÊN HỆ"
];

echo '<nav  > <i class="material-icons">home</i> <ul>';
foreach ($navItems as $item) {
    if (is_array($item)) {
      echo "<li class='dropdown'>";
      echo "<a href='#'> {$item[0]} </a>";
      echo '<ul class="sub-menu">';
      foreach ($item[1] as $subItem) {
        echo "<li><a href='#'> {$subItem} </a></li>";
      }
      echo '</ul>';
      echo '</li>';
    } else {
      echo "<li>$item</li>";
    }
  }
echo '</ul></nav>';
?>


</body>
</html>