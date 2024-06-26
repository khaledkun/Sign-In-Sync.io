<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // You Can Change the Page Title as you like
    $pageTitle = "Employee Dashboard";
    // Include the Template
    include '../Shared/Templates/MetaTags.php';    
    ?>
    <link rel="stylesheet" href="<?php echo $SettingsPath; ?>">
</head>
<body>
<!-- Here was the Navbar -->
<!-- Include the navbar -->
    <?php include $EmpDashboardLayout; ?>
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