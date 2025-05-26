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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Directory</title>
  <link rel="stylesheet" href="../assets/styles/employer_dashboard.css">
</head>
<body>

  <div class="main">
    <div class="header">
      <h2>Employer Dashboard</h2>
      <div class="search-add">
        <input type="text" placeholder="Search staff...">
        <button>Add Employee</button>
      </div>
    </div>
    <div class="grid">
      <div class="card">
        <img src="../assets/imgs/user.png" alt="Employee">
        <h4>Samiul Islam</h4>
        <p>Web developer</p>
      </div>

       <div class="card">
        <img src="../assets/imgs/user.png" alt="Employee">
        <h4>Bipul Das</h4>
        <p>Web developer</p>
      </div>

       <div class="card">
        <img src="../assets/imgs/user.png" alt="Employee">
        <h4>Atik Khan</h4>
        <p>Web developer</p>
      </div>
    </div>
  </div>
  <div class="profile-details">
    <h3>Samiul Islam</h3>
    <p><strong>Role:</strong> Web developer</p>
    <p><strong>Experience:</strong> 2 Years</p>
    <p><strong>Email:</strong> samiul.islam@gmail.com</p>
    <p><strong>Phone:</strong> 0175377838</p>
    <p><strong>Level:</strong> Senior</p>
    <p><strong>Salary:</strong> 800000</p>
    <p><strong>Bio:</strong> ChapaiNawabganj</p>
  </div>
</body>
</html>
