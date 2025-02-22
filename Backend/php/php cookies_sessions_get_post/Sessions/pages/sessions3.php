<?php
session_start();

if (isset($_POST['product_id'])) {
  $product_id = $_POST['product_id'];
  $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
  $cart[] = $product_id;
  $_SESSION['cart'] = $cart;
}

if(isset($_POST['clear'])) {
  session_destroy();
  header("Location: sessions3.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
</head>
<body>
  <?php 
  $products = array(
    array('id' => 1, 'name' => 'Product 1', 'price' => 10.99),
    array('id' => 2, 'name' => 'Product 2', 'price' => 19.99),
    array('id' => 3, 'name' => 'Product 3', 'price' => 29.99)
  );
  
  foreach ($products as $product) {
    echo "
    <form action='sessions3.php' method='post'>
      <input type='hidden' name='product_id' value='{$product['id']}'>
      <input type='submit' value='Add to Cart'>
      {$product['name']} : {$product['price']}  <br>
    </form>
    " ;
  }
  
  ?>
  
  <h1>Cart</h1>
  
  <?php 
  $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
  foreach ($cart as $product_id) {
    foreach ($products as $product) {
      if ($product['id'] == $product_id) {
        echo "{$product['name']} : {$product['price']} <br>";
      }
    }
  }
  ?>
  
  
  <form action="sessions3.php" method="post">
    <input type="submit" name="clear" value="clear">
  </form>
</body>
</html>
