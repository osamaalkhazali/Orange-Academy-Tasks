<?php
  session_start();

  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) {
    session_destroy();
    header("Location: sessions1.php");
    exit;
  }

  $_SESSION['LAST_ACTIVITY'] = time();
?>
<h1>Session Time : 10 Seconds</h1>