<?php
require_once APP_ROOT . '/app/models/Department.php';
require_once APP_ROOT . '/app/config/database.php';

class DepartmentService
{
    public function getAllDepartments()
    {
        $conn = connectDB();
        $departments = [];
        if ($conn) {
            $sql = "SELECT * FROM departments";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $department = new Department($row);

                $departments[] = $department;
            }
            mysqli_free_result($result);
            return $departments;
        } else {
            return [];
        }
    }

    public function getDepartmentById($id)
    {
        $conn = connectDB();
        $sql = "SELECT * FROM departments WHERE DepartmentID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $department = new Department(mysqli_fetch_assoc($result));
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        return $department;
    }

    public function createDepartment($departmentName, $address, $email, $phone, $logo, $website, $parentDepartmentID)
    {
        $conn = connectDB();
        $sql = "INSERT INTO departments (DepartmentName, Address, Email, Phone, Logo, Website, ParentDepartmentID) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssssi", $departmentName, $address, $email, $phone, $logo, $website, $parentDepartmentID);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function updateDepartment($id, $departmentName, $address, $email, $phone, $logo, $website, $parentDepartmentID)
    {
        $conn = connectDB();
        $sql = "UPDATE departments SET DepartmentName = ?, Address = ?, Email = ?, Phone = ?, Website = ?, ParentDepartmentID = ? WHERE DepartmentID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssssii", $departmentName, $address, $email, $phone,  $website, $parentDepartmentID, $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function deleteDepartment($id)
    {
        $conn = connectDB();
        $sql = "DELETE FROM departments WHERE DepartmentID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
}


function isDepartmentExist($id)
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM departments WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_fetch_row($result)[0];
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $count > 0;
}
function searchDepartments($keyword)
{
    $conn = connectDB();
    $sql = "SELECT * FROM departments WHERE name LIKE ? OR description LIKE
?";
    $keyword = "%$keyword%";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $keyword, $keyword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $departments = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $departments[] = $row;
    }
}
