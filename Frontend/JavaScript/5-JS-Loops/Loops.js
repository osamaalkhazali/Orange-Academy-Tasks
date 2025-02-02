// 1. Use a for loop to print numbers from 1 to 10 using for.  
for (let i = 1; i <= 10; i++) {
  console.log(i); 
}

// 2. Use a while loop to print numbers from 1 to 10 using while.
let i = 1;
while (i <= 10) {
  console.log(i); 
  i++;
}

// 3. Use a for loop to iterate through an array and print each element.  
let arr = [1, 2, 3, 4, 5];
for (let i = 0; i < arr.length; i++) {
  console.log(arr[i]); 
}

// 4. Use a for loop to print even numbers from 0 to 10. 
for (let i = 0; i <= 10; i++) {
  if (i % 2 === 0) {
    console.log(i); 
  }
}

// 5. Use a for loop to print the sum of numbers from 1 to 10.  
let sum = 0;
for (let i = 1; i <= 10; i++) {
  sum += i; 
}
console.log(sum);

// 6. Use a for loop to find the largest number in an array. 
let arr1 = [1, 2, 3, 4, 5];
let largest = arr1[0];
for (let i = 1; i < arr1.length; i++) {
  if (arr1[i] > largest) {
    largest = arr1[i];
  }
}
console.log(largest);

// 7. Use a for loop to find the smallest number in an array. 
let arr2 = [1, 2, 3, 4, 5];
let smallest = arr2[0];
for (let i = 1; i < arr2.length; i++) {
  if (arr2[i] < smallest) {
    smallest = arr2[i];
  }
}
console.log(smallest);

// 11. Use a for loop to find the average of numbers in an array  
let arr3 = [1, 2, 3, 4, 5];
let sum1 = 0;  
for (let i = 0; i < arr3.length; i++) {
  sum1 += arr3[i];
}
let average = sum1 / arr3.length;
console.log(average);

// 12. Use a for loop to find the factorial of a number. 
let num = 5;
let factorial = 1;
for (let i = 1; i <= num; i++) {
  factorial *= i;
}
console.log(factorial);

// 13. Use a for loop to print the Fibonacci sequence up to a given number. 
let num1 = 10;
let f0 = 0 , f1 = 1 
let fibo = [f0, f1];
let now = 0
while (now < num1 ) {
  now = f0 + f1;
  if (now > num1) {break;}
  fibo.push(now);
  f0 = f1;
  f1 = now;
}
console.log(fibo);

// 14. Use a for loop to print the prime numbers up to a given number. 
let num2 = 20;
let prime = [];
for (let i = 2; i <= num2; i++) {
  let isPrime = true;
  for (let j = 2; j < i; j++) {
    if (i % j === 0) {
      isPrime = false;
      break;
    }
  }
  if (isPrime) {
    prime.push(i);
  }
}
console.log(prime);

// 15. Use a for loop to print a multiplication table for a given number . 
let num3 = 5;
for (let i = 1; i <= num3; i++) {
  console.log(`${num3} * ${i} = ${num3 * i}`);
}


// 16. Use a for loop to print the elements of a 2D array . 
let arr4 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
for (let i = 0; i < arr4.length; i++) {
  for (let j = 0; j < arr4[i].length; j++) {
    console.log(arr4[i][j]);
  }
}

// 17. Use a for loop to print the elements of an array in reverse order.  
let arr5 = [1, 2, 3, 4, 5];
for ( let i = 0 ; i < arr5.length ; i++) {
  console.log(arr5[arr5.length - 1 - i]);
}

// 18. Use a for loop to print the elements of an array in a specific range. 
function range(arr , start , end) {
  for (let i = start; i <= end ; i++) {
    console.log(arr[i]);
  }
}
range([1, 2, 3, 4, 5] , 2 , 4);


// 19. Use a for loop to print the elements of an array with a specific step. 
function step(arr , step ) {
  for (let i = 0; i < arr.length ; i = i + step) {
    console.log(arr[i]);
  }
}
step([1, 2, 3, 4, 5 , 6 , 5] , 2 );

// 20. Use a for loop to check if a number is in an array. 
function check(arr , num) {
  for (let i = 0 ; i < arr.length ; i++) {
    if (arr[i] === num) return console.log(true);
  }
  return console.log(false);
}
check([1, 2, 3, 4, 5] , 4);


// 21. Use a for loop to find the frequency of a number in an array. 
function frequency(arr , num) {
  let frequency = 0
  for (let i = 0 ; i < arr.length ; i++) {
    if (arr[i] === num ){ frequency++;}
  }
  return console.log(frequency);
}
frequency([1, 2, 1, 3, 2, 1], 1);


let arrO = [[1, 2, 3], [4, 5, 6], [7, 8, 9], [7, 8, 9]];
for (let i = 0; i < (arrO.length * arrO[0].length); i++) {
  console.log(arrO[Math.floor(i / arrO[0].length ) ][i % arrO[0].length]); 
} 

