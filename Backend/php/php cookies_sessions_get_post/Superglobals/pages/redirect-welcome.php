
<?php
$firstName = isset($_GET['first_name']) ? htmlspecialchars($_GET['first_name']) : 'Guest';
$lastName = isset($_GET['last_name']) ? htmlspecialchars($_GET['last_name']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $firstName . ' ' . $lastName; ?>!</h1>
</body>
</html>

