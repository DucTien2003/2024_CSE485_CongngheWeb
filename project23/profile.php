<?php
$users = [
    [
        "username" => "johndoe",
        "password" => password_hash("password123", PASSWORD_DEFAULT),
        "name" => "John Doe",
        "email" => "johndoe@example.com"
    ],
    [
        "username" => "ductien",
        "password" => password_hash("tien", PASSWORD_DEFAULT),
        "name" => "Duc Tien",
        "email" => "tien@gmail.com"
    ]
];

session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php'); // Redirect to login if not authenticated
}
$username = $_SESSION['user_id'];
// Retrieve user data from array using the username
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
if ($user) {
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " . $user['email'];
    echo "</br>";
    echo "<a href='logout.php'>Log out</a>";
} else {
    echo "Error: User not found.";
}
