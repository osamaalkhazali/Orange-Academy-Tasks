<?php 
session_start();

echo "<form action='' method='post'>";
echo "<input type='submit' name='clear' value='Clear Session'>";
echo "</form>";

if(isset($_POST['clear'])) {
session_destroy();
header("Location: sessions8.php");
exit;
}


$questions = array(
  array(
    "id" => 1,
    "question" => "What is the capital of France?",
    "choices" => array(
      "A) Berlin",
      "B) Paris",
      "C) London"
    ),
    "answer" => "B) Paris"
  ),
  array(
    "id" => 2,
    "question" => "What is the largest planet in our solar system?",
    "choices" => array(
      "A) Earth",
      "B) Saturn",
      "C) Jupiter"
    ),
    "answer" => "C) Jupiter"
  ),
  array(
    "id" => 3,
    "question" => "What is the smallest country in the world?",
    "choices" => array(
      "A) Vatican City",
      "B) Monaco",
      "C) Nauru"
    ),
    "answer" => "A) Vatican City"
  )
  );
  
  
  $currentQuestion = isset($_SESSION['currentQuestion']) ? $_SESSION['currentQuestion'] : 1;
  $score = isset($_SESSION['score']) ? $_SESSION['score'] : 0;
  
  
if (isset($_POST['choice'])) {
  if ($_POST['choice'] == $questions[$currentQuestion - 1]["answer"]) {
    $score++;
    $_SESSION['score'] = $score;  
  }
  $currentQuestion++;
  $_SESSION['currentQuestion'] = $currentQuestion ;
  

    
  
}
  if ($currentQuestion > count($questions)) {
    echo "Quiz completed! Your score is: " . $score . " out of " . count($questions);
    exit;
  } else {
    echo "<form action='' method='post'>";
      echo "<h3>Question " . $questions[$currentQuestion - 1]["question"] . "</h3>";
      foreach ($questions[$currentQuestion - 1]["choices"] as $choice) {
        echo "<input type='radio' name='choice' value='" . $choice . "'>" . $choice . "<br>";
      }
      echo "<input type='submit' value='Next'>";
      echo "</form>";
    
  }



?>


