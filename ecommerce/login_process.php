<?php
session_start();
include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM customers WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['email'] = $email;
        header('Location: dashboard.php');
    } else {
        echo "Invalid email or password";
    }
} else {
    echo "User not found";
}

$conn->close();
?>
