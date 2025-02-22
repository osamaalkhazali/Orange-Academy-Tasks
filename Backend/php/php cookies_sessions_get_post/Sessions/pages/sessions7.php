<?php
session_start();

if (isset($_POST['theme']) && isset($_POST['language'])) {
  $_SESSION['theme'] = $_POST['theme'];
  $_SESSION['language'] = $_POST['language'];
}

$theme = isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light';
$language = isset($_SESSION['language']) ? $_SESSION['language'] : 'English';

?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Preferences</title>
  <style>
    body {
      background-color: <?php echo ($theme == 'dark' ? '#333' : '#fff'); ?>;
      color: <?php echo ($theme == 'dark' ? '#fff' : '#333'); ?>;
    }
  </style>
</head>
<body>
  <h1><?php echo $language == 'English' ? 'Hello' : 'مرحبا'; ?></h1>
  <form action="sessions7.php" method="post">
    <label for="theme">Theme:</label>
    <select name="theme" id="theme">
      <option value="light" <?php echo ($theme == 'light' ? 'selected' : ''); ?>>Light</option>
      <option value="dark" <?php echo ($theme == 'dark' ? 'selected' : ''); ?>>Dark</option>
    </select>
    <br>
    <label for="language">Language:</label>
    <select name="language" id="language">
      <option value="English" <?php echo ($language == 'English' ? 'selected' : ''); ?>>English</option>
      <option value="Arabic" <?php echo ($language == 'Arabic' ? 'selected' : ''); ?>>Arabic</option>
    </select>
    <br>
    <input type="submit" value="Save">
  </form>
