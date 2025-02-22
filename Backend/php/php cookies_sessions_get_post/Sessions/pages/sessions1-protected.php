<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: sessions1.php');
    exit;
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: sessions1.php');
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="post">
    <input type="submit" name="logout" value="Logout">
</form>
</body>
</html>