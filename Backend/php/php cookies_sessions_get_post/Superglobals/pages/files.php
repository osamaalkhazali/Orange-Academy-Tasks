<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Choose a file:</label>
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file_name = $_FILES['file']['name'];       // Original file name
        $file_tmp  = $_FILES['file']['tmp_name'];   // Temp file location
        $file_size = $_FILES['file']['size'];       // File size
        $file_type = $_FILES['file']['type'];       // File MIME type
        echo "File Name: " . htmlspecialchars($file_name) . "<br>";
        echo "File Size: " . htmlspecialchars($file_size) . " bytes<br>";
        echo "File Type: " . htmlspecialchars($file_type) . "<br>";

    }
}
?>