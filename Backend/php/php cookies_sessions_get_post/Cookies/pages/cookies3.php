<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      setcookie('username', $_POST['username'], time() + 3600);
      $username = isset($_POST['username']) ? $_POST['username'] : '';
    }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Username</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?php echo isset($username) ?  $username : ''; ?>">
    <input type="submit" value="Submit">
  </form>
</body>
</html>
