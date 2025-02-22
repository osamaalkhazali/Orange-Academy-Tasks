<?php 
session_start();
$timeVisited = isset($_SESSION['timeVisited']) ? $_SESSION['timeVisited'] : time();
$_SESSION['timeVisited'] = $timeVisited;

echo "You have visited this page at " . date("Y-m-d H:i:s", $timeVisited);
echo "<br>";
echo "Your IP address is " . $_SERVER['REMOTE_ADDR'];
?>