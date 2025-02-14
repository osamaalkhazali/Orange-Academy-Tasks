<?php 
// 1. Write a script to generate the following paragraph 
$colors = array("red", "green", "white");
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" 
?>

<?php 
echo "<br><br>";
// 2. Write a PHP script that will display the colors as unordered list :
$colors = array( 'green', 'red','white');
echo "<ul>";
foreach ($colors as $key => $value) {
  echo "<li>$value</li>";
};
echo "</ul>";
?>

<?php 
echo "<br><br>";
// 3 Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country.
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
$country = 'Germany';
echo "The capital of " . $country . " is " . $cities[$country];
?>

<?php 
echo "<br><br>";
// 4. Write a PHP script to display the first element of the above array.
$colors = array (4 => 'white', 6 => 'green', 11=> 'red');
echo reset($colors);
?>


<?php 
echo "<br><br>";
// 5. Write a PHP script that inserts a specific new item in an array in any position.
$numbers = array(1, 2, 3, 4, 5);
array_splice($numbers, 3, 0, '$');
echo implode(', ', $numbers);

?>

<?php 
echo "<br><br>";
//  6. Write a PHP script to sort the following associative array depending on the key value [asc] :
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
sort($fruits);
echo implode(', ', $fruits);


?>

<?php 
echo "<br><br>";
// 7. Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures
$temperatures =[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$average = array_sum($temperatures) / count($temperatures);
echo "Average temperature is : " . round($average , 2) . "<br>";
sort($temperatures);
echo "List of seven lowest temperatures : ";
echo implode(', ', array_slice($temperatures, 0, 7));
echo "<br>";
echo "List of seven highest temperatures : ";
echo implode(', ', array_slice($temperatures, -7));

?>

<?php 
echo "<br><br>";
// 8. Write a PHP program to merge the following two arrays.
$array1 = array("color" => "red", 2, 4); 
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

?>

<?php 
echo "<br><br>";
// 9. Write a PHP function to change the following array's and convert all the strings to upper case.
$colors = array("red","blue", "white","yellow");
$colors = array_map('strtoupper', $colors);
print_r($colors);


?>

<?php 
echo "<br><br>";
// 10. Write a PHP function to change the following array's and convert all the strings to lower case.
$colors = array("RED","BLUE", "WHITE","YELLOW");
$colors = array_map("strtolower", $colors);
print_r($colors);
?>

<?php 
echo "<br><br>";
// 11. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
for ($i = 200; $i <= 250; $i++) {
  if ($i % 4 == 0) {
    echo $i . ", ";
  }
}

?>

<?php 
echo "<br><br>";
// 12. Write a PHP script to get the shortest/longest string length from an array.
$words = array("abcd","abc","de","hjjj","g","wer");
$shortest = min(array_map('strlen', $words));
$longest = max(array_map('strlen', $words));
echo "The shortest array length is : " . $shortest . "<br>";
echo "The longest array length is : " . $longest;

?>

<?php 
echo "<br><br>";
// 13. Write a PHP script to generate unique random 10 numbers within a specific range.
$randoms = [];
for ($i = 0; $i < 10; $i++) {
  array_push($randoms, rand(11, 20));
  $randoms = array_unique($randoms);
  if (count($randoms) < 10) {
    $i--;
  }
}
echo implode(', ', $randoms);


?>

<?php 
echo "<br><br>";
// 14. Write a PHP script that returns the lowest integer in the array that is not 0.
$array1 = array( 2, 0, 10, 12, 6);
$array1 = array_filter($array1);
$min = min($array1);
echo $min;
?>

