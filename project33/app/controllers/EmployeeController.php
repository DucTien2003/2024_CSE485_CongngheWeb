<?php
require_once APP_ROOT . '/app/services/UserService.php';
require_once APP_ROOT . '/app/services/EmployeeService.php';
require_once APP_ROOT . '/app/services/DepartmentService.php';

class EmployeeController
{
    public function index()
    {
        $employeeService = new EmployeeService();
        $employees = $employeeService->getAllEmployees();
        require APP_ROOT . '/app/views/employees/index.blade.php';
    }

    public function detail($id)
    {
        $userService = new UserService();
        $employeeService = new EmployeeService();
        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartments();
        $employee = $employeeService->getEmployeeById($id);
        $department = $departmentService->getDepartmentById($employee->getDepartmentID());
        $user = $userService->getUserByEmployeeId($id);
        require APP_ROOT . '/app/views/employees/detail.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $position = $_POST['position'];
        $avatar = "http://pa1.aminoapps.com/6394/206db3e5a964e23f5e15d5846df12949d9babe54_00.gif";
        $department_id = $_POST['department'];
        $password = $_POST['password'];

        $userService = new UserService();
        $employeeService = new EmployeeService();
        $respond1 = $employeeService->updateEmployee($id, $name, $address, $email, $phone, $position, $avatar, $department_id);
        $respond2 = $userService->updateUserByEmployeeId($id, $password, 'regular');
        header('Location: /employees/index');
    }

    public function delete($id)
    {
        $userService = new UserService();
        $employeeService = new EmployeeService();
        $respond1 = $userService->deleteUserByEmployeeId($id);
        $respond2 = $employeeService->deleteEmployee($id);
        header('Location: /employees/index');
    }

    public function create()
    {
        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartments();
        $userService = new UserService();
        $users = $userService->getAllUsers();
        require APP_ROOT . '/app/views/employees/create.php';
    }

    public function store()
    {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $position = $_POST['position'];
        $department_id = $_POST['department'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userService = new UserService();
        $employeeService = new EmployeeService();
        $newEmployeeId = $employeeService->createEmployee($name, $address, $email, $phone, $position, "http://pa1.aminoapps.com/6394/206db3e5a964e23f5e15d5846df12949d9babe54_00.gif", $department_id);
        $respond = $userService->addUser($username, $password, $newEmployeeId, 'regular');
        header('Location: /employees/index');
    }
}
