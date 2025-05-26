<?php
session_start();

$valid_name = 'samiul';
$valid_password = '1234';

$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';

if ($email === $valid_email && $password === $valid_password) {
    $_SESSION['name'] = $name;

    header("Location: /job-portal/views/profile.php");
    exit;
} else {
    header("Location: /job-portal/views/login.php");
    exit;
}
?>