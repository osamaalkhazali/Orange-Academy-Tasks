<?php
  // Set a secure HTTP-only cookie
  setcookie('secure_data', 'This is secure', [
    'expires' => time() + 3600,
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
  ]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Secure Cookie Test</title>
</head>
<body>
  <h1>Secure Cookie Test</h1>
</body>
</html>
