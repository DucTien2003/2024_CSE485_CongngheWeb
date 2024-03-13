<?php
require_once APP_ROOT . '/app/models/Employee.php';
require_once APP_ROOT . '/app/config/database.php';

class EmployeeService
{
    public function getAllEmployees()
    {
        $conn = connectDB();
        $employees = [];
        if ($conn) {
            $sql = "SELECT employees.*, departments.DepartmentName
            FROM employees JOIN departments
            ON employees.DepartmentID = departments.DepartmentID
            ORDER BY employees.FullName ASC;";

            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $employee = new Employee($row);

                $employees[] = $employee;
            }
            mysqli_free_result($result);
            return $employees;
        } else {
            return [];
        }
    }

    function getEmployeeById($id)
    {
        $conn = connectDB();
        $employee = [];
        if ($conn) {
            $sql = "SELECT * from employees
            WHERE EmployeeID = ?";

            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $employee = new Employee(mysqli_fetch_assoc($result));
            mysqli_free_result($result);
            mysqli_stmt_close($stmt);
            return $employee;
        } else {
            return [];
        }
    }

    public function updateEmployee($id, $name, $address, $email, $phone, $position, $avatar, $department_id)
    {
        $conn = connectDB();
        $sql = "UPDATE employees SET FullName = ?, Address = ?, Email = ?, MobilePhone = ?, Position = ?, DepartmentID = ?
        WHERE EmployeeID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param(
            $stmt,
            "sssssii",
            $name,
            $address,
            $email,
            $phone,
            $position,
            // $avatar,
            $department_id,
            $id,
        );
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result; // true || false
    }

    public function deleteEmployee($id)
    {
        $conn = connectDB();
        $sql = "DELETE FROM employees WHERE EmployeeID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_close($conn);
        return $result;
    }

    public function deleteEmployeeByDepartmentId($id)
    {
        $conn = connectDB();
        $sql = "DELETE FROM employees WHERE DepartmentID = ?;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_close($conn);
        return $result;
    }

    public function createEmployee($name, $address, $email, $phone, $position, $avatar, $department_id)
    {
        $conn = connectDB();
        $sql = "INSERT INTO employees (FullName, Address, Email, MobilePhone, Position, Avatar, DepartmentID) VALUES
        (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssssi", $name, $address, $email, $phone, $position, $avatar, $department_id);
        $result = mysqli_stmt_execute($stmt);
        $newEmployeeID = mysqli_insert_id($conn);

        mysqli_close($conn);
        mysqli_stmt_close($stmt);
        return $newEmployeeID;
    }
}











function isEmployeeExist($id)
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM employees WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_fetch_row($result)[0];
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $count > 0;
}
function searchEmployees($keyword)
{
    $conn = connectDB();
    $sql = "SELECT * FROM employees WHERE name LIKE ? OR email LIKE ? OR
department_id IN (SELECT id FROM departments WHERE name LIKE ?)";
    $keyword = "%$keyword%";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $keyword, $keyword, $keyword);
    mysqli_stmt_execute($stmt);
}
//  $result
