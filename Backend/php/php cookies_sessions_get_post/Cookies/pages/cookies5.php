<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
</head>
<body>
  <h1>Shopping Cart</h1>
  <form action="cookies5.php" method="post">
    <input type="text" name="item" placeholder="Item Name">
    <input type="submit" name="add" value="Add to Cart">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $cart = isset($_COOKIE["cart"]) ? explode(",", ($_COOKIE["cart"])) : array();
      if (isset($_POST["item"]) && !empty($_POST["item"])) {
        array_push($cart, $_POST["item"]);
        setcookie("cart", implode(",", $cart), time() + 3600); 
      }
      echo var_dump($cart);
    }
    if (isset($_COOKIE["cart"]) && !($_SERVER["REQUEST_METHOD"] == "POST") ) {
      $cart = explode(",", $_COOKIE["cart"]);
      echo var_dump($cart);
    }

    ?>
</body>
</html>
