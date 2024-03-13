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
            'title' => 'Học viên quốc tế',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'title' => 'Học viên quốc tế',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'title' => 'Học viên quốc tế',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'title' => 'Học viên quốc tế',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'title' => 'Học viên quốc tế',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'title' => 'Học viên quốc tế',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ]
    ];

    $itemsPerPage = 4;
    $currentPage
        = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems =
        array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);

    echo "<div class='wrapper'>";
    foreach ($products as $index => $product) {
        if ($index < $itemsPerPage * $currentPage && $index >= $itemsPerPage * ($currentPage - 1)) {
            echo '<div class="product">';
            echo '<img class="main-image" src="./image/stitch.jpg" alt="image" />';
            echo '<h2>' . $product['title'] . '</h2>';
            echo '<div class="item"><img src="./image/gift.svg" alt="image" /><p>Học phí: ' . $product['fee'] . '</p></div>';
            echo '<div class="item"><img src="./image/time.svg" alt="image" /><p>Khải giảng: ' . $product['start_date'] . '</p></div>';
            echo '<div class="item"><img src="./image/mark.svg" alt="image" /><p>Thời lượng: ' . $product['duration'] . '</p></div>';
            echo '</div>';
        }
    }
    echo '</div>';
    ?>

    <div class="pagination">
        <?php if ($currentPage > 1) : ?>
            <button>
                <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
            </button>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <?php if ($i == $currentPage) : ?>
                <button class="active">
                    <?php echo $i; ?>
                </button>
            <?php else : ?>
                <a href="?page=<?php echo $i; ?>">
                    <button>
                        <?php echo $i; ?>
                    </button>
                </a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages) : ?>
            <button>
                <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
            </button>
        <?php endif; ?>
    </div>

</body>

</html>