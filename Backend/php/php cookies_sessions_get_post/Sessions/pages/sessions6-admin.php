<?php 
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin' ) {
  echo 'Welcome, ' . $_SESSION['username'] . '! You are logged in as an admin.';
}  else {
  header('Location: sessions6.php');
  exit;
}

?>