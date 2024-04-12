<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Settings</title>
    <link rel="stylesheet" href="Settings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="../Shared/Templates/Logo.ico" alt="Company Logo">
            <span class="logo-text">Sign In Sync</span>
        </div>
        <ul>
            <li><a href="Dashboard.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="Profile.html"><i class="fas fa-user"></i> Profile</a></li>
            <li><a href="Settings.html" class="active"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="../Dashboard/Html/login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
        <div class="footer">
            <p>&copy; 2024 Sign In Sync</p>
        </div>
     </div>
    </div>
    <form action="submit_settings.php" method="POST"> <!-- ده عشان الباك لما ييجي يبرمجه -->
    <div class="dashboard">
        <div class="header">
                <h1><i class="fas fa-cog"></i> Settings</h1>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-bell"></i> Notification Settings</h2>
            <div class="checkbox-container">
                <label class="checkbox-label">
                    <input type="checkbox" id="notification1" name="notification1">
                    Receive email notifications
                </label><br>
                <label class="checkbox-label">
                    <input type="checkbox" id="notification2" name="notification2">
                    Receive SMS notifications
                </label><br>
            </div>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-lock"></i> Security Settings</h2>
            <div class="checkbox-container">
                <label class="checkbox-label">
                    <input type="checkbox" id="security1" name="security1">
                    Enable two-factor authentication
                </label><br>
                <label class="checkbox-label">
                    <input type="checkbox" id="security2" name="security2">
                    Require strong passwords
                </label><br>
            </div>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-language"></i> Language Settings</h2>
            <div class="radio-container">
                <label class="radio-label">
                    <input type="radio" id="language1" name="language" checked value="english">
                    English
                </label><br>
                <label class="radio-label">
                    <input type="radio" id="language2" name="language" value="arabic">
                    العربية
                </label><br>
            </div>
        </div>
        <button type="submit" class="submit-button"><i class="fas fa-save"></i> Save</button>
      </div>
    </form>
</body>
</html>