<?php
/* 1. Write a PHP script to: a. Convert the entered string to uppercase. b. Convert the entered string to lowercase. c. Make the first letter of the string uppercase. d. Make the first letter of each word capitalized. */
$text = "hello world";
echo strtoupper($text) . "<br>";  
echo strtolower($text) . "<br>";
echo ucfirst($text) . "<br>";
echo ucwords($text) . "<br>";
?>

<?php
echo "<br><br>";
// 2. Write a PHP script splitting the following numeric string to be a date format.
$numbers = "085119";
echo substr(chunk_split($numbers, 2, ":") , 0, -1) . "<br>";
// other way
echo substr($numbers, 0, 2) . ":" . substr($numbers, 2, 2) . ":" . substr($numbers, 4, 2) . "<br>";
?>

<?php
echo "<br><br>";
//3. Write a PHP script to check whether the sentence contains a specific word.
$text = "I am a full stack developer at orange coding academy"; 
$word = "orange";
if (strpos($text, $word) !== false) {
    echo "The word '$word' is found in the sentence.";
} else {
    echo "The word '$word' is not found in the sentence.";
}
?>

<?php
echo "<br><br>";
// 4. Write a PHP script to extract the file name from the URL.
$text = 'www.orange.com/index.php';
echo basename($text) . "<br>";

?>

<?php
echo "<br><br>";
// 5. Write a PHP script to extract the username from the following email address.
$text = 'osama@gmail.com';
echo strstr($text, '@', true) . "<br>";

?>

<?php
echo "<br><br>";
// 

?>

<?php
echo "<br><br>";
// 6. Write a PHP script to get the last three characters from the string.
$text = 'info@orange.com';
echo substr($text, -3 ) . "<br>";
?>

<?php
echo "<br><br>";
// 7. Write a PHP script to generate simple random passwords [do not use rand () function] from a given string.
$text = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($text), 0, 7) . "<br>";

?>

<?php
echo "<br><br>";
// 8. Write a PHP script to replace the first word of the sentence with another word.
$text ='That new trainee is so genius.';
$word = 'Our';
$firstWord = strstr($text, ' ', true) ;
echo str_replace($firstWord, $word, $text) . "<br>";
?>

<?php
echo "<br><br>";
// 9. Write a PHP script to find the first character that is different between two strings.
$text1 = 'dragonball';
$text2 = 'dragonboll';
$length = strspn($text1 ^ $text2, "\0");
echo $length . substr($text2, $length, 1) . substr($text1, $length , 1) . "<br>";

?>

<?php
echo "<br><br>";
// 10. Write a PHP script to put a string in an array, use the (var_dump) to view the array.
$str = "Twinkle, twinkle, little star.";
$arr = explode(" ", $str);
var_dump($arr);

?>

<?php
echo "<br><br>";
// 11. Write a PHP script to print the next letter of the inputted letter.
$text = 'd';
echo chr(ord($text) + 1) . "<br>";
?>

<?php
echo "<br><br>";
// 12. Write a PHP script to insert a string at the specified position in a given string.
$text = 'The brown fox';
$insert = 'quick';
echo substr_replace($text, $insert . ' ' , 4, 0) . "<br>";
// other solution
echo strstr($text, ' ', true) . ' ' . $insert . ' ' . substr($text, 4) . "<br>";
// first word
echo strstr($text, ' ', true)
?>

<?php
echo "<br><br>";
// 13. Write a PHP script to remove zeroes from the given number.
$number = '000547023.24';
echo str_replace('0', '', $number) . "<br>";

?>

<?php
echo "<br><br>";
// 14. Write a PHP script to remove part of a string.
$text = 'The quick brown fox jumps over the lazy dog';
echo str_replace('fox', '', $text) . "<br>";
// or
$foxPos = strpos($text, 'fox') ;
$foxLen = strlen('fox');
echo substr($text , 0 , $foxPos) . substr($text, ($foxPos + $foxLen)) . "<br>";
?>

<?php
echo "<br><br>";
// 15. Write a PHP script to remove trailing dashes from a string.
$text = 'The quick brown fox jumps over the lazy dog-------------------------';
echo rtrim($text, '-') . "<br>";

?>

<?php
echo "<br><br>";
// 16. Write a PHP script to remove Special characters from the following string.
$text = '\"\1+2/3*2:2-3/4*3';
echo preg_replace('/[^a-zA-Z0-9]/', '', $text) . "<br>";

?>

<?php
echo "<br><br>";
// 17. Write a PHP script to select first 5 words from the following string.
$text = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $text), 0, 5)) . "<br>";

?>

<?php
echo "<br><br>";
// 18. Write a PHP script to remove comma(s) from the following numeric string.
$numbers = '2,543.12';
echo str_replace(',', '', $numbers) . "<br>";

?>

<?php
echo "<br><br>";
// 19. Write a PHP script to print letters from 'a' to 'z'.
for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i) . " ";
}

?>

