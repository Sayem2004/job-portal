<?php
session_start();
if (isset($_SESSION['name'])) {
  header('Location: /job-portal/views/profile.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Portal | Login</title>

</head>
<body>

  <div>
    <h2>Login</h2>
    <form action="/job-portal/controller/auth.php" method="POST" >
      <input type="text" id="name" name="name" placeholder="Enter your name" />
      <input type="password" id="password" name="password" placeholder="Enter your Password" />
      <?php
        if (isset($_GET['error'])) {
          echo "<p style='color:red;'>Invalid username or password</p>";
        }
        ?>
      <button type="submit">Login</button>
    </form>
  </div>

</body>
</html>
