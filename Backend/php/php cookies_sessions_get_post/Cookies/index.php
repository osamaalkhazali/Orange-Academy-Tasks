<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php for ($i = 1; $i <= 10; $i++): ?>
    <a href="./pages/cookies<?php echo $i; ?>.php">Cookies Task <?php echo $i; ?></a><br>
  <?php endfor; 
  ?>
</body>
</html>
