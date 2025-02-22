<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['password'] = $_POST['password'];
  
  if ($_POST['username'] == 'admin' && $_POST['password'] == 'password') {
    header('Location: sessions6-admin.php');
    exit;
  }
  if ($_POST['username'] == 'editor' && $_POST['password'] == 'password') {
    header('Location: sessions6-editor.php');
    exit;
  }
  if ($_POST['username'] == 'viewer' && $_POST['password'] == 'password') {
    header('Location: sessions6-viewer.php');
    exit;
  }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <form action="sessions6.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
