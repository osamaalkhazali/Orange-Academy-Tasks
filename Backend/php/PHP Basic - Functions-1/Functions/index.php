<?php
echo "<br><br>";
// 1. Write a PHP script to check if the inserted number is a prime number
function is_prime($n) {
    if ($n == 1) {
        return false;
    }
    if ($n == 2) {
        return true;
    }
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo is_prime(19) ? 'true' : 'false';
?>

<?php
echo "<br><br>";
//2. Write a PHP script to reverse a string
function reverse_string($str) {
    $new_str = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $new_str .= $str[$i];
    }
    // return strrev($str);
    return $new_str;
}
echo reverse_string('remove');

?>

<?php
echo "<br><br>";
// 3. Write a PHP script to check if the all string characters are lower cases
function is_lower_case($str) {
  for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] != strtolower($str[$i])) {
      return false;
    }
  }
  return true;
}
echo is_lower_case('remOve') ? 'true' : 'false';
?>

<?php
echo "<br><br>";
// 4. Write a PHP function to swap to variables?
$a = 1;
$b = 2;
function swap(&$first , &$second) {
  $saved = $first;
  $first = $second;
  $second = $saved;
}
swap($a,$b);
echo $a . $b ;
?>

<?php
echo "<br><br>";
// 5 same as 4
?>

<?php
echo "<br><br>";
//6. Write a PHP function to check if a number is an Armstrong number or not ?
function is_armstrong($num) {
  $sum = 0;
  $len = strlen($num);
  $arr = str_split($num);
  foreach ($arr as $value) {
    $sum += pow($value, $len);
  }
  return $sum == $num;
}
echo is_armstrong(407) ? 'true' : 'false';
?>

<?php
echo "<br><br>";
//7. Write a PHP function that checks whether a passed string is a palindrome or not?
$text = "Eva, can I see bees in a cave?";
function is_palindrome($str) {
  $reverses = preg_replace('/[^a-zA-Z]/', '', strtolower(strrev($str)));
  $original = preg_replace('/[^a-zA-Z]/', '', strtolower($str));
  if ($reverses == $original) {
  return true;
  }
  return false;
}
echo is_palindrome($text) ? 'is palindrome': 'is not palindrome';

?>

<?php
echo "<br><br>";
// 8. Write a PHP function to remove duplicates from an array ?
function dubs($arr) {
  $unique = array_unique($arr);
  echo implode(', ', $unique);
}

dubs([1,1,1,1])
?>

