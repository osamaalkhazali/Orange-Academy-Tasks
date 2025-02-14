<?php
// 1- Write a PHP script to see if the specified year is a leap year or not
$year = 2013;

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
  echo "$year is a leap year.";
} else {
  echo "$year is not a leap year.";
}
?>

<?php 
echo "<br>";
// 2- Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
$temperature = 27;  
if ($temperature < 20) {
  echo "Winter";
} else {
  echo "Summer";
}

?>

<?php 
echo "<br>";
// 3- Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
$x = 2;
$y = 2;

if ($x == $y) {
  echo ($x + $y) * 3;
} else {
  echo $x + $y;
}

?>

<?php 
echo "<br>";
// 4- Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
$x = 10;
$y = 10;
if ($x + $y == 30) {
  echo $x + $y;
} else {
  echo "false";
}

?>

<?php 
echo "<br>";
// 5- Write in PHP script to check if the given positive number is a multiple of 3.
$x = 20 ;
echo ($x > 0 && $x % 3 == 0) ? 'true' : 'false';

?>

<?php 
echo "<br>";
// 6- Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
$x = 50 ;
echo ($x >= 20 && $x <= 50) ? 'true' : 'false';
?>

<?php 
echo "<br>";
// 7- Write PHP script to find the largest number between the three integers
[$a , $b , $c] = [1 , 5 , 9];
echo max($a, $b, $c);
?>

<?php 
echo "<br>";
// 8- Write PHP script to calculate the monthly electricity bill according to these rules
/* a. For first 50 units – 2.50 JOD/Unit 
  b. For next 100 units – 5.00 JOD/Unit 
  c. For next 100 units – 6.20 JOD/Unit 
  d. For units above 250 – 7.50 JOD/Unit */
  
  $unit = 250;
  switch (true) {
    case ($unit > 250) :
      echo ((($unit - 250)* 7.5) + (100* 6.2)  + (100 * 5)  + (50 * 2.5) );
      break;
    case ($unit <= 250 && $unit > 150) :
      echo ((($unit - 150)* 6.2) + (100 * 5)  + (50 * 2.5) );
      break;
    case ($unit <= 150 && $unit > 50) :
      echo ((($unit - 50) * 5)  + (50 * 2.5) );
      break;
    case ($unit <= 50 && $unit > 0) :
      echo ($unit * 2.5);
      break;
  }
?>


<!-- // 9- Write php script to make a calculator, the calculator should contain the four main operations
e. Addition f. Subtraction g. Multiplication h. Division  -->

<?php
  echo "<br>";
  $number1 = 5;
  $operation = '+';
  $number2 = 5;
  switch ($operation) {
    case '+':
      $result = $number1 + $number2;
      break;
    case '-':
      $result = $number1 - $number2;
      break;
    case '*':
      $result = $number1 * $number2;
      break;
    case '/':
      $result = $number1 / $number2;
      break;
  }
  echo $result;

?>



<?php 
echo "<br>";
// 10. Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

$age = 18;
if ($age >= 18) {
  echo "Eligible";
} else {
  echo "Not eligible";
}

?>

<?php 
echo "<br>";
// 11. Write php script to check whether a number is positive, negative or zero

$number = 0;
if ($number > 0) {
  echo "Positive";  
} elseif ($number < 0) {
  echo "Negative";
} else {
  echo "Zero";
}

?>

<?php 
echo "<br>";
// 12 -Write a PHP to find the grade for the student, after calculating the average of his score in all the subject
$grades = [60,86,95,63,55,74,79,62,50];
$avg = null;
foreach ($grades as $grade) {
  $avg += $grade;
}
$avg = $avg / count($grades);
switch (true) {
  case ($avg >= 90):
    echo "A";
    break;
  case ($avg >= 80):
    echo "B";
    break;
  case ($avg >= 70):
    echo "C";
    break;
  case ($avg >= 60):
    echo "D";
    break;
  default:
    echo "F";
    break;
}
?>


