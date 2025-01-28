// 1. Write a script to print out all even numbers between 1 and 50, twice. Use 1 for loop and 1 while loop. 
let j = 1
while (j <= 2) {
    for (let i = 1; i <= 50; i++) {
    if (i % 2 === 0) {
      console.log(i);
    }
  }
  j++;
}



// 2. Try solving the previous exercise using a single for loop. 
let y = 1
for (let i = 1; i <= 100 ; i++) {
    if (i % 2 === 0 && i <= 50) {
      console.log(i);
    } else if (i % 2 === 0 && i > 50) {
      console.log(i - 50);
    }
  }
  
// 3. Resolve Exercise 1 so that one loop prints out even numbers and the second prints out the odd ones.  
  let k = 1
  while (k <= 2) {
      for (let i = 1; i <= 50; i++) {
        if ( k === 1) {
          if (i % 2 === 0) {
            console.log(i);
          }
        } else if (k === 2) {
          if (i % 2 !== 0) {
            console.log(i);
          }
        }
    }
    k++;
  }
  
//   4. Fizz-Buzz! Write a script that does the following:  
//     ● Counts from 1 to 100 and prints out something for each number:  
//     ○ If the number is divisible by 3, print "Fizz"  
//     ○ If the number is divisible by 5, print "Buzz"  
//     ○ If the number is divisible by both 3 and 5, print "FizzBuzz"  
//     ○ If the number does not meet any of the above conditions, just print the number Output:  
//     1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, Fizz Buzz, 16, 17, Fizz, 
//     19, Buzz, Fizz, 22, 23, Fizz, Buzz, 26, Fizz, 28, 29, Fizz Buzz, 31, 32, Fizz, 34, Buzz, 
//     Fizz, ...  

for (let i = 1; i <= 100; i++) {
    if (i % 3 === 0 && i % 5 === 0) {
      console.log("FizzBuzz");
    } else if (i % 3 === 0) {
      console.log("Fizz");
    } else if (i % 5 === 0) {
      console.log("Buzz");
    } else {
      console.log(i);
    }
  }
  
  // 5. Rewrite the script with a function so that each iteration will trigger a function call.  

  function fizzBuzz(num) {
    for (let i = 1; i <= 100; i++) {
      if (i % 3 === 0 && i % 5 === 0 && i === num) {
        console.log("FizzBuzz");
      } else if (i % 3 === 0 && i === num) {
        console.log("Fizz");
      } else if (i % 5 === 0 && i === num) {
        console.log("Buzz");
      } else if (i === num) {
        console.log(i);
      }
    }
  }
  fizzBuzz(3)
  fizzBuzz(19)
  fizzBuzz(5)
  fizzBuzz(15)
  
  
  // 6. Create a recursive solution. A FizzBuzz function calls itself to continue the series. 
  let i = 1;
  function recFizzBuzz(range) {
    if (i <= range) {
      if (i % 3 === 0 && i % 5 === 0) {
        console.log("FizzBuzz");
        i++;
      } else if (i % 3 === 0) {
        console.log("Fizz");
        i++;
      } else if (i % 5 === 0) {
        console.log("Buzz");
        i++;
      } else {
        console.log(i);
        i++;
      }
      recFizzBuzz(range);
    }
  }
  recFizzBuzz(100)
  
  
  // 7. Write a function that takes a number and converts it to certain banknotes
  let bankNotes = []
  function banknotes(num , arr) {
    for (let i = 0; i < arr.length; i++) {
      function innerFunction() {
        if (num >= arr[i]) {
          bankNotes.push(arr[i]);
          num -= arr[i];
          innerFunction();
        } 
      }
      innerFunction();
    }
    return console.log(bankNotes);
  }
  banknotes(57, [25, 10, 5, 1]) 
  
  // 8. Write a function that counts the existence of a specific character within a string, despite the case. 

  function check(text , letter) {
    text = text.toLowerCase();
    letter = letter.toLowerCase();
    let count = 0
    for (let i = 0; i < text.length; i++) {
    if (text[i] === letter) {
      count++;
    } 
    }
    return console.log(count) ;
  }
  check("Coding Academy by Orange" , "o")
  
// 9. Write for loops that accomplish the following tasks:
  
  // a. Print the numbers 0 - 20, one number per line.  
  for (let i = 0; i <= 20; i++) {
    console.log(i);
  }
  // b. Print only the ODD values from 3 - 29, one number per line. 
  for (let i = 3; i <= 29; i++) {
    if (i % 2 !== 0) {
      console.log(i);
    }
  }
  // c. Print the EVEN numbers 12 down to -14 in descending order, one number per line.  
  for (let i = 12; i >= -14; i--) {
    if (i % 2 === 0) {
      console.log(i);
    }
  }
  // d. Print the numbers 50 down to 20 in descending order, but only if the numbers are multiples of 3.
  for (let i = 50; i >= 20; i--) {
    if (i % 3 === 0) {
      console.log(i);
    }
  }
  

// 10. Initialize two variables to hold the string 'CodingAcademy' and the array [7, 500, 'KH404', 'black', 36], then construct for loops to accomplish the following tasks:  
  let text1 = "CodingAcademy";
  let arr1 = [7, 500, 'KH404', 'black', 36];
  //  e. Print each element of the array to a new line.
  for (let i = 0; i < arr1.length; i++) {
    console.log(arr1[i]);
  }
  // f. Print each string character in reverse order to a new line. 
  for (let i = text1.length - 1; i >= 0; i--) {
    console.log(text1[i]);
  }


// 11. Construct a for loop that sorts the array [7, 23, 18, 9, -13, 38, -10, 12, 0, 124] into two new arrays: 
// Define an empty evens array to hold the even numbers and an odds array for the odd numbers. In 
// the loop, determine if each number is even or odd, then put that number into evens or odds, as 
// appropriate.  

let arr2 = [7, 23, 18, 9, -13, 38, -10, 12, 0, 124];
let evens = [];
let odds = [];
for (let i = 0; i < arr2.length; i++) {
  if (arr2[i] % 2 === 0) {
    evens.push(arr2[i]);
  } else {
    odds.push(arr2[i]);
  }
}
console.log(evens);
console.log(odds);


// 12. Write the code to create meals using elements from these arrays, ensuring the rules below.  
// Protein options:  
// ['chicken', 'pork', 'tofu', 'beef', 'fish', 'beans'] Grain 
// options:  
// ['rice', 'pasta', 'corn', 'potato', 'quinoa', 'crackers'] 
// Vegetable options:  
// ['peas', 'green beans', 'kale', 'edamame', 'broccoli', 'asparagus'] Beverage 
// options:  
// ['juice', 'milk', 'water', 'soy milk', 'soda', 'tea']  
// Dessert options  
// ['apple', 'banana', 'more kale', 'ice cream', 'chocolate', 'kiwi'] 
// The number of meals is determined as an input.  
// • The meals must include one item from each category.  
// • No two meals should be identical. 

let proteins = ['chicken', 'pork', 'tofu', 'beef', 'fish', 'beans'];
let grains = ['rice', 'pasta', 'corn', 'potato', 'quinoa', 'crackers'];
let variables = ['peas', 'green beans', 'kale', 'edamame', 'broccoli', 'asparagus'];
let beverages = ['juice', 'milk', 'water', 'soy milk', 'soda', 'tea'];
let desserts = ['apple', 'banana', 'more kale', 'ice cream', 'chocolate', 'kiwi'];
let meals = [];

function createMeals(num) {
  for (let i = 0; i < num; i++) {
    let meal = [];
    meal.push(proteins[Math.floor(Math.random() * proteins.length)]);
    meal.push(grains[Math.floor(Math.random() * grains.length)]);
    meal.push(variables[Math.floor(Math.random() * variables.length)]);
    meal.push(beverages[Math.floor(Math.random() * beverages.length)]);
    meal.push(desserts[Math.floor(Math.random() * desserts.length)]);
    meals.push(meal);
  }
  console.log(meals);
}

createMeals(5);