
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: session.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
    <a href="session-logout.php">Logout</a>
</body>
</html>