<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    if (!isset($_COOKIE['user_level'])) {
      setcookie('user_level', 'Entry', time() + 3600);
      header('Location: cookies9.php');
      exit;
    }
    
    if (isset($_COOKIE['user_level'])) {
      echo 'Current User Level: ' . $_COOKIE['user_level'] . '<br>';
    }
    if (isset($_POST['user_level'])) {
      setcookie('user_level', $_POST['user_level'], time() + 3600);
      echo 'User Level updated to: ' . $_POST['user_level'] . '<br>';
    }
  ?>
  <form action="cookies9.php" method="post">
    <label for="user_level">Update User Level:</label>
    <input type="text" name="user_level" id="user_level">
    <input type="submit" value="Update">
  </form>
</body>
</html>
