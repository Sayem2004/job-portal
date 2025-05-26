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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Job Alert Subscription</title>
  <link rel="stylesheet" href="../assets/styles/job_alerts.css">
</head>
<body>

<div class="subscription-box">
  <h2>Subscribe to Job Alerts</h2>
  <p>Subscribe to get notifications when new job openings are published</p>

  <input type="email" placeholder="Email Address">

  <div class="form-row">
    <select>
      <option>All Job Location</option>
      <option>Dhaka</option>
      <option>Rajshahi</option>
    </select>
    <select>
      <option>All Job Category</option>
      <option>Design</option>
      <option>Development</option>
    </select>
    <select>
      <option>All Job Type</option>
      <option>Full Time</option>
      <option>Part Time</option>
    </select>
  </div>

  <label class="checkbox-label">
    <input type="checkbox"> By using this form you agree with the storage and handling of your data by this website.
  </label>

  <button type="submit">Subscribe</button>
</div>

</body>
</html>

