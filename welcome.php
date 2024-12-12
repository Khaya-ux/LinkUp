<?php
// Retrieve the username from the form
$username = htmlspecialchars($_POST['username']); // Protect against XSS attacks

// Display the welcome page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | LinkUp</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo-container">
                <img src="linkup-logo.png" alt="LinkUp Logo" class="logo-img">
                <h1 class="logo">LinkUp</h1>
            </div>
        </div>
    </header>
    <main class="welcome-container">
        <h2>Welcome to LinkUp, <?php echo $username; ?>!</h2>
        <p>We’re excited to have you join our community of entrepreneurs. Start exploring and connecting now!</p>
        <a href="index.html" class="btn btn-primary">Go to Homepage</a>
    </main>
</body>
</html>
