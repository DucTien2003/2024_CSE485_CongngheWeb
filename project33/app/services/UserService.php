<?php
require_once APP_ROOT . '/app/models/User.php';
require_once APP_ROOT . '/app/config/database.php';

class UserService
{
    public function getAllUsers()
    {
        $conn = connectDB();
        $users = [];
        if ($conn) {
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $user = new User($row);
                $users[] = $user;
            }
            mysqli_free_result($result);
            return $users;
        } else {
            return [];
        }
    }

    public function getUserByEmployeeId($id)
    {
        $conn = connectDB();
        $sql = "SELECT * FROM users WHERE EmployeeID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = new User(mysqli_fetch_assoc($result));
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        return $user;
    }

    public function getUserByUsername($username)
    {
        $conn = connectDB();
        $sql = "SELECT * FROM users WHERE Username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = new User(mysqli_fetch_assoc($result));
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        return $user;
    }

    public function addUser($username, $password, $id, $role)
    {
        $conn = connectDB();
        $sql = "INSERT INTO users (Username, Password, EmployeeID, Role) VALUES (?, ?,
    ?, ?)";
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $hashed_password = $password;
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param(
            $stmt,
            "ssis",
            $username,
            $hashed_password,
            $id,
            $role
        );
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function updateUserByEmployeeId($id, $password, $role)
    {
        $conn = connectDB();
        $sql = "UPDATE users SET Password = ?, Role = ? WHERE
    EmployeeID = ?";
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $hashed_password = $password;
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param(
            $stmt,
            "ssi",
            $hashed_password,
            $role,
            $id
        );
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function deleteUserByEmployeeId($id)
    {
        $conn = connectDB();
        $sql = "DELETE FROM users WHERE EmployeeID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function deleteUserByDepartmentId($id)
    {
        $conn = connectDB();
        $sql = "DELETE FROM users WHERE EmployeeID IN (SELECT EmployeeID FROM employees WHERE DepartmentID = ?);";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
}






function isUserExist($id)
{
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_fetch_row($result)[0];
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $count > 0;
}
function login($username, $password)
{
    $conn = connectDB();
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
}
