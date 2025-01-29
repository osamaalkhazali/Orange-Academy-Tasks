// 1.Create a function that will display the smallest value in the array.
function smallest(arr) {
  let smallest = arr[0];
  for (let num of arr) {
    if (num < smallest) {
      smallest = num;
    }
  }
  return console.log(smallest);
}
smallest([30, 45, 60, 7 , 8])


// 2. Function that will return your string in Alphabetical order 
function alphaOrder(text) {
  return console.log(text.split("").sort().join(""));
}
alphaOrder("hello")


// 3. In mathematics, the factorial of a non-negative integer n, denoted by n! is the product of all 
// positive integers less than or equal to n. In simple terms, the Factorial of 8 is solved like this: 

function factorial(num) {
  if (num === 0) return 1;
  if ( num < 0) return 'No factorial for negative numbers';
  let result = 1;
  for (let i = 1; i <= num; i++) {
    result *= i;
  }
  return result
}
console.log(factorial(8));

// 4. A Write a function that lets you know if a number is Even or Odd . 
function oddOrEven(number) {
  number % 2 === 0 ? console.log("Even") : console.log("Odd");
}
oddOrEven(7)

// 5. Remove all Odd number(s) in an array and return a new array that contains Even numbers only.
function removeOdd(arr) {
  return arr.filter((num) => num % 2 === 0);
}
console.log(removeOdd([1, 2, 3, 4, 5]));

// 6. Create a function that takes in an array as an argument, checks the data type of each 
// element, and removes any elements that are strings. The function should return the modified 
// array. 

function removeString(arr) {
  return arr.filter((item) => typeof(item) !== "string");
}
console.log(removeString([1, "2", 3, "4", 5]));


// 7. Return the sum of a number going back to it's root. In other words, the function will work like this:

function sum(num) {
  let sum = 0;
  for (let i = 0; i <= num; i++) {
    sum += i;
  }
  return sum
}
console.log(sum(8));

// 8. Create a function that will accept an array and do the following: 
// ● Get the lowest element 
// ● Get the highest element 
// ● Get the length of array 
// ● Get the Average of all element; 
// ● Store these criteria in a new array

function doAll(arr) {
  let lowest = arr[0] , highest = arr[0] , length = arr.length , average , sum = 0;
  for ( let num of arr) {
    if (num < lowest) {
      lowest = num;
    } 
  }
  for ( let num of arr) {
    if (num > lowest) {
      highest = num;
    } 
  }
  for ( let num of arr) {
    sum += num;
  }
  average = sum / length;
  return console.log([lowest , highest , length , average]);
}
doAll([7, 13, 3, 77, 100])

// 9. Convert the given number to a Roman Numeral

function toRoman(num) {
  let romans = [
    { value: 1000, numeral: 'M' },
    { value: 900, numeral: 'CM' },
    { value: 500, numeral: 'D' },
    { value: 400, numeral: 'CD' },
    { value: 100, numeral: 'C' },
    { value: 90, numeral: 'XC' },
    { value: 50, numeral: 'L' },
    { value: 40, numeral: 'XL' },
    { value: 10, numeral: 'X' },
    { value: 9, numeral: 'IX' },
    { value: 5, numeral: 'V' },
    { value: 4, numeral: 'IV' },
    { value: 1, numeral: 'I' }
  ];
  let result = '';
  for (let item of romans) {
    while (num >= item.value) {
      result += item.numeral;
      num -= item.value;
    }
  }
  return result;
}
console.log(toRoman(1989));

// 10. Return how many words was given
function words(text) {
  return console.log(text.split(" ").length);
}
words('hello from CodingAcademy!')

// 11.Create function to Multiply all elements in an array by it's length
function multi(arr) {
  return arr.map((num) => num * arr.length);
}
console.log(multi([4,2,5]));

// 12. Create a function that will check if str1 ends with the characters in str2 
// Rules: 
// ● Take two strings as argument 
// ● Determine if second string matches ending of the first string 
// ● Return Boolean value

function end(str1,str2) {
  // return console.log(str1.endsWith(str2));
  // or
  return console.log(str1[str1.length - 1] === str2[str2.length - 1]);
}
end('hello from CodingAcademy!','Academy')

// 13. Create a function that will repeat each string character two times
function repeat(str) {
  let dub = str.split('').map((item) => {return item + item }).join('');
  return console.log(dub);
}
repeat('Coding')

// 14. Return the index location of an element from a given array. First argument is the array 
// you'd like to search and the second one is the element (either string/number) to look for.
function search(arr , ele) {
  return console.log(arr.indexOf(ele) + 1 );
}
search(['Ali', 'Mazen', 'Ayham', 'Murad'], 'Ali');


// 15.Create function to Return the absolute sum of all the array elements
function absoluteSum(arr ) {
  return console.log(arr.map(item => Math.abs(item)).reduce((acc ,curr) => acc + curr));
}
absoluteSum([-1, -3, -5, -4, -10, 0]);