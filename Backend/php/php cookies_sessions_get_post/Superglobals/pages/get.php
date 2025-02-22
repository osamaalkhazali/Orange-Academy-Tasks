<?php
$searchQuery = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Page</title>
</head>
<body>
    <form method="get" action="">
        <label for="search">Search:</label><br>
        <input type="text" id="search" name="search" value="<?php echo $searchQuery; ?>"><br><br>
        <input type="submit" value="Search">
    </form>

    <?php
    if (!empty($searchQuery)) {
        echo "<h2>Search Results for: " . $searchQuery . "</h2>";
    }
    ?>
</body>
</html>

