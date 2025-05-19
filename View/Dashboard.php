<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../Asset/Dashboard.css">
</head>
<body>
    <div class="top-bar">
        <a href="LandingPage.html" class="btn green">Home</a>
        <a href="login.html" class="btn red" onclick="performLogout()">Logout</a>
    </div>

    <center>
        <fieldset class="dashboard-container">
            <h1>User Dashboard</h1>

            <!-- Quick Actions -->
            <table class="quick-actions">
                <tr>
                    <td><a href="profile.html" class="action-link skyblue">Profile Settings</a></td>
                    <td><a href="ResumeUpload.html" class="action-link maroon">Upload Resume</a></td>
                    <td><a href="appointments.html" class="action-link green">My Appointments</a></td>
                    <td><a href="InterviewSchedule.html" class="action-link gold">Schedule Interview</a></td>
                </tr>
                <tr>
                    <td><a href="CareerResources.html" class="action-link purple">Career Resources</a></td>
                    <td><a href="CompanyProfiles.html" class="action-link orange">Company Profiles</a></td>
                </tr>
            </table>

            <!-- Account Summary -->
            <fieldset class="summary-section">
                <legend>Account Summary</legend>
                <table class="summary-table">
                    <tr><td>Member Since:</td><td>[Registration Date]</td></tr>
                    <tr><td>Last Login:</td><td>[Last Login Time]</td></tr>
                    <tr><td>Account Status:</td><td class="status-active">Active</td></tr>
                </table>
            </fieldset>

            <!-- Recent Activity -->
            <fieldset class="summary-section">
                <legend>Recent Activity</legend>
                <table class="summary-table">
                    <tr><td>➤ Last Password Change:</td><td>[2023-08-01]</td></tr>
                    <tr><td>➤ Recent Login:</td><td>[2023-08-20 14:30]</td></tr>
                </table>
            </fieldset>

            <!-- Footer -->
            <div class="footer-actions">
                <a href="Settings.html" class="btn darkgreen">Settings</a>
                <a href="Support.html" class="btn red">Support</a>
                <a href="LandingPage.html" class="btn green">Help</a>
            </div>
        </fieldset>
    </center>

    <script>
        function performLogout() {
            localStorage.removeItem('authToken');
            window.location.href = 'login.html';
        }
    </script>
</body>
</html>
