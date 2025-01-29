// 1. If someone is applying to the academy’s website, create the conditional to cover these situations:  
// ● If the candidate is older than 30, print out: “You are not eligible. You may join other programs.”  
// ● If the candidate is between 18 and 30, print out: “You are eligible. Start your application.”  
// ● If the candidate is younger than 18, print out: “You may join the kids' program.” 
// ● If the candidate is older than 60, print out: “You may join the seniors’ program.” 
// ● Calculate the age using the year of birth dynamically. 

function academy(age_year) {
  age_year = String(age_year);
  let age 
  if (age_year.length === 4) {
    age =  (new Date().getFullYear() - age_year);
  }
  if (age > 30 && age <= 60) {
    console.log("You are not eligible. You may join other programs.");
  } else if (age >= 18 && age <= 30) {
    console.log("You are eligible. Start your application.");
  } else if (age < 18) {
    console.log("You may join the kids' program.");
  } else if (age > 60) {
    console.log("You may join the seniors program.");
  } else {
    console.log("Invalid age.");
  }
}
academy(2005);

// 2. Write a function that takes a string and switches the letters' case from upper to lower and vice versa.  
function versa(word) {
  word = word.split("").map((char) => char === char.toUpperCase() ? char.toLowerCase() : char.toUpperCase()).join("")
  return console.log(word);
}
versa("OrAnGe");

// Write a function that takes a string, capitalizes each word's first letter, and removes all spaces (Camel Case). 
function camelCase(string) {
  let arr = string.split(" ");
  arr.forEach((element, index) => {
    arr[index] = element.charAt(0).toUpperCase() + element.slice(1);
  })
  arr = arr.join("")
  return console.log(arr);
}
camelCase("Coding Academy by Orange");

//  4. Write a function that removes a specific element in an array. 
function removeElement(arr, ele) {
  arr.splice(arr.indexOf(ele), 1);
  return console.log(arr);
}
removeElement( ["Coding", "Academy", "By", "Orange"], "By" )


// 5. Write a function that checks if a number is odd or even. 
function oddOrEven(number) {
  number % 2 === 0 ? console.log("Even") : console.log("Odd");
}
oddOrEven(5);
oddOrEven(4);

// 6. Write a function that checks whether an input variable is a number. 
function numberCheck(input) {
  if (typeof input === "number") {
    console.log("Number");
  } else {
    console.log("Not a number");
  }
}
numberCheck(5);
numberCheck("Coding");

// 7. Write a function that finds the largest of two numbers. 
function largest(n1 , n2) {
   if (n1 == n2)  return console.log("equal");
  n2 > n1 ? console.log(`${n2} Larger than ${n1}`) : console.log(`${n1} Larger than ${n2}`);
}
largest(5, 10);
largest(20, 10);
largest(20, 20);

// 8. Write a function that checks if a triangle is equilateral, scalene, or isosceles. 
function triangle(a, b, c) {
  if (a === b && b === c) {
    console.log("Equilateral");
  } else if (a === b || b === c || a === c) {
    console.log("Isosceles");
  } else {
    console.log("Scalene");
  }
}
triangle(5, 5, 5);
triangle(5, 5, 6);
triangle(5, 6, 7);

// 9. Write a function that finds if a number is present in a given range.  
function findInRange(from , to , num) {
  if (num >= from && num <= to) {
    console.log("in range"); 
  } else {
    console.log("not in range");
  }
}
findInRange(1, 10, 5);
findInRange(1, 10, 15);

// 10. Write a function that checks whether a year is a leap year.  
function leapYear(year) {
  if (year % 4 === 0) {
    console.log("Leap year");
  } else {
    console.log("Not a leap year");
  }
}
leapYear(2020);
leapYear(2021);