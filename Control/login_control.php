<?php
session_start(); 
include "../Model/db.php";

$id = $_POST["id"];
$pass = $_POST["password"];

$conn = createCon();
$result = checkLogin($conn, $id, $pass);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['id'] = $id; 
    setcookie("id", $id, time() + (86400 * 1), "/"); 
    header("Location: ../View/dashboard_new.php"); 
} else {
    echo "<h2>Invalid ID or Password</h2>";
}

closeCon($conn);
?>
