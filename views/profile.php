<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: /job-portal/views/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Portal | Profile</title>
  <link rel="stylesheet" href="../assets/styles/profile.css">
</head>
<body>
  <div class="profile-container">
    <div class="profile-header">
      <img src="../assets/imgs/user.png" alt="Profile Picture" />
      <h2>Samiul Islam</h2>
      <p>samiulislam@google.com</p>
    </div>
    <form class="update-form">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" />

      <button type="submit">Update Profile</button>
    </form>
  </div>
  <script src="../assets/scripts/profile.js"></script>
</body>
</html>
