<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colors</title>
</head>
<body>
  <div class="container mt-5">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="mb-3">
        <label for="colorSelect" >Select Background Color</label>
        <select id="colorSelect"  name="colorSelect" >
          <option value="">Choose...</option>
          <option value="red">Red</option>
          <option value="green">Green</option>
          <option value="blue">Blue</option>
        </select>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </div>
    </form>
  </div>
<?php 
  if (isset($_COOKIE["color"])) { 
    echo "<script>document.body.style.backgroundColor = '" . $_COOKIE["color"] . "';</script>";
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["colorSelect"]) && empty($_POST["colorSelect"])) {
      echo "Please select a color.";
    }
    if (isset($_POST["colorSelect"]) && !empty($_POST["colorSelect"])) {
      setcookie("color", $_POST["colorSelect"], time() + 3600);
      echo "<script>document.body.style.backgroundColor = '" . $_POST["colorSelect"] . "';</script>";
    } 
  }


?>
</body>
</html>

