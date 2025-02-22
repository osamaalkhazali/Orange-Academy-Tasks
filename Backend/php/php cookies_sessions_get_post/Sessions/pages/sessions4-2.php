<?php 
session_start();

if (isset($_POST['username']) && isset($_POST['email'])) {
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['email'] = $_POST['email'];
}



?>

<h1>Step 2</h1>
<form action="sessions4-3.php" method="post">
<input type="text" name="address" placeholder="Address">
<input type="number" name="phone" id="phone" placeholder="Phone">
<input type="submit" value="Next">
</form>