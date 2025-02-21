<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookie Expiry Experiment</title>
</head>
<body>
  <?php
    if (isset($_COOKIE["expire"])) {
      echo "Cookie value: " . $_COOKIE["expire"] . "<br>";
    } else {
      echo "Cookie has expired or does not exist.<br>";
    }
    
    // Set cookie
    if (!isset($_COOKIE["expire"])) {
      setcookie("expire", "Hello, cookie!", time() + 60);
    }
  ?>
</body>
</html>
