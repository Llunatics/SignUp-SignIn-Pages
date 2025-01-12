<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body class="home-body">
        <div class="topbar">
            <h4>Andiko Ramadani</h4>
        </div>
        
        <div class="welcome-message">
            Welcome <?php echo htmlspecialchars($_SESSION['username']); ?>!
        </div>
        <a href="logout.php" class="logout-link">Logout</a>
    </body>
</html>
