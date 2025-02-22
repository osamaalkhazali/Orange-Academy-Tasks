<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
  if ($_POST['username'] == 'admin' && $_POST['password'] == 'password') {
    $_SESSION['username'] = $_POST['username'];
    header('Location: sessions1-protected.php');
    exit;
  } else {
    echo 'Invalid username or password!';
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
