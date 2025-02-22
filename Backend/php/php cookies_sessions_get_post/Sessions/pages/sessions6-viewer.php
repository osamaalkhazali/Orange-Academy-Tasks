<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] === 'viewer') {
    echo 'Welcome, ' . $_SESSION['username'] . '! You are logged in as an viewer.';
} else {
  header('Location: sessions6.php');
  exit;
}
?>
