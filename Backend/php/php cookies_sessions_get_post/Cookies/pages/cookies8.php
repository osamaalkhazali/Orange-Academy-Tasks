
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies From Pages</title>
</head>
<body>
    <h1>انا عندي اكثر من صفحه بالاساس ف الكوكيز رح تضل مخزنه ب نفس الصفحات 
      ف رح اجيب كوكيز ال
    </h1>
    <h2>username ( task 3) و fruit ( task 6)</h2>
    
    <?php 
    if (isset($_COOKIE['username'])) {
      echo 'username: ' . $_COOKIE['username'] . '<br>';
    }
    if (isset($_COOKIE['fruit'])) {
      echo 'fruit: ' . $_COOKIE['fruit'] . '<br>';
    }
    ?>
    
</body>
</html>

