<?php

  if (!isset($_COOKIE['fruit'])) {
    setcookie('fruit', 'apple', time() + 3600);
    header('Location: cookies6.php');
    exit;
  }

  if (isset($_COOKIE['fruit'])) {
    $cookieStatus = 'Cookie is set';
  }
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('fruit', '', time() - 3600);
    $cookieStatus = 'Cookie deleted';
  }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Cookies</title>
</head>
<body>
    <form action="cookies6.php" method="post">
    <button>Delete Fruit Cookie</button>
  </form>
  <h1><?php echo isset($cookieStatus) ? $cookieStatus : ''; ?></h1>
</body>
</html>