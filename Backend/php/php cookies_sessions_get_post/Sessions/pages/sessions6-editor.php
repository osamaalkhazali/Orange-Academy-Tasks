<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] === 'editor') {
    echo 'Welcome, ' . $_SESSION['username'] . '! You are logged in as an editor.';
} else {
  header('Location: sessions6.php');
  exit;
}
?>
