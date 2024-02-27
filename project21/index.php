<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm</title>
    <link rel="stylesheet" href="style.css">
    <style>
 
 </style>
</head>
<body>

<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        'img' => "../project21/img/anh1.png",
        "price" => 150,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "id" => 2,
        "name" => "Jean",
        'img' => "../project21/img/anh2.png",
        "price" => 230,
        "description" => "A comfortable and stylish Jean."
    ],

    [
        "id" => 3,
        "name" => "Bag",
        'img' => "../project21/img/anh3.png",
        "price" => 190,
        "description" => "Waterproof Emil Backpack."
    ],
    [
        "id" => 4,
        "name" => "Chair",
        'img' => "../project21/img/anh4.png",
        "price" => 300,
        "description" => "Stylo Stool."
    ],
    [
        "id" => 5,
        "name" => "Hair",
        'img' => "../project21/img/anh5.png",
        "price" => 300,
        "description" => "Stylo Stool."
    ],
    [
        "id" => 6,
        "name" => "Mouse",
        'img' => "../project21/img/anh6.png",
        "price" => 300,
        "description" => "Stylo Stool."
    ],
    [
        "id" => 7,
        "name" => "Hat",
        'img' => "../project21/img/anh7.png",
        "price" => 300,
        "description" => "Stylo Stool."
    ],
    [
        "id" => 8,
        "name" => "Iphone",
        'img' => "../project21/img/anh8.png",
        "price" => 300,
        "description" => "Stylo Stool."
    ],
    [
        "id" => 8,
        "name" => "Shoes",
        'img' => "../project21/img/anh9.png",
        "price" => 300,
        "description" => "Stylo Stool."
    ],

];

    $itemsPerPage = 3;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
   

    <div class="product-list">
        <?php foreach ($products as  $index => $product):?>
            <?php if($index < $itemsPerPage*$currentPage  && $index >= $itemsPerPage*($currentPage-1)){
                echo '<div class="product">';
                echo '<p><img src= '. $product["img"] .' alt="" width="300px" height="160px" ></p>';
                echo '<h1>' .$product['name']. '</h1>';
                echo '<p>' .$product['description']. '</p>';
                echo '<span class="price">' . $product['price'].'</span>';
            echo '</div>';
            } ?>
        <?php endforeach; ?>
    </div>
    
  <div class="pagination">
    <?php if ($currentPage > 1): ?>
      <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
      <?php if ($i == $currentPage): ?>
        <span class="active"><?php echo $i; ?></span>
      <?php else: ?>
        <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
      <?php endif; ?>
    <?php endfor; ?>

    <?php if ($currentPage < $totalPages): ?>
      <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    <?php endif; ?>
  </div>
    


</body>
</html>
