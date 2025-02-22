<?php 
session_start();

if (isset($_POST['flash'])) {
  $_SESSION['flash'] = $_POST['flash'];
  header('Location: sessions2.php');
  exit;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flash</title>
</head>
<body>
  <form action="sessions2.php" method="post">
    <input type="text" name="flash" placeholder="Flash Message">
    <input type="submit" value="Submit">  
  </form>
  <?php 
  if (isset($_SESSION['flash'])) {
    echo $_SESSION['flash'];
    unset($_SESSION['flash']);
  }
  
  ?>
  
</body>
</html>