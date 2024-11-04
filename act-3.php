<?php
// Define valid users based on user type
$arrUsersList = array(
    'Admin' => array(
        'admin' => 'Pass1234',
        'renmark' => 'Pogi1234'
    ),
    'Content Manager' => array(
        'pepito' => 'manaloto',
        'juan' => 'delacruz'
    ),
    'System User' => array(
        'pedro' => 'penduko'
    )
);

// Initialize message and alert type
$message = "";
$alertType = ""; 

// Check form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Use the $_POST superglobal to get the user inputs
    $userType = $_POST['inputUserType'] ?? '';
    $username = $_POST['inputUserName'] ?? '';
    $password = $_POST['inputPassword'] ?? '';

    // Validate credentials
    if (array_key_exists($username, $arrUsersList[$userType]) && $arrUsersList[$userType][$username] === $password) {
        $message = "Welcome to the system: " . htmlspecialchars($username) . ".";
        $alertType = "success";
    } else {
        $message = "Incorrect Username / Password.";
        $alertType = "danger";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/custom-login.css">
    <title>Login</title>
</head>
<body>
    <div class="container mt-3">
        <!-- Display alert message if it exists -->
        <?php if (!empty($message)): ?>
            <div class="alert alert-<?php echo $alertType; ?> alert-dismissible fade show" style="max-width: 350px; margin: auto;">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <form method="post" class="form-signin">
                <select class="form-select mb-3" name="inputUserType" id="inputUserType" required>
                    <option value="" disabled selected>Select User Type</option>
                    <option value="Admin">Admin</option>
                    <option value="Content Manager">Content Manager</option>
                    <option value="System User">System User</option>
                </select>

                <input type="text" name="inputUserName" id="inputUserName" class="form-control mb-3" placeholder="User Name" required autofocus>
                <input type="password" name="inputPassword" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="btnSignIn">Sign In</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>
