<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
  if ($_POST['username'] == 'admin' && $_POST['password'] == 'password') {
    session_regenerate_id();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['ip_address'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
    header('Location: sessions9.php');
    exit;
  } else {
    echo 'Invalid username or password!';
  }
}

if (isset($_SESSION['username'])) {
  if ($_SESSION['ip_address'] != $_SERVER['REMOTE_ADDR'] || $_SESSION['user_agent'] != $_SERVER['HTTP_USER_AGENT']) {
    session_destroy();
    header('Location: sessions9.php');
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
  <form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
