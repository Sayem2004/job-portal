<?php
session_start();

$valid_name = 'admin';
$valid_password = '123456';

$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';

if ($email === $valid_email && $password === $valid_password) {
    $_SESSION['name'] = $name;

    header("Location: /job-portal/view/Dashboard.php");
    exit;
} else {
    header("Location: /job-portal/view/Login.php");
    exit;
}
?>