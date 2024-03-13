<?php
require_once APP_ROOT . '/app/controllers/HomeController.php';
require_once APP_ROOT . '/app/controllers/EmployeeController.php';
require_once APP_ROOT . '/app/controllers/DepartmentController.php';


$url = $_SERVER['REQUEST_URI'];
// Phân tích URL
$parts = explode('/', $url);
$object = count($parts) > 1 ?  $parts[1] : ''; // Ví dụ: departments, employees, users
$action = count($parts) > 2 ? $parts[2] : ''; // Ví dụ: index, create, store, edit, update, delete
// Xử lý theo object và action
if ($object == 'departments') {
    if (strpos($action, 'index') !== false) {
        $departmentController = new DepartmentController();
        $departmentController->index();
    } else if (strpos($action, 'create') !== false) {
        $departmentController = new DepartmentController();
        $departmentController->create();
    } else if (strpos($action, 'store') !== false) {
        $departmentController = new DepartmentController();
        $departmentController->store();
    } else if (strpos($action, 'detail') !== false) {
        $departmentController = new DepartmentController();
        $departmentController->detail($_GET['id']);
    } else if (strpos($action, 'update') !== false) {
        $departmentController = new DepartmentController();
        $departmentController->update();
    } else if (strpos($action, 'delete') !== false) {
        $departmentController = new DepartmentController();
        $departmentController->delete($_GET['id']);
    }
} else if ($object == 'employees') {
    if (strpos($action, 'index') !== false) {
        $employeeController = new EmployeeController();
        $employeeController->index();
    } else if (strpos($action, 'create') !== false) {
        $employeeController = new EmployeeController();
        $employeeController->create();
    } else if (strpos($action, 'store') !== false) {
        $employeeController = new EmployeeController();
        $employeeController->store();
    } else if (strpos($action, 'detail') !== false) {
        $employeeController = new EmployeeController();
        $employeeController->detail($_GET['id']);
    } else if (strpos($action, 'update') !== false) {
        $employeeController = new EmployeeController();
        $employeeController->update();
    } else if (strpos($action, 'delete') !== false) {
        $employeeController = new EmployeeController();
        $employeeController->delete($_GET['id']);
    }
} else if ($object == '') {
    $homeController = new HomeController();
    $homeController->index();
} else {
    // Hiển thị trang 404
    // ...
}
?>


<?php
// Khai báo thư viện
// require_once '../config.php';
// require_once '../functions.php';
// // Khởi tạo các biến
// $url = $_SERVER['REQUEST_URI'];
// $method = $_SERVER['REQUEST_METHOD'];
// $data = $_POST;
// // Xử lý yêu cầu
// if ($url === '/' && $method === 'GET') {
//     // Hiển thị trang chủ
//     require_once '../views/home.php';
// } elseif ($url === '/login' && $method === 'POST') {
//     // Xử lý đăng nhập
//     $username = $data['username'];
//     $password = $data['password'];
//     // ...
// } else {
//     // Hiển thị thông báo lỗi 404
//     echo "<h1>404 Not Found</h1>";
// }
