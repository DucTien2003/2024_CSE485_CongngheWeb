<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/styles/home.css">
    <title>Danh bạ điện tử TLU</title>
</head>

<body>
    <?php
    require_once('../app/config/config.php');
    require_once APP_ROOT . '/app/services/UserService.php';
    $url = $_SERVER['REQUEST_URI'];
    $parts = explode('/', $url);
    $object = $parts[1];
    ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid px-4">
            <!-- Logo -->
            <a href="/" class="me-3">
                <img class='logo' src="/assets/images/image.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $object == '' ? 'selected' : ''  ?> " aria-current="page" href="/">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $object == 'departments' ? 'selected' : ''  ?>" href="/departments/index">
                            Departments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $object == 'employees' ? 'selected' : ''  ?>" href="/employees/index">
                            Employees
                        </a>
                    </li>
                </ul>

                <!-- Search -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <!-- Action -->
                <div>
                    <?php if ($object != "") : ?>
                        <a href="<?= '/' . $object . '/create' ?>">
                            <button class="btn btn-primary ms-5">Thêm mới</button>
                        </a>
                    <?php endif; ?>
                    <button class="btn btn-primary ms-2">Đăng nhập</button>
                    <!-- <button class="btn btn-primary ms-2">Đăng xuất</button> -->
                </div>
            </div>
        </div>
    </nav>

    <?php require_once APP_ROOT . '/app/routes/web.php';
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>