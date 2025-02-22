<?php
$name = isset($_REQUEST['name']) ? htmlspecialchars(trim($_REQUEST['name'])) : '';
$message = isset($_REQUEST['message']) ? htmlspecialchars(trim($_REQUEST['message'])) : '';

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($name) && !empty($message)) {
        echo "<h2>Contact Form Submitted</h2>";
        echo "<p><strong>Name:</strong> " . $name . "</p>";
        echo "<p><strong>Message:</strong> " . $message . "</p>";
    } else {
        echo "<p style='color:red;'>Both name and message are required.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <form method="get" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"><?php echo $message; ?></textarea><br><br>
        <input type="submit" value="Submit">
    </form>


</body>
</html>

