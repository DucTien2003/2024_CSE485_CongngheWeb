<?php
$itemsPerPage = 9;
$currentPage
    = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($employees) / $itemsPerPage);
$currentPageItems =
    array_slice($employees, ($currentPage - 1) * $itemsPerPage, $itemsPerPage); ?>

<div class="container">
    <!-- Content -->
    <div class="d-flex flex-wrap">
        <?php foreach ($currentPageItems as $employee) : ?>
            <div class="card-wrapper">
                <div class="card p-2 flex-row align-items-center justify-content-between">
                    <div class="card-content">
                        <h5 class="card-title">
                            <?= $employee->getFullName(); ?>
                        </h5>
                        <p class="card-text">
                        <h6>Vị trí</h6>: <?= $employee->getPosition(); ?>
                        </p>
                        <p class="card-text">
                        <h6>Bộ phận</h6>: <?= $employee->getDepartmentName(); ?>
                        </p>
                        <p class="card-text">
                        <h6>Email</h6>: <?= $employee->getEmail(); ?>
                        </p>
                    </div>
                    <div class="card-right">
                        <img class="card-image" src="<?= $employee->getAvatar(); ?>" alt="avatar">
                        <a href="/employees/detail?id=<?php echo $employee->getEmployeeID(); ?>">
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