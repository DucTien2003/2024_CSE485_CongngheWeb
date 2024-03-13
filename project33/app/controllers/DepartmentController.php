<?php
require_once APP_ROOT . '/app/services/DepartmentService.php';

class DepartmentController
{
    public function index()
    {
        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartments();
        require APP_ROOT . '/app/views/departments/index.blade.php';
    }

    public function detail($id)
    {
        $departmentService = new DepartmentService();
        $department = $departmentService->getDepartmentById($id);
        $departments = $departmentService->getAllDepartments();
        require APP_ROOT . '/app/views/departments/detail.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $logo = "http://img1.wikia.nocookie.net/__cb20120818103631/crayonshin-chan/images/thumb/e/e9/Hima.png/180px-Hima.png";
        $website = $_POST['website'];
        $department_id = $_POST['department'];

        $departmentService = new DepartmentService();
        $respond = $departmentService->updateDepartment($id, $name, $address, $email, $phone, $logo, $website, $department_id);
        header('Location: /departments/index');
    }

    public function delete($id)
    {
        $userService = new UserService();
        $employeeService = new EmployeeService();
        $departmentService = new DepartmentService();
        $respond1 = $userService->deleteUserByDepartmentId($id);
        $respond2 = $employeeService->deleteEmployeeByDepartmentId($id);
        $respond2 = $departmentService->deleteDepartment($id);
        header('Location: /departments/index');
    }

    public function create()
    {
        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartments();
        require APP_ROOT . '/app/views/departments/create.php';
    }

    public function store()
    {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $website = $_POST['website'];
        $department_id = $_POST['department'];

        $departmentService = new DepartmentService();
        $respond = $departmentService->createDepartment($name, $address, $email, $phone, "http://img1.wikia.nocookie.net/__cb20120818103631/crayonshin-chan/images/thumb/e/e9/Hima.png/180px-Hima.png", $website, 1);

        header('Location: /departments/index');
    }
}
