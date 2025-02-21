<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz</title>
</head>
<body>
  <h1>Quiz</h1>
  <form action="cookies10.php" method="post">
    <p>What is the capital of France?</p>
    <input type="radio" name="q1" value="Paris"> Paris
    <input type="radio" name="q1" value="London"> London
    <input type="radio" name="q1" value="Berlin"> Berlin
    <br><br>

    <p>What is the largest planet in our solar system?</p>
    <input type="radio" name="q2" value="Jupiter"> Jupiter
    <input type="radio" name="q2" value="Saturn"> Saturn
    <input type="radio" name="q2" value="Uranus"> Uranus
    <br><br>

    <p>What is the largest living species of lizard?</p>
    <input type="radio" name="q3" value="Komodo dragon"> Komodo dragon
    <input type="radio" name="q3" value="Saltwater crocodile"> Saltwater crocodile
    <input type="radio" name="q3" value="Black mamba"> Black mamba
    <br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>




<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $answers = array(
    "q1" => "Paris",
    "q2" => "Jupiter",
    "q3" => "Komodo dragon"
  );
  $score = 0;
  foreach ($answers as $question => $correctAnswer) {
    if (isset($_POST[$question]) && $_POST[$question] == $correctAnswer) {
      $score++;
    }
  }
  setcookie("score", $score, time() + 3600);
  echo "Your score: " . $score . " out of 3";
} elseif (isset($_COOKIE["score"])) {
  echo "Your score: " . $_COOKIE["score"] . " out of 3";
}

?>