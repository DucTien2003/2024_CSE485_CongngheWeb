<?php
$itemsPerPage = 9;
$currentPage
    = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($departments) / $itemsPerPage);
$currentPageItems =
    array_slice($departments, ($currentPage - 1) * $itemsPerPage, $itemsPerPage); ?>

<div class="container">
    <div class="d-flex flex-wrap">
        <?php foreach ($currentPageItems as $department) : ?>
            <div class="card-wrapper">
                <div class="card p-2 flex-row align-items-center justify-content-between">
                    <div class="card-content">
                        <h5 class="card-title">
                            <?= $department->getDepartmentName(); ?>
                        </h5>
                        <p class="card-text">
                        <h6>Địa chỉ</h6>: <?= $department->getAddress(); ?>
                        </p>
                        <p class="card-text">
                        <h6>Email</h6>: <?= $department->getEmail(); ?>
                        </p>
                        <p class="card-text">
                        <h6>Website</h6>: <?= $department->getWebsite(); ?>
                        </p>
                    </div>
                    <div class="card-right">
                        <img class="card-image" src="<?= $department->getLogo(); ?>" alt="avatar">
                        <a href="/departments/detail?id=<?php echo $department->getDepartmentID(); ?>">
                            <button class="btn btn-primary">Chi tiết</button>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <?php if ($currentPage > 1) : ?>
            <button class="btn btn-primary">
                <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
            </button>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <?php if ($i == $currentPage) : ?>
                <button class="btn btn-primary active">
                    <?php echo $i; ?>
                </button>
            <?php else : ?>
                <a href="?page=<?php echo $i; ?>">
                    <button class="btn btn-primary">
                        <?php echo $i; ?>
                    </button>
                </a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages) : ?>
            <button class="btn btn-primary">
                <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
            </button>
        <?php endif; ?>
    </div>
</div>