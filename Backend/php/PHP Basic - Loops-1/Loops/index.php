<?php 
// 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the
for ($i = 1; $i <= 10; $i++) {
  if ($i == 10) {
    echo $i;
  } else {
  echo $i . '-';
}
}
?>

<?php 
echo '<br>';
// 2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.
$sum = 0;
for ($i = 0; $i <= 30; $i++) {
  $sum += $i;
}
echo $sum;
?>

<?php 
echo '<br>';
// 3. Create a script to generate the following pattern, using the nested for loop.
for ($i = 65; $i <= 69; $i++) {
  for ($j = (69 - $i) ; $j >= 1 ; $j--) { 
    echo 'A';
  }
  for ($j= 65 ; $j <= $i ; $j++) { 
    echo chr($i);
  }
  echo '<br>';
}
?>

<?php 
echo '<br>';
// 4. Create a script to generate the following pattern, using the nested for loop.
for ($i = 1; $i <= 5; $i++) {
  for ($j=1; $j <= 5 - $i ; $j++) { 
    echo 1 ;
  }
  for ($j= 1 ; $j <= $i ; $j++) { 
    echo $i ;
  }
  echo '<br>';
}
?>


<?php 
echo '<br>';
// 5. Create a script to generate the following pattern, using the nested for loop.
for ($i = 1; $i <= 5; $i++) {
  for ($j= 1 ; $j <= 5 ; $j++) { 
    if ($i == $j) {
      echo $i ;
    } else {
      echo 0;
    }
  }
  echo '<br>';
}
?>

<?php 
echo '<br>';
// 6. Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.
$num = 5;
$fac = 1;
for ($i= 1 ; $i <= $num ; $i++) { 
  $fac = ($fac * $i);
}
echo  $fac;
?>

<?php 
echo '<br>';
// 7. Write a program to calculate and print the Fibonacci sequence using a for loop. Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.
$first = 0;
$second = 1;
echo $first . ', ';
echo $second . ', ';
for ($i = 2; $i <= 10; $i++) {
  $fib = $first + $second;
  $first = $second;
  $second = $fib;
  echo $fib . ', ';
}
?>

<?php 
echo '<br>';
// 8. Write a program which will count the "c" characters in the text "Orange Coding Academy".
$text = 'Orange Coding Academy';
$count = 0;
for ($i = 0 ; $i < strlen($text) ; $i++) {
  if (strtolower($text[$i]) == 'c') {$count++ ;} 
}
echo $count;
echo '<br>';
?>



<table cellpadding="3px" cellspacing="0px" border="1" > 
  <tbody>
<?php 
// 9. Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag.
for ($i = 1 ; $i <= 6 ; $i++){
  echo "<tr>";
  for($j = 1 ; $j <= 5 ; $j++ ) {
    echo "<td> $i x $j = " . ($i*$j) . "  </td>";
  }
  echo "</tr>";
}
?>
</tbody>
</table>

<?php 
echo '<br>';
// 10. Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".
for ($i = 1; $i <= 50; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "FizzBuzz";
  } elseif ($i % 3 == 0) {
    echo "Fizz";
  } elseif ($i % 5 == 0) {
    echo "Buzz";
  } else {
    echo $i;
  }
  echo '<br>';
}
?>

<?php 
echo '<br>';
// 11. Write a PHP program to generate and display the first n lines of a Floyd triangle
$n = 5;
for ($i=1; $i <= $n ; $i++) { 
  for ($j=1; $j <= $i; $j++) { 
    echo ' ' . $count++;
  }
  echo '<br>';
}
?>

<?php 
echo '<br>';
// 12. Write a PHP program to print the following pattern.
for ($i=65; $i <= 69 ; $i++) { 
  for ($z= $i; $z < 69 ; $z++) { 
    echo '.';
  }
  for ($j=65; $j <= $i; $j++) {
    echo chr($j);
  }
  echo '<br>';
}
for ($i=68; $i >= 65 ; $i--) { 
  for ($z= 69; $z > $i ; $z--) { 
    echo '.';
  }
  for ($j= 65; $j <= $i; $j++) { 
    echo chr($j);
  }
  echo '<br>';
}
?>
