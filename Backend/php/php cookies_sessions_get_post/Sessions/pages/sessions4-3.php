<?php 
session_start();

if (isset($_POST['address']) && isset($_POST['phone'])) {
  $_SESSION['address'] = $_POST['address'];
  $_SESSION['phone'] = $_POST['phone'];
}

?>

<h1>User Details</h1>
<p>Username: <?php echo $_SESSION['username']; ?></p>
<p>Email: <?php echo $_SESSION['email']; ?></p>
<p>Address: <?php echo $_SESSION['address']; ?></p>
<p>Phone: <?php echo $_SESSION['phone']; ?></p>