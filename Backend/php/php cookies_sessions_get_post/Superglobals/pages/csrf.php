
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->
<!-- انا مش فاهم شي من هاظ التاسك هي حل chatgpt -->


<?php
session_start();

// Regenerate session ID to prevent fixation attacks
session_regenerate_id(true);

// Generate and store CSRF token if it doesn't exist
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if CSRF token is provided
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("Invalid CSRF token!");
    }

    // Process the form
    echo "Form submitted successfully!";

    // Regenerate CSRF token after successful submission
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Form</title>
</head>
<body>
    <form method="post" action="">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
        <label for="data">Enter Data:</label><br>
        <input type="text" id="data" name="data" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
