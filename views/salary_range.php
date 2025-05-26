<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: /job-portal/views/login.php");
    exit;
}
?>