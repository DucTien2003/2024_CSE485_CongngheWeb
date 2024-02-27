<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Project 21</title>
</head>

<body>
    <?php
    // Dữ liệu khóa học lưu động trong mảng
    $products = [
        [
        "img"=>"./img/t.png",
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
        ],
        [
        "img"=>"./img/j.png",
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean."
        ],
        [
        "img"=>"./img/sh.png",
        "id" => 3,
        "name" => "Shoes",
        "price" => 25.3,
        "description" => "A comfortable and stylish Shoes."
        ],
        [
        "img"=>"./img/h.png",
        "id" => 4,
        "name" => "Hat",
        "price" => 22.5,
        "description" => "A comfortable and stylish Hat."
        ],
        [
        "img"=>"./img/s.png",
        "id" => 5,
        "name" => "Shirt",
        "price" => 20.3,
        "description" => "A comfortable and stylish Shirt."
        ],
        [
        "img"=>"./img/j.png",
        "id" => 6,
        "name" => "Blue Jean",
        "price" => 15.4,
        "description" => "A comfortable and stylish Blue Jean."
        ],
        [
            "img"=>"./img/r.png",
            "id" => 7,
            "name" => "Ring",
            "price" => 28.3,
            "description" => "A comfortable and stylish Ring."
        ],
        [
            "img"=>"./img/b.png",
            "id" => 8,
            "name" => "HandBag",
            "price" => 21.6,
            "description" => "A comfortable and stylish Bag."
        ],
       ];

    $itemsPerPage = 3;
    $currentPage
        = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems =
        array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);

    echo "<div class='wrapper'>";
    foreach ($products as $index => $product) {
        if ($index < $itemsPerPage * $currentPage && $index >= $itemsPerPage * ($currentPage - 1)) {
            echo '<div class="product">';            
            echo '<img src='.$product["img"].' alt="" width="160px" height ="160px">';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p class="description">'. $product['description']. '</p>';
            echo '<p class="price">'. $product['price'].'</p>';
            echo '</div>';
        }
    }
    echo '</div>';
    ?>

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